<header class="bg-[#0B391D] text-white px-4 md:px-8 py-3 flex flex-wrap justify-between items-center">
  <!-- Logo -->
  <div class="flex items-center space-x-3">
    <img src="../../src/logo.png" alt="Logo Desa Jabung" class="h-16" />
    <div class="leading-tight">
      <p class="text-sm font-bold text-[#E5A025]">Desa Jabung</p>
      <p class="text-xs text-white">Kabupaten Klaten</p>
    </div>
  </div>

  <!-- Hamburger Button (mobile) -->
  <button id="menu-toggle" class="md:hidden focus:outline-none">
    <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M4 6h16M4 12h16M4 18h16" />
    </svg>
  </button>

  <!-- Navigation Menu -->
  <nav id="menu" class="hidden w-full md:flex md:items-center md:space-x-6 text-sm font-medium md:w-auto mt-4 md:mt-0">
    <a href="../beranda"
      class="<?= ($active == 'beranda') ? 'text-[#F6C646]' : 'hover:text-[#F6C646]' ?>">Beranda</a>
    <a href="../profilDesa"
      class="<?= ($active == 'profil') ? 'text-[#F6C646]' : 'hover:text-[#F6C646]' ?>">Profil Desa</a>
    <a href="../infografis"
      class="<?= ($active == 'infografis') ? 'text-[#F6C646]' : 'hover:text-[#F6C646]' ?>">Infografis</a>
    <a href="../berita"
      class="<?= ($active == 'berita') ? 'text-[#F6C646]' : 'hover:text-[#F6C646]' ?>">Berita</a>
    <a href="../galeri"
      class="<?= ($active == 'galeri') ? 'text-[#F6C646]' : 'hover:text-[#F6C646]' ?>">Galeri</a>
    <a href="../login"
      class="mt-3 md:mt-0 bg-[#E5A025] text-black px-4 py-1 rounded-full hover:bg-[#d9981c] transition">Masuk</a>
  </nav>

  <!-- Script for Toggle -->
  <script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    toggle.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
</header>
