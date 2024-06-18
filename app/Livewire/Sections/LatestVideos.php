<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Content\Video;

class LatestVideos extends Component
{
    public $sectiondata;
    public $videos;

    public function mount()
    {
        $this->videos = Video::latest()->take(4)->get();
    }

    public function render()
    {
        return view('livewire.sections.latest-videos', [
            'sectiondata' => $this->sectiondata,
            'videos' => $this->videos,
        ]);
    }
}
