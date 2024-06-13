<?php

namespace App\Livewire;

use Livewire\Component;

class SingleEvent extends Component
{
    public $posts;
    public $showModal = false;
    public $selectedPostIndex = 0;

    public function mount()
    {
        // Define a static array of image URLs
        $this->posts = [
            // (object) ['url' => 'https://plus.unsplash.com/premium_photo-1683290222161-c5a296987dc9?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
            (object) ['url' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg'],
            (object) ['url' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg'],
            (object) ['url' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg'],
            (object) ['url' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg'],
            (object) ['url' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg'],
            (object) ['url' => 'https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg'],
            // Add more URLs as needed
        ];
    }

    public function selectPost($index)
    {
        $this->selectedPostIndex = $index;
        $this->showModal = true;
    }

    public function previousPost()
    {
        $this->selectedPostIndex = ($this->selectedPostIndex - 1 + count($this->posts)) % count($this->posts);
    }

    public function nextPost()
    {
        $this->selectedPostIndex = ($this->selectedPostIndex + 1) % count($this->posts);
    }

    public function closePopup()
    {
        $this->showModal = false;
    }
    public function render()
    {
        return view('livewire.single-event');
    }
}
