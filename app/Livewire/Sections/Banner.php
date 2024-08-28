<?php

namespace App\Livewire\Sections;

use App\Models\Sections\Banner as SectionsBanner;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Banner extends Component
{
    public $sectiondata;
    public $section;
    public $slider;

    public function mount()
    {
        $this->slider = SectionsBanner::where('page_section_id', $this->section->pivot->id)->get();
    }

    public function render()
    {
        return view('livewire.sections.banner');
    }
}
