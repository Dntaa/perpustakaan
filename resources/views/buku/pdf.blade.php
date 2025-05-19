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
                <th>Judul</th>
                <th>Kategori</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukus as $no => $buku)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->kategori }}</td>
                    <td>{{ $buku->pengarang }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
