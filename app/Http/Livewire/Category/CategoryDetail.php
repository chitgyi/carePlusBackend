<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryDetail extends Component
{
    public Category $category;

    public function mount($id)
    {
        $this->category = Category::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.category.detail', ['category' => $this->category]);
    }
}
