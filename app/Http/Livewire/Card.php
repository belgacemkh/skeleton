<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    public array $data;

    public function loadCardData()
    {
        sleep(rand(1,3));
       $this->data = [
        'avatarURL' => 'https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/avatars/92/9223a4c46dd9c54ef0780bcd4e77559af5a8bcca_full.jpg',
        'title' => 'Jon Doe',
        'bio' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id obcaecati vel dolor ipsa sint, dignissimos!'

       ];
    }
    
    public function render()
    {
        return view('livewire.card');
    }
}
