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
          <input type="search" class="grow" placeholder="Search" />
          <kbd class="kbd kbd-sm">⌘</kbd>
          <kbd class="kbd kbd-sm">K</kbd>
        </label>
        <!-- search section end -->

        <!-- filter section start -->
        <div class="w-full flex justify-center lg:justify-end mt-5 lg:mt-0">
          <select class="select">
            <option disabled selected>Tahun Lulus</option>
            <option>Crimson</option>
            <option>Amber</option>
            <option>Velvet</option>
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
      <div class="w-full grid grid-flow-row grid-cols-1 lg:grid-cols-3 gap-2 lg:gap-4">
        <div class="p-10 shadow-xl rounded-xl">
          <header class="flex gap-3 items-center mb-5">
            <div class="avatar">
              <div class="w-14 rounded-full">
                <img
                  src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                />
              </div>
            </div>
            <span>
              <h2 class="text-md font-bold">Ahmad Fadillah</h2>
              <p>Angkatan 2020</p>
            </span>
          </header>
          <span class="flex gap-3 items-center">
            <img src="logo/toga2.png" alt="toga" class="w-5 h-5" />
            <p>Universitas Indonesia</p>
          </span>
          <span class="flex gap-3 items-center">
            <img src="logo/briefcase.png" alt="briefcase" class="w-5 h-5" />
            <p>Software Engineer at Google</p>
          </span>
        </div>
        <div class="p-10 shadow-xl rounded-xl">
          <header class="flex gap-3 items-center mb-5">
            <div class="avatar">
              <div class="w-14 rounded-full">
                <img
                  src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                />
              </div>
            </div>
            <span>
              <h2 class="text-md font-bold">Ahmad Fadillah</h2>
              <p>Angkatan 2020</p>
            </span>
          </header>
          <span class="flex gap-3 items-center">
            <img src="logo/toga2.png" alt="toga" class="w-5 h-5" />
            <p>Universitas Indonesia</p>
          </span>
          <span class="flex gap-3 items-center">
            <img src="logo/briefcase.png" alt="briefcase" class="w-5 h-5" />
            <p>Software Engineer at Google</p>
          </span>
        </div>
        <div class="p-10 shadow-xl rounded-xl">
          <header class="flex gap-3 items-center mb-5">
            <div class="avatar">
              <div class="w-14 rounded-full">
                <img
                  src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                />
              </div>
            </div>
            <span>
              <h2 class="text-md font-bold">Ahmad Fadillah</h2>
              <p>Angkatan 2020</p>
            </span>
          </header>
          <span class="flex gap-3 items-center">
            <img src="logo/toga2.png" alt="toga" class="w-5 h-5" />
            <p>Universitas Indonesia</p>
          </span>
          <span class="flex gap-3 items-center">
            <img src="logo/briefcase.png" alt="briefcase" class="w-5 h-5" />
            <p>Software Engineer at Google</p>
          </span>
        </div>
        <div class="p-10 shadow-xl rounded-xl">
          <header class="flex gap-3 items-center mb-5">
            <div class="avatar">
              <div class="w-14 rounded-full">
                <img
                  src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                />
              </div>
            </div>
            <span>
              <h2 class="text-md font-bold">Ahmad Fadillah</h2>
              <p>Angkatan 2020</p>
            </span>
          </header>
          <span class="flex gap-3 items-center">
            <img src="logo/toga2.png" alt="toga" class="w-5 h-5" />
            <p>Universitas Indonesia</p>
          </span>
          <span class="flex gap-3 items-center">
            <img src="logo/briefcase.png" alt="briefcase" class="w-5 h-5" />
            <p>Software Engineer at Google</p>
          </span>
        </div>
        <div class="p-10 shadow-xl rounded-xl">
          <header class="flex gap-3 items-center mb-5">
            <div class="avatar">
              <div class="w-14 rounded-full">
                <img
                  src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                />
              </div>
            </div>
            <span>
              <h2 class="text-md font-bold">Ahmad Fadillah</h2>
              <p>Angkatan 2020</p>
            </span>
          </header>
          <span class="flex gap-3 items-center">
            <img src="logo/toga2.png" alt="toga" class="w-5 h-5" />
            <p>Universitas Indonesia</p>
          </span>
          <span class="flex gap-3 items-center">
            <img src="logo/briefcase.png" alt="briefcase" class="w-5 h-5" />
            <p>Software Engineer at Google</p>
          </span>
        </div>
        <div class="p-10 shadow-xl rounded-xl">
          <header class="flex gap-3 items-center mb-5">
            <div class="avatar">
              <div class="w-14 rounded-full">
                <img
                  src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                />
              </div>
            </div>
            <span>
              <h2 class="text-md font-bold">Ahmad Fadillah</h2>
              <p>Angkatan 2020</p>
            </span>
          </header>
          <span class="flex gap-3 items-center">
            <img src="logo/toga2.png" alt="toga" class="w-5 h-5" />
            <p>Universitas Indonesia</p>
          </span>
          <span class="flex gap-3 items-center">
            <img src="logo/briefcase.png" alt="briefcase" class="w-5 h-5" />
            <p>Software Engineer at Google</p>
          </span>
        </div>
      </div>
    </div>
  </section>
  <!-- alumni section end -->

  <!-- pagination start -->
  <section class="mb-10">
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
  </section>
  <!-- pagination end -->

@endsection