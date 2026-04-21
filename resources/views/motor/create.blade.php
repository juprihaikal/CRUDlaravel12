<!DOCTYPE html>
<html>
<head>
    <title>Tambah Motor</title>
</head>
<body>

<h2>Tambah Data Motor</h2>

{{-- error --}}
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('motor.store') }}" method="POST">
    @csrf

    <p>Nama Motor</p>
    <input type="text" name="nama" value="{{ old('nama') }}">

    <p>Harga</p>
    <input type="number" name="harga" value="{{ old('harga') }}">

    <p>Stok</p>
    <input type="number" name="stok" value="{{ old('stok') }}">

    <br><br>

    <a href="{{ route('motor.index') }}">Kembali</a>
    <button type="submit">Simpan</button>
</form>

</body>
</html>