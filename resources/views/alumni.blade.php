@extends('layouts.main')

@section('main')

<!-- hero section start -->
<div class="hero bg-green-200 min-h-fit pb-30 pt-50 text-green-900">
    <div class="hero-content text-center">
      <div class="max-w-xl">
        <h1 class ="text-2xl lg:text-5xl font-bold">Data Alumni</h1>
        <p class="py-6 text-sm lg:text-base">
          Jejak kesuksesan para alumni MAN 1 Gowa di berbagai bidang
        </p>
      </div>
    </div>
  </div>
  <!-- hero section end -->

  <!-- filter section start -->
  <section class="py-10">
    <div class="container mx-auto px-5 lg:px-0">
      <div class="flex flex-col lg:flex-row justify-center items-center lg:justify-between">
        <!-- search section start -->
        <label class="input">
          <svg
            class="h-[1em] opacity-50"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
          >
            <g
              stroke-linejoin="round"
              stroke-linecap="round"
              stroke-width="2.5"
              fill="none"
              stroke="currentColor"
            >
              <circle cx="11" cy="11" r="8"></circle>
              <path d="m21 21-4.3-4.3"></path>
            </g>
          </svg>
          <input id="search-input" type="search" class="grow" placeholder="Search" />
        </label>
        <!-- search section end -->

        <!-- filter section start -->
        <div class="w-full flex justify-center lg:justify-end mt-5 lg:mt-0">
          <select class="select">
            <option disabled selected>Tahun Lulus</option>
            @foreach (range(date('Y'), 2015) as $year)
              <option value="{{ $year }}">{{ $year }}</option>
            @endforeach
          </select>
        </div>
        <!-- filter section end -->
      </div>
    </div>
  </section>
  <!-- filter section end -->

  <!-- alumni section start -->
  <section class="py-10 lg:py-30">
    <div class="container mx-auto px-5 lg:px-0">
      <div id="card-container" class="w-full grid grid-flow-row grid-cols-1 lg:grid-cols-3 gap-2 lg:gap-4">
        {{-- card start --}}
        @include('components.card-alumni', ['alumnis' => $alumnis])
        {{-- card end --}}
      </div>
    </div>
  </section>
  <!-- alumni section end -->

  <!-- pagination start -->
  {{-- <section class="mb-10">
    <div class="container mx-auto">
      <div class="w-full flex justify-center">
        <div class="join">
          <button class="join-item btn">1</button>
          <button class="join-item btn">2</button>
          <button class="join-item btn btn-disabled">...</button>
          <button class="join-item btn">99</button>
          <button class="join-item btn">100</button>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- pagination end -->

@endsection

@push('script')
  <script>
    $(document).ready(function () {
      // fitur search
      $('#search-input').on('keyup', function (e) {
        let value = $(this).val();
        
        $.ajax({
          type: "GET",
          url: "{{ route('alumni.search') }}",
          data: {'query': value},
          success: function (response) {
            $('#card-container').html(response.html)
          }
        });
      });

      // fitur filter
      $('.select').change(function (e) { 
        e.preventDefault();
        var value = $(this).val();
        console.info(value);

        $.ajax({
          type: "GET",
          url: "{{ route('alumni.filter') }}",
          data: {'filter': value},
          success: function (response) {
            $('#card-container').html(response.html)
          }
        });
      });
    });
  </script>
@endpush