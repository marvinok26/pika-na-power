<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Content\Event;

class Events extends Component
{
    public $sectiondata;
    public $events;

    public function mount()
    {
        $this->events = Event::all();
    }

    public function render()
    {
        return view('livewire.sections.events', [
            'sectiondata' => $this->sectiondata,
            'events' => $this->events,
        ]);
    }
}
