@section('title', 'Articles')

<div>
    <div class="my-4 flex items-center justify-between">
        <ol class=" list-reset flex text-grey-dark">
            <li><a href="{{ route('dashboard') }}" class="font-bold flex items-center space-x-2 text-green-700">
                    <p>Home</p>
                </a></li>
            <li><span class="mx-2">/</span></li>
            <li>
                <p class="text-grey-600">Articles</p>
            </li>
        </ol>
        <div>
            <a href="{{ route('articles.create') }}"
                class="button bg-green-700 text-white rounded flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                <p>Create</p>
            </a>
        </div>
    </div>

    <div class="bg-gray-100 lg:box rounded">
        <div class="lg:grid hidden grid-cols-6 bg-green-700 text-white rounded-t p-3">
            <div class="grid grid-cols-4 col-span-1">
                <div>#</div>
                <div class="text-center col-span-3">Image</div>
            </div>
            <div class="text-left">Title</div>
            <div class="text-left">Status</div>
            <div class="col-span-2 text-left">Description</div>
            <div class="text-center">Actions</div>
        </div>

        <div class="grid lg:gap-0 gap-3">
            @foreach ($articles as $key => $article)
                <div class="grid lg:grid-cols-6 p-3 border-b lg:gap-0 lg:box bg-white rounded gap-3">
                    <div class="grid lg:grid-cols-4">
                        <div class="lg:flex hidden">{{ $key + 1 }}</div>
                        <div class="flex items-center lg:col-span-3 justify-center">
                            @if ($article->image)
                                <img class="lg:w-24 w-full sm:h-52 lg:h-20 rounded-md" src="{{ $article->image }}"
                                    alt="{{ $article->title }}">
                            @endif
                        </div>
                    </div>
                    <div class="text-left font-medium lg:font-normal">{{ $article->title }}</div>
                    <div class="text-left">
                        <span class="{{ $article->status }} px-3 py-1 rounded">
                            {{ $article->status }}
                        </span>
                    </div>
                    <div class="lg:col-span-2 line-clamp-3 text-left">{{ $article->content }}</div>
                    <div class="lg:hidden sm:block border-t"></div>
                    <div class="flex items-center space-x-3 justify-between lg:justify-center">
                        <a href="{{ route('articles.detail', $article->id) }}" title="Details">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-book" viewBox="0 0 16 16">
                                <path
                                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                            </svg>
                        </a>

                        <a href="{{ route('articles.edit', $article->id) }}" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </a>

                        <form wire:submit.prevent="delete({{ $article->id }})">
                            <button type="submit" title="Delete" class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-trash cursor-pointer" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
