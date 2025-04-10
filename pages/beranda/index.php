<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Desa Jabung</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100 text-gray-800">
    <!-- Hero-->
    <div
      class="relative w-full h-[80vh] md:h-[90vh] bg-cover bg-center"
      style="background-image: url('../../src/kantor-desa.png')"
    >
      <!-- Hero Content -->
      <div
        class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white text-center px-4"
      >
        <h1 class="text-3xl md:text-4xl font-serif">Selamat Datang</h1>
        <h2 class="text-lg md:text-xl font-bold">
          DESA JABUNG KECAMATAN GANTIWARNO KABUPATEN KLATEN
        </h2>
        <p class="text-xs md:text-sm">
          Sumber informasi terbaru tentang pemerintahan Desa Jabung
        </p>
      </div>
      <!-- Navbar -->
      <nav
        class="absolute top-0 left-0 w-full h-20 p-4 text-white flex flex-col md:flex-row md:justify-between md:items-center"
      >
        <div
          class="flex justify-center md:justify-start items-center space-x-4"
        >
          <img src="../../src/logo.png" alt="Logo Desa Jabung" class="h-16" />
          <div class="leading-tight">
            <p class="text-sm font-bold text-[#F6C646]">Desa Jabung</p>
            <p class="text-xs text-white">Kabupaten Klaten</p>
          </div>
        </div>
        <div class="ml-auto mr-8 flex space-x-8">
          <a href="../beranda" class="text-[#F6C646] font-semibold hover:text-[#F6C646]"
            >Beranda</a
          >
          <a href="../profilDesa" class="text-white font-semibold hover:underline"
            >Profil Desa</a
          >
          <a href="../infografis" class="text-white font-semibold hover:underline"
            >Infografis</a
          >
          <a href="../berita" class="text-white font-semibold hover:underline"
            >Berita</a
          >
          <a href="../galeri" class="text-white font-semibold hover:underline"
            >Galeri</a
          >
          <a
            href="#"
            class="bg-[#E5A025] text-black px-4 py-1 rounded-full hover:bg-[#d9981c] transition"
            >Masuk</a
          >
        </div>
      </nav>
    </div>

    <!-- Sambutan Kepala Desa -->
    <div class="bg-[#0B391D] text-white relative w-full py-20 px-6 md:px-10">
      <!-- Statistik -->
      <div
        class="absolute left-1/2 -translate-x-1/2 -top-16 bg-[#192019] text-white rounded-br-full rounded-tl-full px-6 py-6 w-11/12 md:w-10/12 shadow-lg"
      >
        <div class="grid grid-cols-2 sm:grid-cols-4 text-center gap-4">
          <div>
            <p class="text-yellow-400 text-2xl md:text-3xl font-bold">1.152</p>
            <p class="text-base">Penduduk</p>
          </div>
          <div class="border-l border-gray-500">
            <p class="text-yellow-400 text-2xl md:text-3xl font-bold">304</p>
            <p class="text-base">Kepala Keluarga</p>
          </div>
          <div class="border-l border-gray-500">
            <p class="text-yellow-400 text-2xl md:text-3xl font-bold">607</p>
            <p class="text-base">Laki-laki</p>
          </div>
          <div class="border-l border-gray-500">
            <p class="text-yellow-400 text-2xl md:text-3xl font-bold">547</p>
            <p class="text-base">Perempuan</p>
          </div>
        </div>
      </div>

      <div class="flex flex-col md:flex-row items-center justify-between pt-28">
        <!-- Teks -->
        <div class="max-w-xl">
          <h2 class="text-2xl font-bold text-[#E5A025]">
            Sambutan Kepala Desa
          </h2>
          <p class="text-xl font-bold">WISNU</p>
          <p class="text-sm">Kepala Desa Jabung</p>
          <p class="mt-4 text-sm md:text-base">
            Website ini hadir sebagai wujud transformasi desa Jabung menjadi
            desa yang mampu memanfaatkan teknologi informasi dan komunikasi...
          </p>
        </div>
        <!-- Gambar -->
        <img
          src="../../src/kepala-desa.png"
          alt="Kepala Desa"
          class="mt-6 md:mt-0 h-56 w-56 md:h-[250px] md:w-[250px] object-cover shadow-lg rounded-full"
          style="border-radius: 100px 130px 100px 140px"
        />
      </div>
    </div>

    <!-- Berita -->
    <div class="bg-white text-[#E5A025] py-10 px-4 md:px-8">
      <div class="max-w-6xl mx-auto">
        <h1 class="text-xl md:text-xl font-bold text-center">BERITA DESA</h1>
        <div class="flex justify-end mb-4">
          <button
            class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm md:text-base hover:bg-green-700"
          >
            Jelajahi Berita Desa ➤
          </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <!-- Berita utama -->
          <div
            class="bg-white text-[#0B391D] p-4 rounded-lg shadow-lg border border-[#0B391D]"
          >
            <img
              src="../../src/berita-utama.png"
              alt="Berita Utama"
              class="w-full h-56 object-cover"
            />
            <h2 class="text-lg font-bold mt-4">
              Pemerintah Desa Jabung melakukan bagi baksos
            </h2>
            <div class="flex items-center text-sm text-gray-500 mt-1">
              <span>📅 2 Februari 2025</span> &nbsp;•&nbsp; <span>👁️ 54</span>
            </div>
            <p class="mt-2 text-sm text-black">
              Pemerintah Desa Jabung baru ini melakukan bagi baksos bagi
              keluarga terdaftar pada xxxxx xxxx xxxx xxxxxxx. Selain pembagian
              makanan, acara ini juga menjadi ajang sosialisasi pentingnya
              perilaku hidup bersih dan sehat.
            </p>
          </div>
          <!-- Berita lainnya -->
          <div class="flex flex-col gap-4">
            <div
              class="flex gap-4 bg-white text-[#0B391D] p-3 rounded-lg shadow-md border border-[#0B391D]"
            >
              <img
                src="../../src/berita-lain.png"
                alt="Berita lainnya"
                class="w-24 h-24 object-cover"
              />
              <div>
                <h3 class="text-md font-bold">
                  Pemerintah Desa Jabung melakukan bagi baksos
                </h3>
                <div class="text-sm text-gray-500">
                  📅 2 Februari 2025 &nbsp;•&nbsp; 👁️ 54
                </div>
                <p class="text-xs text-black mt-1">
                  Pemerintah Desa Jabung baru ini melakukan bagi baksos bagi
                  keluarga terdaftar pada...
                </p>
              </div>
            </div>
            <!-- Copy berita lain sesuai kebutuhan -->
          </div>
        </div>
      </div>
    </div>

    <!-- Galeri -->
    <div class="bg-white py-10 px-4">
      <div class="max-w-6xl mx-auto text-center">
        <h1 class="text-xl md:text-xl font-bold text-[#E5A025] mb-4">
          GALERI DESA
        </h1>
        <div class="flex justify-end mb-4">
          <button
            class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 text-sm md:text-base"
          >
            Jelajahi Galeri Desa ➤
          </button>
        </div>
        <div class="flex justify-center mb-6">
          <video
            class="w-full md:w-3/4 h-auto border-4 border-blue-500 rounded-lg shadow-lg"
            controls
          >
            <source src="video.mp4" type="video/mp4" />
            Browsermu tidak mendukung pemutaran video.
          </video>
        </div>
      </div>
    </div>

    <!-- Grid Galeri -->
    <div class="overflow-hidden bg-[#0B391D] text-white p-4">
      <div class="columns-1 sm:columns-2 md:columns-3 gap-4">
        <img
          src="../../src/kantor-desa.png"
          class="w-full mb-4 rounded-lg object-cover"
        />
        <img
          src="../../src/berita-lain.png"
          class="w-full mb-4 rounded-lg object-cover"
        />
        <img
          src="../../src/kantor-desa.png"
          class="w-full mb-4 rounded-lg object-cover"
        />
        <img
          src="../../src/berita-lain.png"
          class="w-full mb-4 rounded-lg object-cover"
        />
        <img
          src="../../src/kantor-desa.png"
          class="w-full mb-4 rounded-lg object-cover"
        />
        <img
          src="../../src/berita-utama.png"
          class="w-full mb-4 rounded-lg object-cover"
        />
        <img
          src="../../src/berita-lain.png"
          class="w-full mb-4 rounded-lg object-cover"
        />
        <img
          src="../../src/kepala-desa.png"
          class="w-full mb-4 rounded-lg object-cover"
        />
      </div>
    </div>

    <!-- Peta Desa -->
    <section class="max-w-3xl mx-auto mt-10 mb-10 px-4">
      <!-- Judul -->
      <div
        class="bg-[#E5A025] text-white font-bold text-center text-xl py-2 rounded-t-md"
      >
        PETA DESA
      </div>

      <!-- Peta -->
      <iframe
        class="w-full h-[400px] border border-gray-300"
        src="https://www.openstreetmap.org/export/embed.html?bbox=110.5635%2C-7.7965%2C110.6035%2C-7.7765&layer=mapnik"
        allowfullscreen
        loading="lazy"
      >
      </iframe>
    </section>

    <!-- Footer -->
    <?php include '../../components/footer.php' ?>
    <!-- End Footer -->
  </body>
</html>
