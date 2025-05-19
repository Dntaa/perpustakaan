<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beranda Perpustakaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-md rounded p-8 max-w-lg w-full">
            <h1 class="text-3xl font-bold mb-4 text-center">Selamat Datang di Perpustakaan</h1>
            <p class="text-center mb-6">Sistem manajemen buku sederhana berbasis Laravel.</p>

            <div class="flex justify-center gap-4">
                <a href="/buku" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Lihat Buku</a>
                <a href="/transaksi" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Lihat Transaksi</a>
                <a href="/anggota" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Lihat Anggota</a>
            </div>
        </div>
    </div>
</body>
</html>
