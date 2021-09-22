@section('title', 'Edit Article')

<div>
    <nav class="my-4 flex items-center justify-between">
        <ol class=" list-reset flex text-grey-dark">
            <li><a href="{{ route('dashboard') }}" class="font-bold flex items-center space-x-2 text-green-700">
                    <p>Home</p>
                </a></li>
            <li><span class="mx-2">/</span></li>
            <li><a href="{{ route('articles') }}" class="font-bold flex items-center space-x-2 text-green-700">
                    <p>Article</p>
                </a></li>
            <li><span class="mx-2">/</span></li>
            <li>
                <p class="text-grey-600">Edit Article</p>
            </li>
        </ol>

    </nav>
    <form wire:submit.prevent="update">

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

            <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
                <div></div>
                <div class="col-span-5 flex justify-center lg:justify-start">
                    <label for="photo">
                        @if ($photo)
                            <img class="w-40 h-40 rounded-full object-cover" src=" {{ $photo->temporaryUrl() }}">
                        @elseif($article->image)
                            <img class="w-40 h-40 rounded-full object-cover" src=" {{ $article->image }}">
                        @else
                            <div
                                class="w-40 h-40 flex bg-gray-300 text-gray-500 justify-center object-cover items-center rounded-full">
                                <svg class="" xmlns=" http://www.w3.org/2000/svg" width="40" height="40"
                                    fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
                                </svg>

                            </div>
                        @endif
                    </label>
                </div>
                <input type="file" id="photo" hidden wire:model="photo">
            </div>

            <div class="grid lg:grid-cols-6 grid-cols-1 items-center gap-2">
                <label for="">Title</label>
                <input required wire:model.defer="article.title" type="text" class="col-span-5 border p-2 rounded">
            </div>
            <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
                <label for="">Content</label>
                <textarea required wire:model.defer="article.content" type="text" class="col-span-5 border p-2 rounded">
                </textarea>
            </div>

            <div class="grid lg:grid-cols-6 grid-cols-1 gap-2 items-center">
                <label for="">Category</label>
                <select required wire:model.defer="article.category_id" class="col-span-5 border rounded p-2">
                    <option selected>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id == $article->category_id ? 'selected' : '' }}>{{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="grid lg:grid-cols-6 grid-cols-1 gap-2 items-center">
                <label for="">Doctor</label>
                <select required wire:model.defer="article.doctor_id" class="col-span-5 border rounded p-2">
                    <option selected>Select Doctor</option>
                    @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}"
                            {{ $doctor->id == $article->doctor_id ? 'selected' : '' }}>{{ $doctor->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="grid lg:grid-cols-6 grid-cols-1 gap-2 items-center">
                <label for="">Status</label>
                <select required wire:model.defer="article.status" class="col-span-5 border rounded p-2">
                    <option disabled selected>Select Status</option>
                    @foreach (App\Models\Article::STATUS as $status)
                        <option value="{{ $status }}" {{ $article->status == $status ? 'selected' : '' }}>
                            {{ $status }}</option>
                        </option>
                    @endforeach
                </select>
            </div>

            <div wire:loading.remove class="grid lg:grid-cols-6 grid-cols-1">
                <button type="submit"
                    class="lg:col-start-6 shadow-md text-center bg-green-700 text-white button font-medium rounded">
                    Update
                </button>
            </div>

        </div>
    </form>
</div>
