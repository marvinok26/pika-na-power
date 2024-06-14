<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class DemonstrationClass extends Component
{
    public $sectiondata;

    public function render()
    {
        return view('livewire.sections.demonstration-class', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
