<x-app-layout>
        
    <section class="px-2">
      <div class="container px-5 py-6 mx-auto">
        
        <div class="w-full mb-2">
            <a href="{{route('blog.posts.categoria',$post->categoria->slug)}}">
                <span class="inline-block py-1 rounded text-xs lg:text-sm font-semibold tracking-wide uppercase cursor-pointer text-gray-500">
                    {{$post->categoria->nombre}}
                </span>
            </a>
        </div>
        
        <div class="mb-4">
            <h1 class="text-2xl lg:text-4xl font-semibold text-argerich">
                {{$post->titulo}}
            </h1>
            <div class="h-1 w-36 mt-4 bg-yellow-400"></div>
        </div>

        <div class="text-base lg:text-lg text-gray-500 mb-4">
            {!!$post->extracto!!}
        </div>

        <div class="mb-4 flex items-start justify-between w-full flex-row md:items-center text-coolGray-600">
            <div class="flex items-center space-x-2">
                <a class="inline-flex items-center ">
                    <img alt="blog" src="@if($post->user->profile_photo_path!=null) {{Storage::url($post->user->profile_photo_path)}} @else https://dummyimage.com/104x104 @endif" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                    <span class="flex-grow flex flex-col pl-4">
                      <span class="text-xs lg:text-base title-font font-medium text-gray-900"> Por <b>{{$post->user->name}}</b></span>
                      <span class="text-xs text-gray-400 racking-widest mt-0.5"> {{date_format($post->created_at,"d M Y")}}</span>
                    </span>
                  </a>
            </div>
            <a id="enlace-animado" href="#comentarios" class="hidden md:block flex-shrink-0 mt-3 text-xs lg:text-sm md:mt-0 text-gray-500">
                <i class="far fa-eye"></i> {{$post->visits}} visualizaciones | <i class="far fa-comments"></i> {{$post->comentarios->count()}} Comentarios
            </a>
        </div>

        <div>
            <hr class="mb-4">
        </div>

        <div class="flex items-center space-x-2 mb-4">
            <p class="flex-shrink-0  text-sm mt-0 text-gray-500">
                Compartir en 
            </p>
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}&t={{$post->nombre}}" class="inline-flex items-center justify-center w-9 h-9 mr-2 text-white bg-blue-800 rounded-full focus:shadow-outline hover:bg-blue-900 cursor-pointer transition ease-in duration-200">
                <i class="fab fa-facebook-f"></i>
            </a>

            <a target="_blank" href="https://twitter.com/intent/tweet?text={{$post->nombre}}&url={{Request::url()}}&via={{$post->user->name}}" class="inline-flex items-center justify-center w-9 h-9 mr-2 text-white bg-cyan-500 rounded-full focus:shadow-outline hover:bg-cyan-600 cursor-pointer transition ease-in duration-200">
                <i class="fab fa-twitter"></i>
            </a>
            <a target="_blank" href="https://api.whatsapp.com/send?text=Visita%20este%20articulo%20en%20{{Request::url()}}" class="inline-flex items-center justify-center w-9 h-9 mr-2 text-white bg-greenLime-500 rounded-full focus:shadow-outline hover:bg-greenLime-600 cursor-pointer transition ease-in duration-200">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- Contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    <img class="w-full h-80 object-cover object-center rounded-sm" src="@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2014/04/05/11/39/rain-316580_960_720.jpg @endif" alt="">
                </figure>

                <div>
                    <hr class="mt-4 mb-4">
                </div>

                <div id="cke_body" class="ckeditor text-base mt-4">
                    {!! $post->body!!}
                </div>

                <div id="comentarios">
                    @livewire('post-comentarios', ['post' => $post])
                </div>
            </div>

            {{-- Contenido Relacionado --}}
            <aside class="p-6 bg-gray-50 border border-tureGray-200 rounded-md">
                <h1 class="text-lg font-semibold text-gray-700 mb-4">Más sobre {{$post->categoria->nombre}}</h1>
                
                <ul>
                    @foreach ($posts_relacionados as $post_relacionado)
                         <li class="mb-4">
                            <a class="flex" href="{{route('posts.show',$post_relacionado->slug)}}">
                                <img class="w-36 h-20 object-cover object-center  hover:opacity-75 cursor-pointer transition ease-in duration-200" src="@if($post_relacionado->image) {{Storage::url($post_relacionado->image->url)}} @else https://cdn.pixabay.com/photo/2014/04/05/11/39/rain-316580_960_720.jpg @endif" alt="">
                                <span class="w-full ml-2 text-gray-700 hover:underline">{{$post_relacionado->nombre}}</span><br>
                            </a>
                        </li>
                        <div>
                            <hr class="mt-4 mb-4">
                        </div>
                    @endforeach

                    {{-- Etiquetas --}}
                    <div class="mt-2">
                        <h1 class="text-base text-gray-700 mb-4"> Temas Relacionados</h1>
                        @foreach ($post->etiquetas as $etiqueta)
                        <li class="mb-4 bg-gray-200 p-2 rounded-sm hover:bg-gray-300 cursor-pointer">
                           <a class="w-full p-2" href="{{route('posts.etiqueta', $etiqueta->slug)}}">
                              <i class="fa fa-tag mr-1" style="color: {{$etiqueta->codigo_color}}"></i>{{$etiqueta->nombre}}
                           </a>
                        </li>
                            {{-- <a href="{{route('posts.etiqueta', $etiqueta->slug)}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">#{{$etiqueta->nombre}}</a> --}}
                        @endforeach
                    </div>
                </ul>
            </aside>
        </div>
    </div>
    </section>

    <script>
        /*
            Valido que si viene ?comentario
            Detecto el id del comentario y hago scroll automatico
        */
        setTimeout(() => {
            let params = new URLSearchParams(location.search);
            var comentario = params.get('comentario');

            if(comentario!=null){
                const href = '#comentario-'+comentario;
                $("html, body").animate({ scrollTop: $(href).offset().top-100}, 800);
            }
        }, 500);
    
        /*
            Si hago clic a cualquier enlace con id #enlace-animado
            hago el scroll automatico derectando el href
        */
        $("#enlace-animado").on("click", function (e) {
            e.preventDefault();
            const href = $(this).attr("href");
            $("html, body").animate({ scrollTop: $(href).offset().top }, 800);
        });
    </script>
</x-app-layout>


