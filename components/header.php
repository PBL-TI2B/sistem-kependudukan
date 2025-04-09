<header
  class="bg-[#0B391D] text-white px-4 md:px-8 py-3 flex justify-between items-center md:flex-row md:justify-between md:items-center"
>
  <!-- Logo -->
  <div class="flex items-center space-x-3">
    <img src="../../src/logo.png" alt="Logo Desa Jabung" class="h-16" />
    <div class="leading-tight">
      <p class="text-sm font-bold text-[#E5A025]">Desa Jabung</p>
      <p class="text-xs text-white">Kabupaten Klaten</p>
    </div>
  </div>

  <!-- Navigation -->
  <nav class="items-center space-x-6 text-sm font-medium">
    <a
      href="/beranda.php"
      class="<?= ($active == 'beranda') ? 'text-[#F6C646]' : 'hover:text-[#F6C646]' ?>"
      >Beranda</a
    >
    <a
      href="/profil.php"
      class="<?= ($active == 'profil') ? 'text-[#F6C646]' : 'hover:text-[#F6C646]' ?>"
      >Profil Desa</a
    >
    <a
      href="/infografis.php"
      class="<?= ($active == 'infografis') ? 'text-[#F6C646]' : 'hover:text-[#F6C646]' ?>"
      >Infografis</a
    >
    <a
      href="/berita.php"
      class="<?= ($active == 'berita') ? 'text-[#F6C646]' : 'hover:text-[#F6C646]' ?>"
      >Berita</a
    >
    <a
      href="/galeri.php"
      class="<?= ($active == 'galeri') ? 'text-[#F6C646]' : 'hover:text-[#F6C646]' ?>"
      >Galeri</a
    >
    <a
      href="/login.php"
      class="bg-[#E5A025] text-black px-4 py-1 rounded-full hover:bg-[#d9981c] transition"
      >Masuk</a
    >
  </nav>
</header>
