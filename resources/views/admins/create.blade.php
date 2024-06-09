<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Tambah Data Baru</h1>
    
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admins.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="kategori_olahraga">Kategori Olahraga:</label>
            <input type="text" id="kategori_olahraga" name="kategori_olahraga" required>
        </div>
        
        <div class="form-group">
            <label for="no_tlp">No Tlp:</label>
            <input type="text" id="no_tlp" name="no_tlp" required>
        </div>
        
        <div class="form-group">
            <label for="lokasi_saat_ini">Lokasi Saat Ini:</label>
            <input type="text" id="lokasi_saat_ini" name="lokasi_saat_ini" required>
        </div>
        
        <div class="form-group">
            <label for="kondisi_fisik">Kondisi Fisik:</label>
            <input type="text" id="kondisi_fisik" name="kondisi_fisik" required>
        </div>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
