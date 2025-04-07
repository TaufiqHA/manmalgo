@foreach ($alumnis as $item)
    <div class="p-10 shadow-xl rounded-xl">
    <header class="flex gap-3 items-center mb-5">
        <div class="avatar">
            <div class="w-14 rounded-full">
                <img
                src="{{ asset('storage/' . $item->image) }}"
                />
            </div>
        </div>
        <span>
        <h2 class="text-md font-bold">{{ $item->name }}</h2>
        <p>Angkatan {{ $item->angkatan }}</p>
        </span>
    </header>
    <span class="flex gap-3 items-center">
        <img src="logo/toga2.png" alt="toga" class="w-5 h-5" />
        <p>{{ $item->universitas }}</p>
    </span>
    <span class="flex gap-3 items-center">
        <img src="logo/briefcase.png" alt="briefcase" class="w-5 h-5" />
        <p>{{ $item->pekerjaan }}</p>
    </span>
    </div>
@endforeach