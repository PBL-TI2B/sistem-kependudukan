<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>Footer Desa</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="m-0">
    <!-- Footer -->
    <footer class="bg-[#0B391D] text-white px-6 py-8">
      <div class="max-w-7xl mx-auto grid grid-cols-3 md:grid-cols-3 gap-8">
        <!-- Logo & Alamat -->
        <div class="flex space-x-4">
          <img src="../../src/logo.png" alt="Logo Desa" class="h-20" />
          <div>
            <h2 class="font-semibold text-lg mb-1">Pemerintah Desa Jabung</h2>
            <p class="text-sm leading-relaxed">
              Desa Jabung, 57455<br />
              Kecamatan Gantiwarno,<br />
              Kabupaten Klaten, Jawa Tengah.
            </p>
          </div>
        </div>

        <!-- Kontak -->
        <div class="space-y-3 text-sm">
          <div class="flex items-center space-x-2">
            <span>📍</span>
            <span>Jabung, Gantiwarno, Klaten</span>
          </div>
          <div class="flex items-center space-x-2">
            <span>✉️</span>
            <span>jabung@desa.com</span>
          </div>
          <div class="flex items-center space-x-2">
            <span>📱</span>
            <span>085866637740</span>
          </div>
          <div class="flex items-center space-x-2">
            <span>📷</span>
            <span>desajabungklaten</span>
          </div>
        </div>

        <!-- Jelajahi -->
        <div class="text-sm">
          <h3 class="font-semibold mb-2">Jelajahi juga</h3>
          <ul class="space-y-1">
            <li>
              <a href="#" class="hover:underline"
                >Website Kecamatan Gantiwarno</a
              >
            </li>
            <li>
              <a href="#" class="hover:underline">Website Kabupaten Klaten</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Copyright -->
      <div
        class="mt-6 border-t border-gray-400 pt-4 text-center text-xs text-white"
      >
        <p>&copy; Team-1 PBL</p>
      </div>
    </footer>
  </body>
</html>
