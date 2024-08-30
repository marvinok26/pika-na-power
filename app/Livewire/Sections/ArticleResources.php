<?php

namespace App\Livewire\Sections;

use App\Models\Content\Article;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleResources extends Component
{
    use WithPagination;

    public $sectiondata;
    public $search = '';

    public function searchArticle()
    {
        $this->validate([
            'search' => 'required|min:3',
        ]);

        $this->resetPage();
    }

    public function render()
    {
        $articles = Article::query();

        if ($this->search) {
            $articles->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%');
            })->orderBy('date', 'desc');
        }

        return view('livewire.sections.article-resources', [
            'sectiondata' => $this->sectiondata,
            'articles' => $articles->orderBy('date', 'desc')->paginate(8),
        ]);
    }
}
