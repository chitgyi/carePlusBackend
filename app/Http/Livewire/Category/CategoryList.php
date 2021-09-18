<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryList extends Component
{
    public function render()
    {
        $categories = Category::latest()->get();
        return view('livewire.category.index', compact('categories'));
    }
}
