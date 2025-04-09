<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Desa Jabung</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Header -->
  <?php
  $active = 'profil';
  include '../../components/header.php';
  ?>
  <!-- End Header -->

  <div class="bg-white w-full">
  <!-- Judul -->
  <h1 class="text-center text-[#E5A025] font-bold text-xl py-6">PROFIL DESA</h1>

  <!-- Visi dan Misi -->
  <div class="flex flex-col md:flex-row items-center justify-center gap-8 px-6 mb-10">
    <!-- Visi -->
    <div class="bg-[#0B391D] text-white rounded-full p-8 w-full md:w-1/3 text-center">
      <h2 class="text-xl font-bold mb-2 text-[#E5A025]">Visi</h2>
      <p class="text-sm">
        Desa Jabung mampu mengelola potensi Desa dan pembangunan berkelanjutan untuk mewujudkan masyarakat sejahtera
      </p>
    </div>

    <!-- Misi -->
    <div class="bg-[#0B391D] text-white rounded-3xl p-8 w-full md:w-1/3 text-left">
      <h2 class="text-xl font-bold mb-2 text-center text-[#E5A025]">Misi</h2>
      <ul class="text-sm list-decimal pl-6 space-y-1">
        <li>Mewujudkan tata kelola pemerintahan yang baik</li>
        <li>Mengembangkan kegiatan pembangunan</li>
        <li>Mendorong kualitas pendidikan dan kesehatan masyarakat</li>
        <li>Meningkatkan pemberdayaan masyarakat</li>
        <li>Penguatan ekonomi untuk usaha kecil dan menengah</li>
        <li>Menjaga kerukunan dan keamanan desa</li>
        <li>Menjalankan sistem informasi transparan dan partisipatif</li>
      </ul>
    </div>
  </div>

  <!-- Struktur Organisasi -->
  <div class="px-6">
    <h2 class="text-[#E5A025] font-bold text-md text-center mb-4">Struktur Organisasi Pemerintahan Desa</h2>
    <img src="../../src/struktur-organisasi.png" alt="Struktur Organisasi" class="w-full max-w-4xl mx-auto mt-8 mb-8" />
  </div>

  <!-- Sejarah Desa -->
  <div class="mt-16 bg-[#0E462B] text-white px-6 py-10 rounded-t-[200px]">
    <h2 class="text-[#E5A025] font-bold text-lg ml-16 mb-4">Sejarah Desa Jabung</h2>
    <p class="text-sm ml-8 mr-8 leading-relaxed">
      Dikaruniai hewani dan hayati yang melimpah dengan tanah yang luas dan subur, serta keragaman budaya. Selamat
      Datang di Bumi Desa Jabung – Gantiwarno, Klaten.
      <br />
      Desa Jabung terletak di Kecamatan Gantiwarno, Klaten, Jawa Tengah. Desa Jabung menjadi salah satu dari 16 desa
      di Kecamatan Gantiwarno. Wilayahnya kini meliputi 27 RT dan 18 RW dengan total jumlah penduduk berdasarkan data
      tahun 2023 sebanyak 4.350 jiwa.
      <br />
      Desa Jabung menjadi salah satu pusat kegiatan pertanian di kecamatan, dengan hasil utama berupa padi, jagung,
      tembakau, dan palawija menjadi komoditas utama yang dihasilkan oleh masyarakat setempat. Infrastruktur desa yang
      baik serta akses jalan yang memadai juga mendukung mobilitas dan distribusi hasil pertanian ke pasar-pasar di
      sekitar wilayah Kabupaten Klaten.
    </p>

    <!-- CTA -->
    <div class="mt-12 text-right">
      <button class="bg-[#E5A025] text-[#0B391D] font-semibold px-6 py-2 rounded-full hover:bg-[#E5A025] transition">
        Jelajahi Galeri Desa
      </button>
    </div>
  </div>

  <!-- Footer -->
  <?php include '../../components/footer.php' 
  ?>
  <!-- End Footer -->
</body>
</html>