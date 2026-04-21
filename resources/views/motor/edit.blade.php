<h1>Edit Motor</h1>

<form action="{{ route('motor.update', $motor->id) }}" method="POST">
@csrf
@method('PUT')

Nama <br>
<input type="text" name="nama" value="{{ $motor->nama }}"><br>

Harga <br>
<input type="number" name="harga" value="{{ $motor->harga }}"><br>

Stok <br>
<input type="number" name="stok" value="{{ $motor->stok }}"><br><br>

<button>Update</button>
<a href="{{ route('motor.index') }}">Kembali</a>
</form>