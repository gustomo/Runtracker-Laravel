<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Admin Report</h1>
    <table>
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
