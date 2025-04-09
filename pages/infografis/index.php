<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Infografis Desa Jabung</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Header -->
  <?php
  $active = 'infografis';
  include '../../components/header.php';
  ?>
  <!-- End Header -->

  <!-- Navigasi Tab -->
<div class="bg-white py-6 px-8">
  <h1 class="text-[#E5A025] font-bold text-2xl mb-2">INFOGRAFIS <br class="md:hidden"> DESA JABUNG</h1>
  
  <div class="flex justify-between items-center mt-4">
    <!-- Judul -->
    <div>
      <h2 class="text-[#E5A025] font-bold text-xl mt-4 mb-1">DEMOGRAFI PENDUDUK</h2>
      <p class="text-sm max-w-md">
        Memberikan informasi lengkap mengenai karakteristik demografi penduduk suatu wilayah. 
        Mulai dari jumlah penduduk, usia, jenis kelamin, tingkat pendidikan, pekerjaan, agama, 
        dan aspek penting lainnya yang menggambarkan komposisi populasi secara rinci.
      </p>
    </div>

    <!-- Tab Navigasi -->
    <div class="flex space-x-8 text-gray-600 font-medium text-sm mr-8">
      <a href="#" class="flex flex-col items-center">
        <img src="/icons/penduduk.png" alt="Penduduk" class="w-6 h-6 mb-1">
        <span class="text-sm">Penduduk</span>
        <span class="h-1 w-6 bg-[#E5A025] mt-1"></span> <!-- underline active -->
      </a>
      <a href="#" class="flex flex-col items-center opacity-50 hover:opacity-100 transition">
        <img src="/icons/bansos.png" alt="Bansos" class="w-6 h-6 mb-1">
        <span class="text-sm">Bansos</span>
      </a>
    </div>
  </div>
</div>

  <!-- Demografi Penduduk -->
  <section class="bg-white shadow-sm rounded-md my-6 mx-auto max-w-5xl p-6">
    <h2 class="text-lg font-bold text-gray-700 mb-4">Jumlah Penduduk dan Kepala Keluarga</h2>
    <div class="grid grid-cols-2 md:grid-cols-2 gap-4 text-white text-center">
      <div class="bg-[#0B391D] p-4 rounded">
        <p class="text-sm">TOTAL PENDUDUK</p>
        <p class="text-xl font-bold">1150 Jiwa</p>
      </div>
      <div class="bg-[#0B391D] p-4 rounded">
        <p class="text-sm">KEPALA KELUARGA</p>
        <p class="text-xl font-bold">304 Jiwa</p>
      </div>
      <div class="bg-[#0B391D] p-4 rounded">
        <p class="text-sm">LAKI-LAKI</p>
        <p class="text-xl font-bold">607 Jiwa</p>
      </div>
      <div class="bg-[#0B391D] p-4 rounded">
        <p class="text-sm">PEREMPUAN</p>
        <p class="text-xl font-bold">543 Jiwa</p>
      </div>
    </div>
  </section>

  <!-- Grafik Kelompok Umur -->
  <section class="bg-white shadow-sm rounded-md my-6 mx-auto max-w-5xl p-6">
    <h2 class="text-lg font-bold text-gray-700 mb-4">Berdasarkan Kelompok Umur</h2>
    <canvas id="umurChart" height="150"></canvas>
  </section>

  <!-- Pendidikan -->
  <section class="bg-white shadow-sm rounded-md my-6 mx-auto max-w-5xl p-6">
    <h2 class="text-lg font-bold text-gray-700 mb-4">Berdasarkan Pendidikan</h2>
    <canvas id="pendidikanChart" height="150"></canvas>
  </section>

  <!-- Pekerjaan -->
  <section class="bg-white shadow-sm rounded-md my-6 mx-auto max-w-5xl p-6">
    <h2 class="text-lg font-bold text-gray-700 mb-4">Berdasarkan Pekerjaan</h2>
    <canvas id="pekerjaanChart" class="w-1024 h-1024 mx-auto"></canvas>
  </section>

  <!-- Agama -->
  <section class="bg-white shadow-sm rounded-md my-6 mx-auto max-w-5xl p-6">
    <h2 class="text-lg font-bold text-gray-700 mb-4">Berdasarkan Agama</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-center">
      <div class="border p-4 rounded"><p>🕌<br>Islam<br><strong>1150</strong></p></div>
      <div class="border p-4 rounded"><p>✝️<br>Kristen<br><strong>0</strong></p></div>
      <div class="border p-4 rounded"><p>✝<br>Katolik<br><strong>0</strong></p></div>
      <div class="border p-4 rounded"><p>🕉️<br>Hindu<br><strong>0</strong></p></div>
      <div class="border p-4 rounded"><p>🛕<br>Buddha<br><strong>0</strong></p></div>
      <div class="border p-4 rounded"><p>⛩️<br>Konghucu<br><strong>0</strong></p></div>
    </div>
  </section>

  <!-- Kelahiran & Kematian -->
  <section class="bg-white shadow-sm rounded-md my-6 mx-auto max-w-5xl p-6">
    <h2 class="text-lg font-bold text-gray-700 mb-4">Angka Kelahiran dan Kematian</h2>
    <canvas id="kelahiranKematianChart" height="150"></canvas>
  </section>

  <!-- Chart.js scripts -->
  <script>
    // Kelompok Umur
    new Chart(document.getElementById('umurChart'), {
      type: 'bar',
      data: {
        labels: ['0-4', '5-9', '10-14', '15-19', '20-24', '25-29', '30-34', '35-39', '40-44', '45-49', '50-54', '55-59', '60-64', '65+'],
        datasets: [
          {
            label: 'Laki-laki',
            data: [10, 15, 20, 30, 25, 40, 35, 30, 20, 15, 10, 5, 3, 2],
            backgroundColor: '#79520f'
          },
          {
            label: 'Perempuan',
            data: [12, 18, 22, 28, 26, 38, 32, 28, 22, 16, 12, 7, 5, 3],
            backgroundColor: '#E5A025'
          }
        ]
      },
      options: {
        responsive: true,
        scales: {
          y: { beginAtZero: true }
        }
      }
    });

    // Pendidikan
    new Chart(document.getElementById('pendidikanChart'), {
      type: 'bar',
      data: {
        labels: ['Tidak Sekolah', 'TK', 'SD', 'SMP', 'SMA', 'D1-D3', 'S1', 'S2+'],
        datasets: [{
          label: 'Jumlah',
          data: [10, 15, 60, 80, 100, 40, 70, 5],
          backgroundColor: '#E5A025'
        }]
      },
      options: { responsive: true, scales: { y: { beginAtZero: true } } }
    });

    // Pekerjaan
    new Chart(document.getElementById('pekerjaanChart'), {
      type: 'pie',
      data: {
        labels: ['Petani', 'Buruh', 'PNS', 'Wiraswasta', 'Pelajar', 'Lainnya'],
        datasets: [{
          data: [300, 150, 50, 200, 100, 50],
          backgroundColor: ['#00A9FF', '#89CFF3', '#FFD700', '#FFA500', '#C70039', '#9B59B6']
        }]
      },
      options: { responsive: true }
    });

    // Kelahiran & Kematian
    new Chart(document.getElementById('kelahiranKematianChart'), {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        datasets: [
          {
            label: 'Kelahiran',
            data: [3, 5, 2, 4, 6, 7, 5, 3, 6, 4, 5, 2],
            borderColor: '#1D5B79',
            fill: false
          },
          {
            label: 'Kematian',
            data: [1, 0, 2, 1, 1, 2, 0, 1, 2, 1, 0, 1],
            borderColor: '#FF5B22',
            fill: false
          }
        ]
      },
      options: { responsive: true }
    });
  </script>

    <!-- Footer -->
    <?php include '../../components/footer.php' ?>
    <!-- End Footer -->
</body>
</html>
