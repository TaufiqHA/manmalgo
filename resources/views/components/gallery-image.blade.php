@foreach ($galleries as $item)
    <img src="{{ url('storage/' . $item->image) }}" alt="1" class="rounded-xl" />  
@endforeach