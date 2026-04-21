<!DOCTYPE html>
<html>
<head>
    <title>Edit Motor</title>
</head>
<body>

<h2>Edit Data Motor</h2>

{{-- error --}}
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('motor.update', $motor->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>Nama Motor</p>
    <input type="text" name="nama" value="{{ $motor->nama }}">

    <p>Harga</p>
    <input type="number" name="harga" value="{{ $motor->harga }}">

    <p>Stok</p>
    <input type="number" name="stok" value="{{ $motor->stok }}">

    <br><br>

    <a href="{{ route('motor.index') }}">Kembali</a>
    <button type="submit">Update</button>
</form>

</body>
</html>