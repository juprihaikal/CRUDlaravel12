<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Data Motor</h2>

    <div class="card">
        <div class="card-body">

            {{-- error validasi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('motor.update', $motor->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- gambar lama --}}
                <div class="mb-3 text-center">
                    <label class="form-label d-block">Gambar Saat Ini</label>
                    <img src="{{ asset('storage/motor/'.$motor->gambar) }}" 
                         width="150" 
                         class="img-thumbnail mb-2">
                </div>

                {{-- upload gambar baru --}}
                <div class="mb-3">
                    <label class="form-label">Ganti Gambar (Opsional)</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

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
                    <a href="{{ route('motor.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>