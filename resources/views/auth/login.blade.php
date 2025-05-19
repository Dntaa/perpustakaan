<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-indigo-100 via-purple-100 to-pink-100 flex items-center justify-center">

  <div class="bg-white rounded-xl shadow-lg max-w-md w-full p-8 sm:p-10">
    <!-- Logo atau Icon -->
    <div class="flex justify-center mb-6">
      <img src="https://img.icons8.com/ios-filled/50/4e46e5/book.png" alt="Logo" class="h-12 w-12" />
    </div>

    <h2 class="text-2xl sm:text-3xl font-semibold text-gray-800 text-center">Masuk ke Akun Anda</h2>
    <p class="text-sm text-gray-500 text-center mt-1 mb-6">Selamat datang kembali! Silakan login untuk melanjutkan.</p>

    @if ($errors->any())
      <div class="mb-6 p-3 text-sm text-red-700 bg-red-100 rounded border border-red-300">
        {{ $errors->first() }}
      </div>
    @endif

    <form method="POST" action="{{ url('/login') }}" class="space-y-6">
      @csrf
      <div>
        <label for="email" class="block mb-2 text-gray-700 font-medium">Email</label>
        <input
          id="email"
          type="email"
          name="email"
          value="{{ old('email') }}"
          required
          autofocus
          placeholder="email@example.com"
          class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 transition"
        />
      </div>

      <div>
        <label for="password" class="block mb-2 text-gray-700 font-medium">Password</label>
        <input
          id="password"
          type="password"
          name="password"
          required
          placeholder="••••••••"
          class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 transition"
        />
      </div>

      <button
        type="submit"
        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-md shadow-md transition"
      >
        Masuk
      </button>
    </form>

    <!-- Tambahan link -->
    <div class="mt-6 text-center text-sm text-gray-600">
      <p>Lupa password? <a href="#" class="text-indigo-600 hover:underline">Reset di sini</a></p>
      <p class="mt-2">Belum punya akun? <a href="#" class="text-indigo-600 hover:underline">Daftar sekarang</a></p>
    </div>
  </div>

</body>
</html>
