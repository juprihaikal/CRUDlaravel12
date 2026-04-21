<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: white;
        }

        .card {
            border: 1px solid black;
        }

        input {
            border: 1px solid black !important;
        }

        .btn-custom {
            background-color: white;
            color: black;
            border: 1px solid black;
            padding: 5px 10px;
            text-decoration: none;
        }

        .btn-custom:hover {
            background-color: black;
            color: white;
        }

        .alert {
            border: 1px solid black;
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Tambah Data Motor</h2>

    <div class="card">
        <div class="card-body">

            {{-- tampil error --}}
            @if ($errors->any())
                <div class="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('motor.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama Motor</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                </div>

                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" value="{{ old('harga') }}">
                </div>

                <div class="mb-3">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control" value="{{ old('stok') }}">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('motor.index') }}" class="btn-custom">Kembali</a>
                    <button type="submit" class="btn-custom">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>