<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: white;
        }

        h2 {
            color: black;
        }

        .card {
            border: 1px solid black;
        }

        .card-body {
            padding: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            border: 1px solid black !important;
        }

        /* tombol hitam putih */
        .btn-custom {
            background-color: white;
            color: black;
            border: 1px solid black;
            padding: 5px 12px;
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
    <h2 class="text-center mb-4">Edit Data Motor</h2>

    <div class="card">
        <div class="card-body">

            {{-- error validasi --}}
            @if ($errors->any())
                <div class="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('motor.update', $motor->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- nama --}}
                <div class="mb-3">
                    <label class="form-label">Nama Motor</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama', $motor->nama) }}" required>
                </div>

                {{-- harga --}}
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" value="{{ old('harga', $motor->harga) }}" required>
                </div>

                {{-- stok --}}
                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" value="{{ old('stok', $motor->stok) }}" required>
                </div>

                {{-- tombol --}}
                <div class="d-flex justify-content-between">
                    <a href="{{ route('motor.index') }}" class="btn-custom">Kembali</a>
                    <button type="submit" class="btn-custom">Update</button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>