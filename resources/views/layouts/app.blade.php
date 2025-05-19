<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sistem Informasi Perpustakaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar untuk mobile -->
    <header class="bg-indigo-700 text-white px-4 py-3 flex justify-between items-center md:hidden">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('img/1.png') }}" alt="Logo" class="w-8 h-9" />
            <span class="font-bold text-lg">Perpustakaan</span>
        </div>
        <button id="menuToggle" class="text-white focus:outline-none" aria-label="Toggle menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </header>

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-50 w-64 bg-indigo-700 text-white p-6 transform -translate-x-full transition-transform duration-200 ease-in-out md:relative md:translate-x-0">
            <div class="mb-10 flex flex-col items-center">
                <img src="{{ asset('img/1.png') }}" alt="Logo" class="w-10 h-11 mb-4" />
                <h1 class="text-2xl font-bold">Perpustakaan</h1>
                <p class="text-sm text-indigo-300">Sistem Informasi</p>
            </div>
            <nav class="flex-1">
                <ul class="space-y-3">
                    <li><a href="/beranda" class="block px-4 py-2 rounded hover:bg-indigo-600 transition">🏠 Beranda</a></li>
                    <li><a href="/buku" class="block px-4 py-2 rounded hover:bg-indigo-600 transition">📘 Data Buku</a></li>
                    <li><a href="/anggota" class="block px-4 py-2 rounded hover:bg-indigo-600 transition">🧑‍🤝‍🧑 Data Anggota</a></li>
                    <li><a href="/transaksi" class="block px-4 py-2 rounded hover:bg-indigo-600 transition">🔄 Transaksi</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="px-4 py-2 rounded hover:bg-indigo-600 transition flex gap-2 items-center w-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                </svg>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
            <footer class="mt-10 text-xs text-indigo-300 text-center">
                &copy; 2025 SiPus - Praktikum
            </footer>
        </aside>

        <!-- Konten Utama -->
        <main class="flex-1 bg-white p-8 shadow-inner mt-16 md:mt-0 md:pl-64 min-w-0">
            @yield('content')
        </main>
    </div>

    <!-- Script Toggle Menu -->
    <script>
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            sidebar.classList.toggle('translate-x-0');
        });
    </script>

</body>
</html>
