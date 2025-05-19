<!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; font-size: 12px; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Daftar Anggota</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggotas as $no => $anggota)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $anggota->nama }}</td>
                    <td>{{ $anggota->jenis_kelamin }}</td>
                    <td>{{ $anggota->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
