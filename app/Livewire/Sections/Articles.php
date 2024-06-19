<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Content\Article;

class Articles extends Component
{
    public $sectiondata;
    public $articles;

    public function mount()
    {
        $this->articles = Article::latest()->take(8)->get();
    }

    public function render()
    {
        return view('livewire.sections.articles', [
            'sectiondata' => $this->sectiondata,
            'articles' => $this->articles,
        ]);
    }
}
