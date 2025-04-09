<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeri Desa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      /* Custom masonry layout */
      .masonry {
        column-count: 3;
        column-gap: 1rem;
      }
      .masonry-item {
        break-inside: avoid;
        margin-bottom: 1rem;
      }

      @media (max-width: 1024px) {
        .masonry {
          column-count: 2;
        }
      }

      @media (max-width: 640px) {
        .masonry {
          column-count: 1;
        }
      }
    </style>
  </head>
  <body class="bg-white font-sans">
    <!-- Header -->
    <?php
    $active = 'galeri';
    include '../../components/header.php';
    ?>
    <!-- End Header -->

    <!-- Judul -->
    <main class="max-w-7xl mx-auto p-6">
      <h2 class="text-2xl font-bold text-center text-[#E5A025] mb-10">GALERI DESA</h2>

      <!-- Masonry Grid -->
      <div class="masonry">
        <img
          src="../../src/logo.png"
          alt="Foto Galeri"
          class="masonry-item w-full rounded-md"
        />
        <img
          src="../../src/kantor-desa.png"
          alt="Foto Galeri"
          class="masonry-item w-full rounded-md"
        />
        <img
          src="../../src/berita-lain.png"
          alt="Foto Galeri"
          class="masonry-item w-full rounded-md"
        />
        <img
          src="../../src/berita-utama.png"
          alt="Foto Galeri"
          class="masonry-item w-full rounded-md"
        />
        <img
          src="../../src/logo.png"
          alt="Foto Galeri"
          class="masonry-item w-full rounded-md"
        />
        <img
          src="../../src/kepala-desa.png"
          alt="Foto Galeri"
          class="masonry-item w-full rounded-md"
        />
        <img
          src="../../src/kantor-desa.png"
          alt="Foto Galeri"
          class="masonry-item w-full rounded-md"
        />
        <img
          src="../../src/berita-lain.png"
          alt="Foto Galeri"
          class="masonry-item w-full rounded-md"
        />
        <img
          src="../../src/logo.png"
          alt="Foto Galeri"
          class="masonry-item w-full rounded-md"
        />
        <img
          src="../../src/berita-utama.png"
          alt="Foto Galeri"
          class="masonry-item w-full rounded-md"
        />
        <img
          src="../../src/kepala-desa.png"
          alt="Foto Galeri"
          class="masonry-item w-full rounded-md"
        />
        <img
          src="../../src/logo.png"
          alt="Foto Galeri"
          class="masonry-item w-full rounded-md"
        />
        <img
          src="../../src/kepala-desa.png"
          alt="Foto Galeri"
          class="masonry-item w-full rounded-md"
        />
      </div>
    </main>

    <!-- Footer -->
    <?php include '../../components/footer.php'?>
    <!-- End Footer -->
  </body>
</html>
