<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use App\Models\Category;
use App\Models\Doctor;
use Livewire\Component;
use Livewire\WithFileUploads;

class ArticleEdit extends Component
{
    use WithFileUploads;

    public Article $article;
    public $photo;

    protected $rules = [
        'article.title' => 'required|min:3',
        'article.content' => 'required',
        'article.category_id' => 'required|exists:categories,id',
        'article.doctor_id' => 'required|exists:doctors,id',
        'photo' => 'image|max:2014|nullable',
    ];

    protected $messages = [
        'article.title.required' => 'Title is required',
        'article.title.min' => 'Title must be at least 3 characters',
        'article.content.required' => 'Content is required',
        'article.category_id.required' => 'Category is required',
        'article.category_id.exists' => 'Category does not exist',
        'article.doctor_id.required' => 'Doctor is required',
        'article.doctor_id.exists' => 'Doctor does not exist',
        'photo.image' => 'Photo is not valid',
        'photo.max' => 'Photo is too large',
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
        if ($this->photo) {
            if ($this->article->image && $this->article->image != '/uploads/dummy.jpg') {
                unlink(public_path($this->article->image));
            }
            $this->article->image = '/uploads/' . $this->photo->store('photos/articles', 'public_uploads');
        }
        $this->article->save();
        return redirect()->route('articles');
    }
}
