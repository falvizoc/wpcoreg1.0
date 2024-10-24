<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Etiqueta;
use App\Models\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;
use SEO;

class PostController extends Controller
{

    public function index()
    {

        SEO::setTitle('Blog');
        SEO::setDescription('Mantente al día con las últimas noticias y novedades legales en nuestro blog jurídico. Descubre análisis detallados, actualizaciones legales y consejos útiles sobre una amplia gama de temas legales. Nuestro equipo de expertos en derecho está comprometido en brindarte información relevante y precisa para que estés siempre informado.');
        SEO::opengraph()->setUrl(route('blog.index'));
        SEO::opengraph()->addImage(asset('img/logo/logo-estudio-argerich-cuadrado.jpg'), ['height' => 150, 'width' => 150]);

        # Pregunto si eh mandado el numero de pagina en la url
        if(request()->page){
            $key = 'posts' . request()->page;
        }else{
            $key = 'posts' . request()->page;
        }

        if (Cache::has($key)) {
            # Obtengo el cache
            $posts = Cache::get($key);
        } else {
            $posts = Post::where('status',2)->latest('id')->paginate(5);
            # Guardo el cache, el tercer valor es el tiempo que quiero que dure el cache
            Cache::put($key, $posts);
        }

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){

        $this->authorize('published', $post);

        # Sumo +1 en visitas
        $visitas = intval($post->visits)+1;

        $post->visits = $visitas;
        $post->save();

        $posts_relacionados = Post::where('categoria_id',$post->categoria_id)
                                  ->where('status',2)
                                  ->where('id','<>',$post->id)
                                  ->latest('id')
                                  ->take(5)
                                  ->get();

        return view('posts.show', compact('post','posts_relacionados'));
    }

    public function categoria(Categoria $categoria){

        $posts = Post::where('categoria_id', $categoria->id)
                    ->where('status',2)
                    ->latest('id')
                    ->paginate(6);

        return view('posts.categoria', compact('categoria','posts'));
    }

    public function etiqueta(Etiqueta $etiqueta){

        # latest ordena de manera desendente
        $posts = $etiqueta->posts()->where('status',2)
                    ->latest('id')
                    ->paginate(6);

        return view('posts.etiqueta', compact('etiqueta','posts'));
    }
}

