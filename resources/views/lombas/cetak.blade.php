<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Transaksi</title>
  <style>
    .table-data {
      border-collapse: collapse;
      width: 100%;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 11pt;
      padding: 10px 20px;
      text-align: center;
    }

    .table-data tr th {
      background-color: #2c3e50;
      color: white;
    }

    .table-data tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-data tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <h3>Data Categories</h3>
  <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama </th>
            <th>Tanggal lahir</th>
            <th>asal daerah</th>
            <th>umur</th>
            <th>alasan mengikuti lomba</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse  ($lombas as $lomba)
        <tr>
            <td>{{ $lomba->id }}</td>
            <td>{{ $lomba->nama }}</td>
            <td>{{ $lomba->tanggal }}</td>
            <td>{{ $lomba->lokasi }}</td>
            <td>{{ $lomba->jumlah_peserta }}</td>
            <td>{{ $lomba->keterangan }}</td>
            <td>
                @empty
                <tr>
                  <td colspan="7" align="center">Tidak ada data</td>
                </tr>
                @endforelse
    </tbody>
</table>
</body>

</html>
