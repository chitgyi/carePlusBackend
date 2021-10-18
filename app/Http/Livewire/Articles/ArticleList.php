<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleList extends Component
{
    use WithPagination;
    private $perPage = 50;


    public function render()
    {
        $articles = Cache::remember(
            "articles-" . $this->page,
            now()->addMilliseconds(env('CACHE_MINUTES', 1000)),
            fn () => Article::latest()->paginate($this->perPage),
        );
        return view('livewire.articles.index', compact('articles'));
    }

    public function delete(Article $article)
    {
        if ($article->image && $article->image != '/uploads/dummy.jpg') {
            unlink(public_path($article->image));
        }
        $article->delete();
        Cache::forget("articles-{$this->page}");
    }
}
