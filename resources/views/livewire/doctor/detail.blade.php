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
            <div class="col-span-5 flex lg:justify-start justify-center">
                <label for="photo">
                    @if ($doctor->image)
                        <img class="w-40 h-40 rounded-full object-cover" src=" {{ $doctor->image }}">
                    @endif
                </label>
            </div>
        </div>

        <div class="grid lg:grid-cols-6 grid-cols-1 items-center gap-2">
            <label for="">Name</label>
            <input readonly value="{{ $doctor->name }}" type="text" class="col-span-5 border p-2 rounded">
        </div>
        <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
            <label for="">Email</label>
            <input readonly value="{{ $doctor->email }}" type="email" class="col-span-5 border p-2 rounded">
        </div>

        <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
            <label for="">Phone</label>
            <input readonly value="{{ $doctor->phone }}" type="phone" class="col-span-5 border p-2 rounded">
        </div>

        <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
            <label for="">Education</label>
            <input readonly value="{{ $doctor->education }}" type="text" class="col-span-5 border p-2 rounded">
        </div>

        <div class="grid lg:grid-cols-6  grid-cols-1 gap-2 items-center">
            <label for="">Address</label>
            <input readonly value="{{ $doctor->address }}" type="text" class="col-span-5 border p-2 rounded">
        </div>
    </div>
</div>
