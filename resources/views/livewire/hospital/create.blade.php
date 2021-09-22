@section('title', 'Create Hospital')

<div>
    <nav class="my-4 flex items-center justify-between">
        <ol class=" list-reset flex text-grey-dark">
            <li><a href="{{ route('dashboard') }}" class="font-bold flex items-center space-x-2 text-green-600">
                    <p>Home</p>
                </a></li>
            <li><span class="mx-2">/</span></li>
            <li>
                <a href="{{ route('hospitals') }}" class="font-bold flex items-center space-x-2 text-green-600">
                    <p>Hospitals</p>
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

            <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
                <div></div>
                <div class="col-span-5 flex justify-center lg:justify-start">
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
                <input required wire:model.defer="hospital.name" type="text" class="col-span-5 border p-2 rounded">
            </div>

            <div class="grid lg:grid-cols-6 grid-cols-1 items-center gap-2">
                <label for="">Description</label>
                <textarea required wire:model.defer="hospital.description" type="text"
                    class="col-span-5 border p-2 rounded">
                </textarea>
            </div>
            <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
                <label for="">Email</label>
                <input wire:model.defer="hospital.email" type="email" class="col-span-5 border p-2 rounded">
            </div>

            <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
                <label for="">Phone</label>
                <input required wire:model.defer="hospital.phone" type="phone" class="col-span-5 border p-2 rounded">
            </div>

            <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
                <label for="">Zip</label>
                <input wire:model.defer="hospital.zip" type="text" class="col-span-5 border p-2 rounded">
            </div>

            <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
                <label for="">City</label>
                <input required wire:model.defer="hospital.city" type="text" class="col-span-5 border p-2 rounded">
            </div>

            <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
                <label for="">State</label>
                <input required wire:model.defer="hospital.state" type="text" class="col-span-5 border p-2 rounded">
            </div>

            <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
                <label for="">Website</label>
                <input wire:model.defer="hospital.website" type="text" class="col-span-5 border p-2 rounded">
            </div>

            <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
                <label for="">Latitude</label>
                <input required wire:model.defer="hospital.latitude" type="text" class="col-span-5 border p-2 rounded">
            </div>

            <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
                <label for="">Longitude</label>
                <input required wire:model.defer="hospital.longitude" type="text" class="col-span-5 border p-2 rounded">
            </div>

            <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
                <label for="">Address</label>
                <textarea required wire:model.defer="hospital.address" type="text"
                    class="col-span-5 border p-2 rounded">
                </textarea>
            </div>

            <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
                <label for="">Type</label>
                <select class="col-span-5 border p-2 rounded" wire:model.defer="hospital.type">
                    <option value="Hospital" selected>Hospital</option>
                    <option value="Clinic">Clinic</option>
                    <option value="Other">Other</option>
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
