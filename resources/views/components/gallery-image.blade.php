@foreach ($galleries as $item)
    <img src="{{ url('storage/' . $item->image) }}" alt="1" />  
@endforeach