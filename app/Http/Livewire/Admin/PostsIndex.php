<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = "bootstrap";
    protected $listeners = ['delete'];
    public $sort = 'id';
    public $direction = 'asc';

    public function render()
    {
        $posts = Post::with('categoria')
                        ->where('titulo','LIKE', "%" . $this->search . "%")     
                        ->where('extracto','LIKE', "%" . $this->search . "%")     
                        ->orWhere('created_at','LIKE','%'. $this->search. '%')
                        ->orderBy($this->sort, $this->direction)
                        ->paginate(5);

        return view('livewire.admin.posts-index', compact('posts'));
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function delete(Post $post){
        $post->delete();
    }

    public function order($sort)
    {
        # Doble clic en ordenar la columna entra an IF
        if($this->sort == $sort){
            # Si hice doble y era asc paso a desc, sino a asc
            if($this->direction == 'asc'){
                $this->direction = 'desc';
            }else{
                $this->direction = 'asc';
            }
        }else{
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

}
