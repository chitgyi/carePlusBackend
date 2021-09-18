@section('title', 'Create Doctor')

<div>
    <nav class="my-4 flex items-center justify-between">
        <ol class=" list-reset flex text-grey-dark">
            <li><a href="{{ route('dashboard') }}" class="font-bold flex items-center space-x-2 text-green-600">
                    <p>Home</p>
                </a></li>
            <li><span class="mx-2">/</span></li>
            <li>
                <a href="{{ route('doctors') }}" class="font-bold flex items-center space-x-2 text-green-600">
                    <p>Doctors</p>
                </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>
                <p class="text-grey-600">Create</p>
            </li>
        </ol>

    </nav>

    <div class="box rounded p-4 space-y-4">
        <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
            <div></div>
            <div class="col-span-5">
                <label for="photo">
                    @if ($photo)
                        <img class="w-40 h-40 rounded-full object-cover" src=" {{ $photo->temporaryUrl() }}">
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
            <label for="">Name</label>
            <input required wire:model.defer="doctor.name" type="text" class="col-span-5 border p-2 rounded">
        </div>
        <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
            <label for="">Email</label>
            <input wire:model.defer="doctor.email" type="email" class="col-span-5 border p-2 rounded">
        </div>

        <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
            <label for="">Phone</label>
            <input required wire:model.defer="doctor.phone" type="phone" class="col-span-5 border p-2 rounded">
        </div>

        <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
            <label for="">Education</label>
            <input required wire:model.defer="doctor.education" type="text" class="col-span-5 border p-2 rounded">
        </div>

        <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
            <label for="">Address</label>
            <textarea required wire:model.defer="doctor.address" type="text" class="col-span-5 border p-2 rounded">
                </textarea>
        </div>
    </div>
</div>
