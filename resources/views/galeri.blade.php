@extends('layouts.main')

@section('main')

<!-- hero section start -->
<div class="hero bg-green-200 min-h-fit pb-30 pt-50 text-green-900">
    <div class="hero-content text-center">
      <div class="max-w-xl">
        <h1 class="text-2xl lg:text-5xl font-bold">Galeri Foto</h1>
        <p class="py-6 text-sm lg:text-base">Dokumentasi kegiatan dan momen berkesan MAN 1 Gowa</p>
      </div>
    </div>
  </div>
  <!-- hero section end -->

  <!-- filter section start -->
  <section class="py-10 border-b border-b-gray-200">
    <div class="container mx-auto px-5 lg:px-0">
      <div class="flex flex-wrap justify-center gap-3">
        <button class="filter-all btn rounded-full active border-none">
          Semua
        </button>
        @foreach ($tags as $item)
          <button
            class="filter btn rounded-full deactivate border-none"
            data-filter="{{ $item->id }}"
          >
            {{ $item->name }}
          </button>  
        @endforeach
      </div>
    </div>
  </section>
  <!-- filter section end -->

  <!-- galery section start -->
  <section class="py-30">
    <div class="container mx-auto px-5 lg:px-0">
      <div id="gallery_image_section" class="w-full columns-2 lg:columns-3 gap-2 lg:gap-4">
        @include('components.gallery-image')
      </div>
      <span class="w-full flex justify-center mt-8">
        <button id="load-more" class="btn bg-green-600 text-white rounded-xl" data-next-page="{{ $galleries->currentPage() + 1 }}" >
          Muat Lebih banyak <i data-feather="arrow-down" width="18px"></i>
        </button>
      </span>
    </div>
  </section>
  <!-- galery section end -->

@endsection

@push('script')
  <script>
    $(document).ready(function () {
      var currentFilter = 'all';

      $(document).on('click', '.filter', function (e) {
        e.preventDefault();
        $('.filter').removeClass('active').addClass('deactivate');
        var data = $(this).data('filter');
        $(this).removeClass('deactivate');
        $(this).addClass('active');
        $('.filter-all').removeClass('active').addClass('deactivate');
        currentFilter = data;
        var button = $('#load-more')
        
        $.ajax({
          type: "GET",
          url: "{{ route('gallery.filter') }}",
          data: {filter: data},
          success: function (response) {
            $('#gallery_image_section').html(response.html);

            if(response.next_page) {
              button.data('next-page', response.next_page);
              button.prop('disabled', false);
              button.text('Load More');
            } else {
              button.remove();
            }
          }
        });
      });

      $('#load-more').click(function (e) { 
        e.preventDefault();
        var button = $(this);
        var nextPage = button.data('next-page')

        if (nextPage) {
                $.ajax({
                    url: "{{ route('load.more') }}",
                    type: 'GET',
                    data: {page: nextPage, filter: currentFilter},
                    beforeSend: function() {
                        button.prop('disabled', true);
                    },
                    success: function(response) {
                        // Tambahkan konten baru
                        $('#gallery_image_section').append(response.html);
                        
                        // Update next page
                        if (response.next_page) {
                            button.data('next-page', response.next_page);
                            button.prop('disabled', false);
                            button.text('Load More');
                        } else {
                            // Sembunyikan tombol jika tidak ada halaman lagi
                            button.remove();
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                        button.prop('disabled', false);
                        button.text('Load More');
                    }
                });
            }
      });

      $('.filter-all').click(function (e) { 
        e.preventDefault();
        $(this).removeClass('deactivate').addClass('active');
        $('.filter').removeClass('active').addClass('deactivate');
        var button = $('#load-more');
        var nextPage = button.data('next-page')

        $.ajax({
          type: "GET",
          url: "{{ route('gallery.all') }}",
          success: function (response) {
            $('#content').html(response.html);
          }
        });
      });
    });
  </script>
@endpush