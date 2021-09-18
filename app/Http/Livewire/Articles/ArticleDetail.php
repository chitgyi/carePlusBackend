<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class ArticleDetail extends Component
{
    public $article;

    public function mount($id)
    {
        $this->article = Article::with(['category', 'doctor'])->get()->find($id);
    }

    public function render()
    {
        if ($this->article) {
            return view('livewire.articles.detail', ['article' => $this->article]);
        }
        return abort(404);
    }
}
