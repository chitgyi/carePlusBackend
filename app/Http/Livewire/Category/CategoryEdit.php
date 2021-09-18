<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryEdit extends Component
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


    public function mount($id)
    {
        $this->category = Category::find($id);
    }

    public function render()
    {
        return view('livewire.category.edit');
    }

    public function update()
    {
        $this->category->save();
        return redirect()->route('categories');
    }
}
