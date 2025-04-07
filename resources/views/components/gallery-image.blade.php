@foreach ($galleries as $item)
    <div class="w-full break-inside-avoid mb-2 lg:mb-3">
        <img src="{{ url('storage/' . $item->image) }}" alt="1" class="rounded-xl" />
    </div>
@endforeach