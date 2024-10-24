<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function creating(Post $post)
    {
        // \App::runningInconsole() pregunto si estoy insertando registros desde la consola
        // si lo estoy haciendo desde la consola con la negacion de ! me da falso y no entra
        if (! \App::runningInconsole()) {
            $post->user_id = auth()->user()->id;
        }
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    // deleting se ejecuta justo antes que se elimine el post
    public function deleting(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image->url);
            $post->image->delete();
        }
                
        # Eliminar el cache para actualizacion 
        Cache::flush();
    }
}
