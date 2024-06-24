<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pages\Page;

class HeaderNavigation extends Component
{
    public $pages;

    public function mount()
    {
        $pages = Page::where([['in_top_nav', true]])->orderBy('order', 'ASC')->tree()->get()->toTree();

        $this->pages = $pages;
    }

    public function render()
    {
        return view('livewire.header-navigation', [
            'pages' => $this->pages,
        ]);
    }
}
