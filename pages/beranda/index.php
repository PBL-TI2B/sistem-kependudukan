<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desa Jabung</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0E462B] text-gray-800">

 <!-- Header -->
 <?php
  $active = 'beranda';
  include '../../components/header.php';
  ?>
  <!-- End Header -->

  <!-- Hero Section -->
  <section class="relative bg-cover bg-center h-[500px]" style="background-image: url('../../src/kantor-desa.png');">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-center">
      <h1 class="text-4xl font-semibold mb-2">Selamat Datang</h1>
      <p class="text-lg">DESA JABUNG KECAMATAN GANTIWARNO KABUPATEN KLATEN</p>
      <p class="text-sm mt-2">sumber informasi terbaru tentang pemerintahan Desa Jabung</p>
    </div>
  </section>

  <!-- Statistik -->
<div class="relative z-10 -mt-20 px-4">
  <div class="max-w-5xl mx-auto relative">
    <!-- Background -->
    <div class="bg-[url('../../src/ellipseStat.svg')] absolute inset-0 bg-center z-0 h-full w-full bg-cover bg-no-repeat"></div>

    <!-- Konten -->
    <div class="relative px-6 md:px-8 py-6 flex justify-around items-center text-white z-10">
      <div class="text-center flex-1 mb-4 md:mb-0">
        <div class="text-2xl font-bold text-yellow-500">1.152</div>
        <div class="text-sm mt-1">Penduduk</div>
      </div>
      <div class="hidden md:block border-l border-gray-400 h-8 mx-4"></div>
      <div class="text-center flex-1 mb-4 md:mb-0">
        <div class="text-2xl font-bold text-yellow-500">304</div>
        <div class="text-sm mt-1">Kepala Keluarga</div>
      </div>
      <div class="hidden md:block border-l border-gray-400 h-8 mx-4"></div>
      <div class="text-center flex-1 mb-4 md:mb-0">
        <div class="text-2xl font-bold text-yellow-500">607</div>
        <div class="text-sm mt-1">Laki-laki</div>
      </div>
      <div class="hidden md:block border-l border-gray-400 h-8 mx-4"></div>
      <div class="text-center flex-1">
        <div class="text-2xl font-bold text-yellow-500">547</div>
        <div class="text-sm mt-1">Perempuan</div>
      </div>
    </div>
  </div>
</div>



<!-- Sambutan Kepala Desa -->
<section class="bg-green-800 text-white mt-16 mx-4 md:mx-48 mb-8 p-4 rounded-lg">
  <div class="container mx-auto grid md:grid-cols-2 gap-2 items-center">
    
    <!-- Foto Kepala Desa -->
    <div class="flex justify-center md:justify-start ml-16">
    <img src="../../src/kepala-desa.png" alt="Kepala Desa" class="w-64 h-64 rounded-full object-cover">
    </div>

    <!-- Teks Sambutan -->
    <div class="pl-4 pr-4"> <!-- Menambahkan padding kiri -->
      <h2 class="text-2xl font-bold mb-4 text-yellow-500">Sambutan Kepala Desa</h2>
      <p class="font-bold">WISNU SADEWA</p>
      <p class="mb-4">Kepala Desa Jabung</p>
      <p class="text-sm font-bold">Assalamualaikum Wr. Wb.</p>
      <p class="text-sm">
        Website ini hadir sebagai wujud transformasi desa Jabung menjadi desa yang mampu memanfaatkan teknologi informasi dan komunikasi, terintegrasi kedalam sistem online. Keterbukaan informasi publik, pelayanan publik, dan kegiatan perekonomian di desa guna mewujudkan desa Jabung sebagai desa wisata berkelanjutan, adaptasi dan mitigasi terhadap perubahan iklim serta menjadi desa yang mandiri.
      </p>
    </div>

  </div>
</section>


  <!-- Section Visi Misi -->
<section class="max-w-6xl mx-auto mt-8 px-4">
  <div class="flex flex-col md:flex-row gap-8">
    <!-- Visi -->
    <div class="bg-green-800 rounded-lg shadow-lg p-6 flex-1">
      <h2 class="text-2xl font-bold text-yellow-500 mb-4">Visi</h2>
      <p class="text-white">
        Desa Jabung mampu menjadi desa yang berprestasi dan mewujudkan masyarakat sejahtera.
      </p>
    </div>

    <!-- Misi -->
    <div class="bg-green-800 rounded-lg shadow-lg p-6 flex-1">
      <h2 class="text-2xl font-bold text-yellow-500 mb-4">Misi</h2>
      <ul class="list-disc list-inside text-white space-y-2">
        <li>Mewujudkan tata kelola pemerintahan yang baik</li>
        <li>Meningkatkan pelayanan publik</li>
        <li>Meningkatkan kualitas SDM dan sumber daya manusia</li>
        <li>Meningkatkan ketahanan ekonomi</li>
        <li>Meningkatkan kualitas lingkungan hidup</li>
        <li>Meningkatkan fasilitas kesehatan masyarakat</li>
        <li>Meningkatkan perekonomian dan kesejahteraan masyarakat</li>
        <li>Memperkuat kerja sama dan sinergi</li>
      </ul>
    </div>
  </div>
</section>

<!-- Struktur Organisasi -->
<section class="mx-auto mt-16 px-4">
  <h2 class="text-2xl font-bold text-center mb-6 text-yellow-500">Struktur Organisasi Pemerintahan Desa</h2>

  <div class="relative overflow-x-auto">
  <div id="scrolling-wrapper" class="flex whitespace-nowrap gap-4 pb-4">
        <!-- item -->
    <div class="flex-shrink-0 w-40 bg-white rounded-lg shadow-lg p-4 text-center">
      <img src="../../src/kepala-desa.png" class="w-32 h-32 object-cover rounded-full mx-auto mb-2" alt="Foto">
      <div class="font-semibold text-gray-800">Wisnu Sadewa</div>
      <div class="text-sm text-gray-500">Kepala Desa</div>
    </div>

    <div class="flex-shrink-0 w-40 bg-white rounded-lg shadow-lg p-4 text-center">
      <img src="../../src/kepala-desa.png" class="w-32 h-32 object-cover rounded-full mx-auto mb-2" alt="Foto">
      <div class="font-semibold text-gray-800">Desita Ranita</div>
      <div class="text-sm text-gray-500">Staff</div>
    </div>

    <div class="flex-shrink-0 w-40 bg-white rounded-lg shadow-lg p-4 text-center">
      <img src="../../src/kepala-desa.png" class="w-32 h-32 object-cover rounded-full mx-auto mb-2" alt="Foto">
      <div class="font-semibold text-gray-800">Desita Ranita</div>
      <div class="text-sm text-gray-500">Staff</div>
    </div>

    <div class="flex-shrink-0 w-40 bg-white rounded-lg shadow-lg p-4 text-center">
      <img src="../../src/kepala-desa.png" class="w-32 h-32 object-cover rounded-full mx-auto mb-2" alt="Foto">
      <div class="font-semibold text-gray-800">Desita Ranita</div>
      <div class="text-sm text-gray-500">Staff</div>
    </div>

    <div class="flex-shrink-0 w-40 bg-white rounded-lg shadow-lg p-4 text-center">
      <img src="../../src/kepala-desa.png" class="w-32 h-32 object-cover rounded-full mx-auto mb-2" alt="Foto">
      <div class="font-semibold text-gray-800">Desita Ranita</div>
      <div class="text-sm text-gray-500">Staff</div>
    </div>

    <div class="flex-shrink-0 w-40 bg-white rounded-lg shadow-lg p-4 text-center">
      <img src="../../src/kepala-desa.png" class="w-32 h-32 object-cover rounded-full mx-auto mb-2" alt="Foto">
      <div class="font-semibold text-gray-800">Desita Ranita</div>
      <div class="text-sm text-gray-500">Staff</div>
    </div>

    <div class="flex-shrink-0 w-40 bg-white rounded-lg shadow-lg p-4 text-center">
      <img src="../../src/kepala-desa.png" class="w-32 h-32 object-cover rounded-full mx-auto mb-2" alt="Foto">
      <div class="font-semibold text-gray-800">Desita Ranita</div>
      <div class="text-sm text-gray-500">Staff</div>
    </div>

    <div class="flex-shrink-0 w-40 bg-white rounded-lg shadow-lg p-4 text-center">
      <img src="../../src/kepala-desa.png" class="w-32 h-32 object-cover rounded-full mx-auto mb-2" alt="Foto">
      <div class="font-semibold text-gray-800">Desita Ranita</div>
      <div class="text-sm text-gray-500">Staff</div>
    </div>

    <div class="flex-shrink-0 w-40 bg-white rounded-lg shadow-lg p-4 text-center">
      <img src="../../src/kepala-desa.png" class="w-32 h-32 object-cover rounded-full mx-auto mb-2" alt="Foto">
      <div class="font-semibold text-gray-800">Desita Ranita</div>
      <div class="text-sm text-gray-500">Staff</div>
    </div>

    <div class="flex-shrink-0 w-40 bg-white rounded-lg shadow-lg p-4 text-center">
      <img src="../../src/kepala-desa.png" class="w-32 h-32 object-cover rounded-full mx-auto mb-2" alt="Foto">
      <div class="font-semibold text-gray-800">Desita Ranita</div>
      <div class="text-sm text-gray-500">Staff</div>
    </div>
    <!-- Tambahin sebanyak apapun -->
  </div>
</section>

<!-- Berita Desa -->
<section class="bg-gray-100">
  <div class="container mx-auto p-16">
    <!-- Header judul + tombol -->
    <div class="flex items-center justify-between mb-8">
      <h2 class="text-2xl font-bold">Berita Desa</h2>
      <a href="../../pages/berita" class="inline-block bg-[#0E462B] hover:bg-[#0E462B] text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 text-sm">
        Jelajahi Berita Desa
      </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      
      <!-- Berita besar -->
      <div class="bg-white shadow rounded p-4">
        <img src="../../src/berita-utama.png" class="mb-4 rounded" alt="Berita">
        <h3 class="font-semibold text-lg mb-2">Pemerintah Desa Jabung melakukan bagi baksos</h3>
        <p class="text-sm text-gray-500">2 Februari 2025</p>
      </div>

      <!-- List berita kecil -->
      <div class="md:col-span-2 grid gap-4">
      <div class="flex gap-4 bg-white p-2 rounded shadow items-center">
          <img src="../../src/berita-lain.png" class="w-20 h-20 object-cover rounded" alt="Berita kecil">
          <div>
            <h4 class="font-semibold text-sm">Pemerintah Desa Jabung melakukan bagi baksos</h4>
            <p class="text-xs text-gray-500">2 Februari 2025</p>
          </div>
        </div>

        <div class="flex gap-4 bg-white p-2 rounded shadow items-center">
          <img src="../../src/berita-lain.png" class="w-20 h-20 object-cover rounded" alt="Berita kecil">
          <div>
            <h4 class="font-semibold text-sm">Pemerintah Desa Jabung melakukan bagi baksos</h4>
            <p class="text-xs text-gray-500">2 Februari 2025</p>
          </div>
        </div>

        <div class="flex gap-4 bg-white p-2 rounded shadow items-center">
          <img src="../../src/berita-lain.png" class="w-20 h-20 object-cover rounded" alt="Berita kecil">
          <div>
            <h4 class="font-semibold text-sm">Pemerintah Desa Jabung melakukan bagi baksos</h4>
            <p class="text-xs text-gray-500">2 Februari 2025</p>
          </div>
        </div>
        <!-- ... -->
      </div>
    </div>
  </div>
</section>


  <!-- Galeri Desa -->
  <section class="bg-gray-100 pb-20 relative">
  <div class="flex items-center justify-between pr-16 mb-8">
  <h2 class="text-2xl font-bold mb-4 pl-16">Galeri Desa</h2>
  <a href="../../pages/galeri" class="inline-block text-sm bg-[#0E462B] hover:bg-[#0E462B] text-white font-semibold py-2 px-4 rounded-lg transition">
      Jelajahi Galeri Desa
    </a>
  </div>

    <!-- Video wrapper -->
    <div class="relative z-20 w-11/12 max-w-4xl mx-auto -mb-64 px-4">
    <video controls class="w-full rounded-xl shadow-lg">
      <source src="video-url.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
</section>

  <!-- Masonry Grid -->
  <section class="bg-[#0E462B] pt-64 pb-20">
  <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4 px-4">
  <img src="../../src/kepala-desa.png" alt="Galeri 1" class="w-full rounded-lg object-cover">
    <img src="../../src/kantor-desa.png" alt="Galeri 2" class="w-full rounded-lg object-cover">
    <img src="../../src/berita-utama.png" alt="Galeri 3" class="w-full rounded-lg object-cover">
    <img src="../../src/kepala-desa.png" alt="Galeri 4" class="w-full rounded-lg object-cover">
    <img src="../../src/berita-lain.png" alt="Galeri 5" class="w-full rounded-lg object-cover">
    <img src="../../src/kantor-desa.png" alt="Galeri 6" class="w-full rounded-lg object-cover">
    <img src="../../src/kepala-desa.png" alt="Galeri 5" class="w-full rounded-lg object-cover">
    <img src="../../src/kantor-desa.png" alt="Galeri 6" class="w-full rounded-lg object-cover">
    <!-- Tambahkan lebih banyak gambar -->
  </div>
</section>


  <!-- Sejarah Desa -->
  <section class="py-12">
  <div class="container mx-auto px-4 md:px-24">
  <h2 class="text-2xl font-bold text-yellow-500 mb-6">Sejarah Desa Jabung</h2>
      <p class="text-sm text-white">Selamat Datang di Bumi Desa Jabung - Gantiwarno, Klaten.</p>
      <p class="text-sm text-white">Desa Jabung terletak di Kecamatan Gantiwarno, Klaten, Jawa Tengah. Jabung menjadi salah satu dari 16 desa di Kecamatan Gantiwarno. Wilayahnya kini meliputi 28 RT dan 13 RW dengan total jumlah pendudukan berdasarkan data tahun 2023 sebanyak 3.450 jiwa.</p>
      <p class="text-sm text-white">Desa Jabung menjadi salah satu pusat kegiatan pertanian di kecamatan, dengan hasil pertanian seperti padi, jagung, tembakau, dan palawija menjadi komoditas utama yang dihasilkan oleh masyarakat setempat. Infrastruktur desa yang baik serta akses jalan yang memadai juga mendukung mobilitas dan distribusi hasil pertanian ke pasar-pasar di sekitar wilayah Kabupaten Klaten.</p>
    </div>
  </section>

  <!-- CSS -->
<style>
  @keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }

  #scrolling-wrapper {
    animation: scroll 20s linear infinite;
    will-change: transform;
  }

  #scrolling-wrapper:hover {
    animation-play-state: paused; /* Pause saat hover */
  }
</style>

<!-- JavaScript untuk cloning otomatis -->
<script>
  const wrapper = document.getElementById('scrolling-wrapper');
  wrapper.innerHTML += wrapper.innerHTML; // Gandain isinya otomatis
</script>

  <!-- Footer -->
  <?php include '../../components/footer.php' 
  ?>
  <!-- End Footer -->

</body>
</html>
