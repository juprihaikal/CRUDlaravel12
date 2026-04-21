<!DOCTYPE html>
<html>
<head>
    <title>Data Motor</title>
</head>
<body>

<h2>Data Motor</h2>

<a href="{{ route('motor.create') }}">+ Tambah Motor</a>

<br><br>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Motor</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @forelse ($motor as $index => $item)
    <tr>
        <td>{{ $index + $motor->firstItem() }}</td>
        <td>{{ $item->nama }}</td>
        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
        <td>{{ $item->stok }}</td>
        <td>
            <a href="{{ route('motor.edit', $item->id) }}">Edit</a>

            <form action="{{ route('motor.destroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Yakin mau hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="5">Data kosong</td>
    </tr>
    @endforelse
</table>

<br>

{{ $motor->links() }}

</body>
</html>