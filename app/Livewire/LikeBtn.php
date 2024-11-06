<?php

namespace App\Livewire;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LikeBtn extends Component
{
    // Post e Stato di default
    public $post;
    public $liked = false;

    protected $listeners = ['likeUpdate' => 'updateLikeState'];

    public function mount(Post $post)
    {
        // Setto il post locale sul post clickato
        $this->post = $post;
        $this->liked = $this->checkLike();
    }

    public function checkLike()
    {
        // Prendo il Like, dove il post corrisponde al post in locale settato prima, e dove lo user_id corrisponde a quello dello user Loggato
        return Like::where('post_id', $this->post->id)->where('user_id', Auth::id())->exists();
    }

    public function toggleLike()
    {
        $this->liked ? $this->removeLike() : $this->addLike();

        $this->liked = !$this->liked;

        $this->emitTo('post-show', 'likeUpdate', $this->post->id);
    }

    public function addLike()
    {
        Like::create([
            'post_id' => $this->post->id,
            'user_id' => Auth::id()
        ]);

        $this->post->increment('likes_count');
    }


    public function render()
    {
        return view('livewire.like-btn');
    }
}
