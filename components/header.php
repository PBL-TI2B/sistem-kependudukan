<header id="header" class="text-white px-4 py-3 fixed top-0 w-full z-50 transition-colors duration-300 <?= ($active != 'beranda') ? 'bg-[#0B391D]' : '' ?>">
  <div class="max-w-[1600px] md:px-auto flex flex-wrap justify-between items-center mx-auto">
    <!-- Logo & Nama Desa -->
  <div class="flex items-center space-x-3">
    <img src="../../src/logo.svg" alt="Logo Desa Jabung" class="h-10 md:h-16" />
    <div class="leading-tight">
      <p class="text-sm md:text-2xl font-bold text-[#E5A025]">Desa Jabung</p>
      <p class="text-xs md:text-xl text-white">Kabupaten Klaten</p>
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
  <nav id="menu" class="hidden w-full md:flex md:items-center md:space-x-6 text-sm md:text-xl font-medium md:w-auto mt-4 md:mt-0">
    <a href="../beranda"
      class="<?= ($active == 'beranda') ? 'text-[#F6C646]' : 'hover:text-[#F6C646]' ?>">Beranda</a>
    <a href="../infografis"
      class="<?= ($active == 'infografis') ? 'text-[#F6C646]' : 'hover:text-[#F6C646]' ?>">Infografis</a>
    <a href="../berita"
      class="<?= ($active == 'berita') ? 'text-[#F6C646]' : 'hover:text-[#F6C646]' ?>">Berita</a>
    <a href="../galeri"
      class="<?= ($active == 'galeri') ? 'text-[#F6C646]' : 'hover:text-[#F6C646]' ?>">Galeri</a>
  </nav>
</div>
</header>

<!-- Script -->
<script>
// Untuk toggle menu mobile
  const toggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('menu');
  toggle.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>
