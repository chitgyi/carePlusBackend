<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class ArticleList extends Component
{
    public function render()
    {
        $articles = Article::latest()->get();
        return view('livewire.articles.index', compact('articles'));
    }

    public function delete(Article $article)
    {
        $article->delete();
    }
}
