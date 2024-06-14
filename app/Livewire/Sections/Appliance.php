<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class Appliance extends Component
{
    public $sectiondata;
    public $appliances;

    public function mount()
    {
        $this->appliances = Appliance::latest()->take(4)->get();
    }

    public function render()
    {
        return view('livewire.sections.appliance', [
            'sectiondata' => $this->sectiondata,
            'appliances' => $this->appliances,
        ]);
    }
}
