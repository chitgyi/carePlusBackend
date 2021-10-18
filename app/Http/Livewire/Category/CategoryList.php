<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryList extends Component
{
    use WithPagination;

    public function render()
    {
        $categories = cache()
            ->remember(
                'categories-' . $this->page,
                now()->addMillisecond(env('CACHE_TIMEOUT', 1000)),
                fn () => Category::latest()->paginate(50),
            );
        return view('livewire.category.index', compact('categories'));
    }

    public function delete(Category $category)
    {
        $category->delete();
        cache()->forget('categories-' . $this->page);
    }
}
