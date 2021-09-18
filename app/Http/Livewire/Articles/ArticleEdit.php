<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use App\Models\Category;
use App\Models\Doctor;
use Livewire\Component;

class ArticleEdit extends Component
{
    public Article $article;

    protected $rules = [
        'article.title' => 'required|min:3',
        'article.content' => 'required',
        'article.category_id' => 'required|exists:categories,id',
        'article.doctor_id' => 'required|exists:doctors,id',

    ];

    protected $messages = [
        'article.title.required' => 'Title is required',
        'article.title.min' => 'Title must be at least 3 characters',
        'article.content.required' => 'Content is required',
        'article.category_id.required' => 'Category is required',
        'article.category_id.exists' => 'Category does not exist',
        'article.doctor_id.required' => 'Doctor is required',
        'article.doctor_id.exists' => 'Doctor does not exist',
    ];

    public function mount($id)
    {
        $this->article = Article::find($id);
    }

    public function render()
    {
        if ($this->article) {
            $categories = Category::all();
            $doctors = Doctor::all();
            return view('livewire.articles.edit', ['categories' => $categories, 'doctors' => $doctors]);
        }
        return abort(404);
    }

    public function update()
    {
        $this->validate();
        $this->article->save();
        return redirect()->route('articles');
    }
}
