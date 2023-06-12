<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogPost extends Component
{
    public array $post;

    public function loadPostData()
    {
        sleep(rand(1,3));
         
        $this->post = [
            'posterUrl' =>'https://images.unsplash.com/photo-1496171367470-9ed9a91ea931?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
            'posterDescription' =>'Fireworks',
            'title' => 'Photos d’actualités, Affaires et travail',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente in ex fugiat quo maxime fuga necessitatibus, explicabo ad autem, quia cupiditate omnis similique inventore eligendi odit, ullam vero. Ea?',
            'authorAvatarUrl' => 'https://images.unsplash.com/profile-1551994941432-afc3dca6deb3?dpr=1&auto=format&fit=crop&w=64&h=64&q=60&crop=faces&bg=fff',
            'authorName' => 'Domenico Loia',
            'publishedAt' => 'May 30, 2017'
         ];
    }
    
    public function render()
    {
        return view('livewire.blog-post');
    }
}
