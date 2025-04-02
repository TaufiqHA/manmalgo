@extends('layouts.main')

@section('main')

    <!-- hero section start -->
    <div
      class="hero min-h-screen"
      style="background-image: url('img/school.jpg')"
    >
      <div class="hero-overlay"></div>
      <div class="hero-content text-neutral-content text-center">
        <div class="max-w-5xl">
          <h1 class="mb-5 text-2xl lg:text-5xl font-bold">Selamat Datang di MAN 1 GOWA</h1>
          <p class="mb-5 text-sm lg:text-base">
            Membentuk Generasi Unggul, Berakhlak Mulia dan Berwawasan Global
          </p>
          <a
            href="#superiority"
            class="btn bg-green-800 border-none text-white"
          >
            Pelajari Lebih Lanjut
          </a>
        </div>
      </div>
    </div>
    <!-- hero section end -->

  <!-- superiority section start -->
  <section id="superiority" class="my-30">
    <div class="container mx-auto">
      <div class="flex justify-between gap-30">
        <div class="flex flex-col gap-4">
          <img src="logo/book.png" alt="book" class="w-12 h-12" />
          <h2 class="text-lg font-bold">Kurikulum Terkini</h2>
          <p>
            Mengimplementasikan kurikulum nasional dengan pengayaan program
            keagamaan
          </p>
        </div>
        <div class="flex flex-col gap-4">
          <img src="logo/group.png" alt="group " class="w-12 h-12" />
          <h2 class="text-lg font-bold">Guru Berkualitas</h2>
          <p>Didukung oleh tenaga pengajar profesional dan berpengalaman</p>
        </div>
        <div class="flex flex-col gap-4">
          <img src="logo/building.png" alt="building" class="w-12 h-12" />
          <h2 class="text-lg font-bold">Fasilitasn Modern</h2>
          <p>Dilengkapi dengan fasilitas pembelajaran modern dan nyaman</p>
        </div>
      </div>
    </div>
  </section>
  <!-- superiority section end -->

  <!-- about section start -->
  <section class="my-30">
    <div class="container mx-auto flex justify-between gap-10">
      <img
        src="img/Tianyou Experimental Primary School and Kindergarten, Suzhou,China by BAU.jpeg"
        alt="school"
        class="max-w-2xl rounded-2xl"
      />
      <div class="flex max-w-3xl flex-col justify-center gap-4">
        <h2 class="text-2xl font-bold">Tentang MAN 1 GOWA</h2>
        <p class="text-lg">
          MAN 1 GOWA adalah madrasah aliah negeri yang berkomintmen untuk
          memberikan pendidikan berkualitas dengna mamdukan niai-nilai
          keislaman dan pembelajaran modern.
        </p>
        <ul
          class="list-image-[url({{ url('logo/check-mark.png') }})] text-lg list-inside font-semibold leading-10"
        >
          <li>Akreditasi A</li>
          <li>Program Unggulan Keagamaan</li>
          <li>Ekstrakurikuler Beragam</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- about section end  -->

  <!-- program section start -->
  <section class="my-40">
    <div class="text-center container mx-auto">
      <h2 class="text-2xl font-bold mb-10">Program Unggulan</h2>
      <div class="flex justify-between gap-10">
        <div>
          <div class="card bg-base-100 w-full shadow-md">
            <figure>
              <img
                src="img/activity/Greenpoint Kids Build Vertical Garden Farm with Help from Solar One and SYSTEM Program.jpeg"
                alt="program"
                class="rounded-xl"
              />
            </figure>
            <div class="card-body items-start text-start">
              <h2 class="card-title text-start">IPA</h2>
              <p>Program unggulan dengan fokus pada sains dan teknologi</p>
            </div>
          </div>
        </div>
        <div>
          <div class="card bg-base-100 w-full shadow-md">
            <figure>
              <img
                src="img/activity/Greenpoint Kids Build Vertical Garden Farm with Help from Solar One and SYSTEM Program.jpeg"
                alt="program"
                class="rounded-xl"
              />
            </figure>
            <div class="card-body items-start text-start">
              <h2 class="card-title text-start">IPS</h2>
              <p>Program dengan penekanan pada ilmu sosial dan ekonomi</p>
            </div>
          </div>
        </div>
        <div>
          <div class="card bg-base-100 w-full shadow-md">
            <figure>
              <img
                src="img/activity/Schools’ ‘land lab’ lives up to billing.jpeg"
                alt="prggram"
                class="rounded-xl"
              />
            </figure>
            <div class="card-body items-start text-start">
              <h2 class="card-title text-start">Keagamaan</h2>
              <p>Program khusus dengan pendalaman ilmu agama islam</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- program section end -->

  <!-- stat section start -->
  <section class="my-30">
    <div class="container mx-auto flex justify-around">
      <div class="stats">
        <div class="stat text-center">
          <div class="stat-value text-green-700">500+</div>
          <div class="stat-desc text-lg font-semibold">Siswa Aktif</div>
        </div>
      </div>
      <div class="stats">
        <div class="stat text-center">
          <div class="stat-value text-green-700">50+</div>
          <div class="stat-desc text-lg font-semibold">Guru & Staff</div>
        </div>
      </div>
      <div class="stats">
        <div class="stat text-center">
          <div class="stat-value text-green-700">15+</div>
          <div class="stat-desc text-lg font-semibold">Ekstrakurikuler</div>
        </div>
      </div>
      <div class="stats">
        <div class="stat text-center">
          <div class="stat-value text-green-700">90%</div>
          <div class="stat-desc text-lg font-semibold">Tingkat Kelulusan</div>
        </div>
      </div>
    </div>
  </section>
  <!-- stat section end -->

  <!-- history section start -->
  <section class="my-30">
    <header class="w-full text-center">
      <h2 class="text-2xl font-bold mb-10">Sejarah MAN 1 GOWA</h2>
    </header>
    <div class="container mx-auto">
      <div class="flex justify-between gap-10">
        <img
          src="img/Studios Architecture Designs an Eco-Friendly School in Washington.jpeg"
          alt="header image"
          class="rounded-xl"
        />
        <article class="flex flex-col justify-center text-justify gap-4">
          <p>
            MAN 1 Gowa didirikan pada tahun 1975 sebagai respons terhadap
            kebutuhan islam yang berkualitas di wilayah Gowa.
          </p>
          <p>
            Bermula dari sebuah gedung sederhana dengan beberapa ruang kelas,
            MAN 1 Gowa terus berkembang menjadi institusi pendidikan modern
            yang mengintegrasikan nilai-nilai Islam dengna pendidikan umum.
          </p>
          <p>
            Selama perjalanannya, MAN 1 Gowa telah menghasilkan ribuan alumni
            yang kini berperan aktif dalam berbagai bidang di masyarakat.
          </p>
        </article>
      </div>
    </div>
  </section>
  <!-- history section end -->

  <!-- visi misi section start -->
  <section class="my-30">
    <header class="w-full text-center">
      <h1 class="text-2xl font-bold mb-10">Visi & Misi</h1>
    </header>
    <div class="container mx-auto">
      <div class="flex justify-between gap-10">
        <div class="w-full">
          <header class="flex items-center gap-3 mb-5">
            <img src="logo/eye.png" alt="eye logo" class="w-10 h-10" />
            <h2 class="text-lg font-bold">Visi</h2>
          </header>
          <p class="text-md">
            Menjadi madrasah unggul yang menghasilkan lulusan beriman,
            berilmu, berakhlak mulia dan berdaya saing global.
          </p>
        </div>
        <div class="w-full">
          <header class="flex items-center gap-3 mb-5">
            <img src="logo/target.png" alt="target logo" class="w-10 h-10" />
            <h2 class="text-lg font-bold">Misi</h2>
          </header>
          <ul
            class="list-image-[url({{ url('logo/check-mark.png') }})] text-lg list-inside leading-10"
          >
            <li>Menyelenggarakan pendidikan islam yang berkualitas</li>
            <li>Mengembangkan pemebelajaran berbasis teknologi modern</li>
            <li>Membina karakter dan kepribadian islami</li>
            <li>Meningkatkan prestasi dan non-akademik</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- visi misi section end -->

  <!-- prestasi section start -->
  <section class="my-30">
    <header class="w-full text-center mb-10">
      <h2 class="text-2xl font-bold">Prestasi Sekolah</h2>
    </header>
    <div class="container mx-auto">
      <div class="flex justify-around gap-10">
        <figure class="w-xl">
          <img
            src="img/activity/Schools’ ‘land lab’ lives up to billing.jpeg"
            alt="lab"
            class="rounded-xl"
          />
        </figure>
        <div class="flex flex-col justify-center gap-5">
          <article class="px-3 border-l-3 border-l-green-700">
            <h2 class="font-semibold mb-2">
              Juara umum Olimpieade Sains Tingkat Provinsi 2024
            </h2>
            <p>
              Tim olimipade sains MAN 1 Gowa berhasil meraih gelar juara umum
              dalam kompetisi tingkat provinsi, membuktikan keunggulan dalam
              bidang akademik.
            </p>
          </article>
          <article class="px-3 border-l-3 border-l-green-700">
            <h2 class="font-semibold mb-2">
              Juara 1 Kompetisi Robotik Nasional 2024
            </h2>
            <p>
              Prestasi membanggakan diaraih oleh tim robotik sekolah dalam
              ajang nasional, menunjukkan kamampuan inovasai dan teknologi
              yang dimiliki siswa.
            </p>
          </article>
          <article class="px-3 border-l-3 border-l-green-700">
            <h2 class="font-semibold mb-2">
              Best Performance Festival Seni Budaya Madrasah 2024
            </h2>
            <p>
              Penampilan memukau dari grup kesenian sekolah meraih penghargaan
              tertinggi dalam ferstival yang diikuti oleh madrasah
              se-indonesia
            </p>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- prestasi section end -->

  <!-- informasi section start -->
  <section class="mt-30 py-20 bg-green-700">
    <div
      class="container mx-auto text-center flex flex-col gap-5 items-center"
    >
      <h2 class="text-5xl font-bold text-white">
        Bergabung dengan MAN 1 Gowa
      </h2>
      <p class="text-lg text-white">
        Daftarkan diri anda sekarang menjadi bagian dari generasi unggul MAN 1
        Gowa
      </p>
      <a
        href="/info"
        class="px-3 py-5 bg-white text-green-700 w-md rounded-xl mt-10"
      >
        Informasi Pendaftaran
      </a>
    </div>
  </section>
  <!-- informasi section end -->

  @endsection