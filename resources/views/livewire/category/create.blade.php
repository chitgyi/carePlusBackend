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
                <p class="text-grey-600">Create</p>
            </li>
        </ol>

    </nav>

    <form wire:submit.prevent="store">

        <div class="box rounded p-4 space-y-4">
            @if ($errors->any())
                <div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                    </svg>
                    <p>{{ $errors->first() }}</p>
                </div>
            @endif
            <div class="grid lg:grid-cols-6 grid-cols-1 items-center gap-2">
                <label for="">Category Name</label>
                <input wire:model.defer="category.name" type="text" class="col-span-5 border p-2 rounded">
            </div>
            <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
                <label for="">Category's Description</label>
                <input wire:model.defer="category.description" type="text" class="col-span-5 border p-2 rounded">

            </div>

            <div class="grid lg:grid-cols-6 grid-cols-1 gap-2 items-center">
                <label for="">Status</label>
                <select wire:model.defer="category.status" class="col-span-5 border rounded p-2">
                    <option value="active" selected>Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <div wire:loading.remove class="grid lg:grid-cols-6 grid-cols-1">
                <button type="submit"
                    class="lg:col-start-6 shadow-md text-center bg-green-500 text-white button font-medium rounded">
                    Create
                </button>
            </div>

        </div>
    </form>
</div>
