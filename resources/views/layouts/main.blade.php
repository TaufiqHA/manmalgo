<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>MAN 1 GOWA | Home</title>
  </head>
  <body>
    <!-- navbar start -->
    <div class="navbar bg-base-100 shadow-sm fixed z-10">
      <div class="flex-1 flex items-center">
        <img src="logo/toga.png" alt="toga" class="w-10 h-10" />
        <a class="btn btn-ghost text-xl hover:text-green-700">MAN 1 GOWA</a>
      </div>
      <div id="menu" class="flex-none">
        <ul class="menu menu-horizontal px-1">
          <li><a href="/">Beranda</a></li>
          <li>
            <details>
              <summary>Profil</summary>
              <ul class="bg-base-100 rounded-t-none p-2">
                <li><a>Sejarah</a></li>
                <li><a>Visi dan Misi</a></li>
                <li><a>Struktur Organisasi</a></li>
                <li><a>Guru dan Staff</a></li>
                <li><a>Program Sekolah</a></li>
                <li><a>Prestasi Sekolah</a></li>
              </ul>
            </details>
          </li>
          <li><a href="/program">Program</a></li>
          <li><a href="/fasilitas">Fasilitas</a></li>
          <li><a href="/galeri">Album</a></li>
          <li><a href="/alumni">Alumni</a></li>
          <li><a href="/berita">Berita</a></li>
          <li><a href="/kontak">Kontak</a></li>
        </ul>
      </div>
    </div>
    <!-- navbar end -->

    @yield('main')

    <!-- footer section start -->
    <footer class="footer sm:footer-horizontal bg-gray-800 text-white p-10">
      <aside class="grid-flow-col items-center">
        <img src="logo/toga.png" alt="toga" class="w-15 h-15" />
        <p>
          <span class="text-lg font-bold"> MAN 1 Gowa </span>
          <br />
          Membentuk generasi berilmu, berakhlak dan berprestasi
        </p>
      </aside>
      <nav>
        <h6 class="footer-title">Kontak</h6>
        <span class="flex gap-2 items-center"
          ><i data-feather="map-pin" class="w-5 h-5"></i>
          <p>Jl. Pendidikan No. 123, Gowa</p></span
        >
        <span class="flex gap-2 items-center"
          ><i data-feather="phone" class="w-5 h-5"></i>
          <p>+62 123 456 789</p></span
        >
        <span class="flex gap-2 items-center"
          ><i data-feather="mail" class="w-5 h-5"></i>
          <p>info@man1gowa.sch.id</p></span
        >
      </nav>
      <nav>
        <h6 class="footer-title">Tautan</h6>
        <a class="link link-hover">Beranda</a>
        <a class="link link-hover">Program</a>
        <a class="link link-hover">Fasilitas</a>
        <a class="link link-hover">Berita</a>
      </nav>
      <nav>
        <h6 class="footer-title">Media Sosial</h6>
        <div class="flex gap-3">
          <a class="link link-hover"
            ><i data-feather="facebook" class="w-5 h-5"></i
          ></a>
          <a class="link link-hover"
            ><i data-feather="instagram" class="w-5 h-5"></i
          ></a>
          <a class="link link-hover"
            ><i data-feather="twitter" class="w-5 h-5"></i
          ></a>
        </div>
      </nav>
    </footer>
    <footer class="py-10 bg-gray-800 text-white text-center">
      <h2>&copy; MAN 1 Gowa. All rights reserved.</h2>
    </footer>
    <!-- footer section end -->

    <script>
      feather.replace();
    </script>
  </body>
</html>
