<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; font-size: 12px; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Daftar Buku</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Anggota</th>
                <th>ID Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksis as $no => $transaksi)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $transaksi->anggota_id }}</td>
                    <td>{{ $transaksi->buku_id }}</td>
                    <td>{{ $transaksi->tgl_pinjam }}</td>
                    <td>{{ $transaksi->tgl_kembali }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
