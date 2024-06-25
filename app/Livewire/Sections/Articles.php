<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Content\Article;

class Articles extends Component
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
        $queryArticle = Article::query();

        if ($this->query) {
            $queryArticle->where(function ($q) {
                $q->where('title', 'like', '%' . $this->query . '%');
            });
        }

        return view('livewire.sections.articles', [
            'sectiondata' => $this->sectiondata,
            'articles' => $queryArticle->paginate(4),
        ]);
    }
}
