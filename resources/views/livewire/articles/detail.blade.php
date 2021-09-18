@section('title', 'Article Details')

<div>
    <nav class="my-4 flex items-center justify-between">
        <ol class=" list-reset flex text-grey-dark">
            <li><a href="{{ route('dashboard') }}" class="font-bold flex items-center space-x-2 text-green-700">
                    <p>Home</p>
                </a></li>
            <li><span class="mx-2">/</span></li>
            <li><a href="{{ route('articles') }}" class="font-bold flex items-center space-x-2 text-green-700">
                    <p>Articles</p>
                </a></li>
            <li><span class="mx-2">/</span></li>
            <li>
                <p class="text-grey-600">Article Details</p>
            </li>
        </ol>

    </nav>
    <div class="box rounded p-4 space-y-4">
        <div class="grid lg:grid-cols-6 grid-cols-1 items-center gap-2">
            <label for="">Image</label>
            <img src="{{ $article->image }}" class="rounded-md" />
        </div>
        <div class="grid lg:grid-cols-6 grid-cols-1 items-center gap-2">
            <label for="">Title</label>
            <input readonly value="{{ $article->title }}" type="text" class="col-span-5 border p-2 rounded">
        </div>
        <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
            <label for="">Content</label>
            <input readonly type="text" value="{{ $article->content }}"
                class="col-span-5 whitespace-nowrap border p-2 rounded" />
        </div>

        <div class="grid lg:grid-cols-6 grid-cols-1 gap-2 items-center">
            <label for="">Category</label>
            <input readonly value="{{ $article->category->name }}" type="text" class="col-span-5 border p-2 rounded">
        </div>

        <div class="grid lg:grid-cols-6 grid-cols-1 gap-2 items-center">
            <label for="">Doctor</label>
            <input readonly value="{{ $article->doctor->name }}" type="text" class="col-span-5 border p-2 rounded">
        </div>

    </div>
</div>
