@extends('layouts.main')

@section('main')

<main class="container mx-auto px-4 py-30 flex flex-col lg:flex-row gap-8">
  <!-- Main Content -->
  <div class="lg:w-3/4">
      <!-- Featured Story -->
      <section class="mb-10 bg-white rounded-lg shadow-sm overflow-hidden">
          <div class="relative">
              <img src="{{ asset('storage/' . $headline->image) }}" alt="Climate Summit" class="w-full h-[400px] object-cover object-top">
              <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 text-white">
                  <span class="inline-block px-3 py-1 bg-green-500 text-white text-xs font-semibold rounded-full mb-3">{{ $headline->newsKategory->name }}</span>
                  <h1 class="headline text-2xl md:text-3xl lg:text-4xl font-bold mb-3"> <a href="{{ route('berita.show', ['news' => $headline->id]) }}"> {{ $headline->title }} </a> </h1>
                  <div class="hidden lg:inline-block text-gray-200 mb-4 max-w-full">{!! Str::limit($headline->content, 300) !!}</div>
                  <div class="lg:hidden text-gray-200 mb-4 max-w-full">{!! Str::limit($headline->content, 100) !!}</div>
                  <div class="mt-5 flex items-center space-x-4">
                      <img src="https://public.readdy.ai/ai/img_res/9becce01462bc9f60ff2d651e466e01b.jpg" alt="Reporter" class="w-10 h-10 rounded-full object-cover">
                      <div>
                          <p class="font-medium">By {{ $headline->user->name }}</p>
                          <p class="text-sm text-gray-300">{{ $headline->created_at->format('d M Y') }}</p>
                      </div>
                      <div class="ml-auto flex space-x-2">
                          <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition !rounded-button">
                              <i class="ri-bookmark-line text-white"></i>
                          </button>
                          <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition !rounded-button">
                              <i class="ri-share-line text-white"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- Category Filters -->
      <div class="flex items-center justify-between mb-6">
          <h2 class="text-xl font-bold">Berita Terbaru</h2>
          <select class="select">
            <option disabled selected>Kategori</option>
            @foreach ($categories as $item)
                <option id="filter" value="{{ $item->id }}" >{{ $item->name }}</option>
            @endforeach
          </select>
      </div>

      <!-- News Grid -->
      <div id="latest-news-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
        @include('components.latest-news', ['news' => $news])
      </div>

      <!-- Load More Button -->
      <div class="text-center mb-10">
          <button id="load-more" class="px-6 py-3 bg-green-500 text-white font-medium rounded-lg hover:bg-green-500/90 transition shadow-sm !rounded-button whitespace-nowrap" data-next-page="{{ $news->currentPage() + 1 }}">
              Muat Lebih Banyak
          </button>
      </div>
  </div>

  <!-- Sidebar -->
  <aside class="lg:w-1/4 space-y-8">
      <!-- Trending News -->
      <div class="bg-white rounded-lg shadow-sm p-5">
          <h3 class="text-lg font-bold mb-4 flex items-center">
              <div class="w-5 h-5 flex items-center justify-center mr-2 text-green-500">
                  <i class="ri-fire-line"></i>
              </div>
              Sedang Tren
          </h3>
          <div class="space-y-4">
              <div class="flex items-start gap-3">
                  <span class="text-xl font-bold text-green-500">01</span>
                  <p class="headline font-medium text-sm">Space Tourism Company Announces First Commercial Flight to Lunar Orbit</p>
              </div>
              <div class="flex items-start gap-3">
                  <span class="text-xl font-bold text-green-500">02</span>
                  <p class="headline font-medium text-sm">Major Cryptocurrency Exchange Faces Regulatory Scrutiny After Security Breach</p>
              </div>
              <div class="flex items-start gap-3">
                  <span class="text-xl font-bold text-green-500">03</span>
                  <p class="headline font-medium text-sm">Renowned Chef Opens Innovative Restaurant Focusing on Sustainable Cuisine</p>
              </div>
              <div class="flex items-start gap-3">
                  <span class="text-xl font-bold text-green-500">04</span>
                  <p class="headline font-medium text-sm">Tech Company Unveils Next-Generation Foldable Smartphone with Holographic Display</p>
              </div>
              <div class="flex items-start gap-3">
                  <span class="text-xl font-bold text-green-500">05</span>
                  <p class="headline font-medium text-sm">International Music Festival Announces Lineup Featuring Legendary Performers</p>
              </div>
          </div>
      </div>

      <!-- Popular Categories -->
      <div class="bg-white rounded-lg shadow-sm p-5">
          <h3 class="text-lg font-bold mb-4">Kategori Populer</h3>
          <div class="flex flex-wrap gap-2">
            @foreach ($categories as $item)
                <a href="#" class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition">{{ $item->name }}</a>
            @endforeach
          </div>
      </div>

      <!-- Social Media -->
      <div class="bg-white rounded-lg shadow-sm p-5">
          <h3 class="text-lg font-bold mb-4">Ikuti Kami</h3>
          <div class="flex justify-around">
              <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 transition">
                  <i class="ri-facebook-fill"></i>
              </a>
              <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-black text-white transition">
                  <i class="ri-twitter-x-fill"></i>
              </a>
              <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-green-600 text-white hover:bg-green-700 transition">
                  <i class="ri-whatsapp-fill"></i>
              </a>
          </div>
      </div>
  </aside>
</main>

@endsection

@push('script')
<script>
    $(document).ready(function () {
        var currentFilter = "all";
        // filter
        $(document).on('click', '#filter', function (e) {
            e.preventDefault();
            $('#filter').prop('selected', false);
            $(this).prop('selected', true);
            var data = $(this).val();
            currentFilter = data;

            $.ajax({
                type: "GET",
                url: "{{ route('berita.filter') }}",
                data: {filter: data},
                success: function (response) {
                    $('#latest-news-container').html(response.html);
                }
            });
        });

        // load more
        $('#load-more').click(function (e) { 
            e.preventDefault();
            var button = $(this)
            var next_page = button.data('next-page')

            if(next_page) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('berita.loadMore') }}",
                    data: {page: next_page, filter: currentFilter},
                    beforeSend: function() {
                        button.prop('disabled', true)
                    },
                    success: function (response) {
                        $('#latest-news-container').append(response.html);

                        if(response.next_page){
                            button.data('next-page', response.next_page);
                            button.prop('disabled', false);
                            button.text('Muat Lebih Banyak');
                        } else {
                            button.remove();
                        }
                    },
                    error: function(xhr) {
                        consol.log(xhr.responseText);
                        button.prop('disabled', false);
                        button.text('Muat Lebih Banyak');
                    }
                });
            }
        });
    });
</script>
@endpush