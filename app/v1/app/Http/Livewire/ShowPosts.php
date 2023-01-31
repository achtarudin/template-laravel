<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public $counter = 0;


    public function render()
    {
        return view('livewire.show-posts');
    }

    public function increment()
    {
        $this->counter = $this->counter + 1;
    }

    public function decrement()
    {
        $this->counter = $this->counter - 1;
    }
}
