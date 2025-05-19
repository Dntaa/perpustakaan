<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-50 flex items-center justify-center font-sans">
  <div class="bg-white rounded-xl shadow-md max-w-md w-full p-8">
    <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Masuk ke Akun Anda</h2>

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
        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-md shadow-sm transition"
      >
        Masuk
      </button>
    </form>
  </div>
</body>
</html>
