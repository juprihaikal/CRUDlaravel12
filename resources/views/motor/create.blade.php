<h1>Tambah Motor</h1>

<form action="{{ route('motor.store') }}" method="POST">
@csrf

Nama <br>
<input type="text" name="nama"><br>

Harga <br>
<input type="number" name="harga"><br>

Stok <br>
<input type="number" name="stok"><br><br>

<button>Simpan</button>
<a href="{{ route('motor.index') }}">Kembali</a>
</form>