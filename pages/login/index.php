<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Desa Jabung</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="min-h-screen flex items-center justify-center bg-gradient-to-b from-[#6E8C71] to-[#101D14]">
    <div class="bg-[#6E8C71]/60 p-10 rounded-3xl border border-white text-white w-full max-w-sm shadow-lg">
      <h2 class="text-center text-2xl font-bold mb-6">LOGIN</h2>

      <!-- Form Login -->
      <form action="../../pages/beranda/index.php" method="POST" class="space-y-4">
        <!-- Username -->
        <div>
          <label for="username" class="text-sm block mb-1">Nama Pengguna</label>
          <div class="flex items-center bg-white text-gray-700 rounded-md shadow px-3 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9.004 9.004 0 0112 15c2.003 0 3.842.659 5.303 1.764M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <input type="text" name="username" id="username" placeholder="Nama Pengguna" class="w-full bg-transparent focus:outline-none" required>
          </div>
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="text-sm block mb-1">Sandi</label>
          <div class="flex items-center bg-white text-gray-700 rounded-md shadow px-3 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.105.672-2 1.5-2S15 9.895 15 11s-.672 2-1.5 2S12 12.105 12 11z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 11V7a5 5 0 00-10 0v4m10 0H7m10 0v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6" />
            </svg>
            <input type="password" name="password" id="password" placeholder="Nama Pengguna" class="w-full bg-transparent focus:outline-none" required>
          </div>
        </div>

        <!-- Tombol Masuk -->
        <button type="submit" name="login"
          class="bg-[#106233] hover:bg-[#0c4a28] w-full text-white py-2 rounded-md font-medium transition">
          Masuk
        </button>
      </form>
    </div>

    <!-- PHP proses login -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Contoh sederhana: username dan password statis
      if ($username === "admin" && $password === "admin123") {
        // Redirect ke halaman beranda
        header("Location: beranda.php");
        exit();
      } else {
        echo "<script>alert('Nama pengguna atau sandi salah!');</script>";
      }
    }
    ?>
  </body>
</html>
