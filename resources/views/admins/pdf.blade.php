<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Admin</title>
</head>
<body>
    <h1>Data Admin</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kategori Olahraga</th>
            <th>No Tlp</th>
            <th>Lokasi Saat Ini</th>
            <th>Kondisi Fisik</th>
        </tr>
        @foreach ($admins as $admin)
        <tr>
            <td>{{ $admin->id }}</td>
            <td>{{ $admin->nama }}</td>
            <td>{{ $admin->email }}</td>
            <td>{{ $admin->kategori_olahraga }}</td>
            <td>{{ $admin->no_tlp }}</td>
            <td>{{ $admin->lokasi_saat_ini }}</td>
            <td>{{ $admin->kondisi_fisik }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
