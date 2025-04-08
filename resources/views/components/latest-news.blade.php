@foreach ($news as $item)
    <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
        <div class="relative">
            <img src="{{ asset('storage/' . $item->image) }}" alt="Tech News" class="w-full h-48 object-cover object-top">
            <span class="absolute top-3 left-3 px-3 py-1 bg-green-500 text-white text-xs font-semibold rounded-full">{{ $item->newsKategory->name }}</span>
        </div>
        <div class="p-4">
            <h3 class="headline text-lg font-bold mb-2 line-clamp-2"> <a href="{{ route('berita.show', ['news' => $item->id]) }}">{{ $item->title }}</a> </h3>
            <p class="text-gray-600 text-sm mb-3 line-clamp-3">{!! Str::limit($item->content, 100) !!}</p>
            <div class="flex items-center justify-between text-xs text-gray-500 mt-5">
                <span>{{ $item->created_at->format('d M Y') }}</span>
            </div>
        </div>
    </article>
@endforeach