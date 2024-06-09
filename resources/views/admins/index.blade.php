<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* CSS untuk tabel */
        .tb {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .tb th, .tb td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .tb th {
            background-color: #f2f2f2;
            color: #333;
        }

        .tb tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .tb tr:hover {
            background-color: #f1f1f1;
        }

        /* CSS untuk tombol tambah dan unduh PDF */
        .add-new {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            margin-right: 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .add-new:hover {
            background-color: #45a049;
        }

        /* CSS untuk tombol edit dan delete dalam tabel */
        .tb td a {
            display: inline-block;
            padding: 6px 10px;
            margin-right: 5px;
            background-color: #008CBA;
            color: white;
            text-decoration: none;
            border-radius: 3px;
        }

        .tb td a:hover {
            background-color: #0077A3;
        }

        .tb td form button {
            padding: 6px 10px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .tb td form button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="wrapper">
            <div class="brand">
                <div class="firstname">run</div>
                <div class="lastname">tracker</div>
            </div>
            <ul class="nav">
                <li><a href="{{ url('widgets/information') }}" class=""> tentang kami</a></li>
                <li><a href="{{ url('login/loginn') }}" class="satu">login/register</a></li>
                <li><a href="{{ url('crud2/awal') }}" class="dua">admin</a></li>
                <li><a href="{{ url('crud/index') }}" class="tiga">user</a></li>
                <li><img src="{{ asset('gambar/sampel2.jpg') }}" alt=""></li>
            </ul>
        </nav>
    </div>
    
    <a class="add-new" href="{{ route('admins.create') }}">Tambah Data Baru</a>
    <form action="{{ route('admins.pdf') }}" method="post">
        @csrf
        <button type="submit">Unduh Report PDF</button>
    </form>
    
    
    <table class="tb" border="1">
        <tr class="isi">
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kategori Olahraga</th>
            <th>No Tlp</th>
            <th>Lokasi Saat Ini</th>
            <th>Kondisi Fisik</th>
            <th>Action</th>
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
            <td>
                <a href="{{ route('admins.edit',$admin->id) }}">Edit</a>
                <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    <footer>
        <p>Hak cipta © 2023</p>
    </footer>
</body>
</html>
