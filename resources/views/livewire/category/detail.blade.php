@section('title', 'Create Categories')

<div>
    <nav class="my-4 flex items-center justify-between">
        <ol class=" list-reset flex text-grey-dark">
            <li><a href="{{ route('dashboard') }}" class="font-bold flex items-center space-x-2 text-green-600">
                    <p>Home</p>
                </a></li>
            <li><span class="mx-2">/</span></li>
            <li>
                <a href="{{ route('categories') }}" class="font-bold flex items-center space-x-2 text-green-600">
                    <p>Categories</p>
                </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>
                <p class="text-grey-600">Details</p>
            </li>
        </ol>
    </nav>
    <div class="box rounded p-4 space-y-4">
        <div class="grid lg:grid-cols-6 grid-cols-1 items-center gap-2">
            <label for="">Category Name</label>
            <input readonly value="{{ $category->name }}" type="text" class="col-span-5 border p-2 rounded">
        </div>
        <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
            <label for="">Category's Description</label>
            <input readonly value="{{ $category->description }}" type="text" class="col-span-5 border p-2 rounded">

        </div>

        <div class="grid lg:grid-cols-6 grid-cols-1 gap-2 items-center">
            <label for="">Status</label>
            <input readonly value="{{ $category->status }}" class="col-span-5 border rounded p-2" />
        </div>
    </div>
</div>
