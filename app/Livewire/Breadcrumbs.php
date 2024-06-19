<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pages\Page;


class Breadcrumbs extends Component
{
    public function render()
    {
        return view('livewire.breadcrumbs');
    }
}
