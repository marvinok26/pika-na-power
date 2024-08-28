<?php

namespace App\Livewire\Sections;

use App\Models\Content\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Events extends Component
{
    use WithPagination;

    public $sectiondata;
    public $query = '';

    public function search()
    {
        $this->validate([
            'query' => 'required|min:3',
        ]);

        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.sections.events', [
            'sectiondata' => $this->sectiondata,
            'events' => Event::where('title', 'like', '%' . $this->query . '%')->orderBy('date', 'desc')->paginate(12),
        ]);
    }
}
