<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryCreate extends Component
{
    public Category $category;

    protected $rules = [
        'category.name' => 'required|max:255',
        'category.description' => 'required|max:255',
        'category.status' => 'string',
    ];

    protected $messages = [
        'category.name.required' => 'Category name is required',
        'category.description.required' => 'Description is required',
    ];

    public function render()
    {
        return view('livewire.category.create');
    }

    public function mount()
    {
        $this->category = new Category();
    }

    public function store()
    {
        $this->validate();
        $this->category->status = $this->category->status ?? 'active';
        $this->category->save();
        return redirect()->route('categories');
    }
}
