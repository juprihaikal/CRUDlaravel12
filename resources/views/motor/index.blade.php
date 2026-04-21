<h1>Data Motor</h1>

<a href="{{ route('motor.create') }}">Tambah</a>

<table border="1">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

@foreach($motor as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->nama }}</td>
    <td>{{ $item->harga }}</td>
    <td>{{ $item->stok }}</td>
    <td>
        <a href="{{ route('motor.edit', $item->id) }}">Edit</a>
        <form action="{{ route('motor.destroy', $item->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button>Hapus</button>
        </form>
    </td>
</tr>
@endforeach

</table>