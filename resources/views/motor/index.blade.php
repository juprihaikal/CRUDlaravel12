<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Data Motor</h2>

    {{-- tombol tambah --}}
    <a href="{{ route('motor.create') }}" class="btn btn-primary mb-3">+ Tambah Motor</a>

    {{-- notifikasi sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Motor</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($motor as $index => $item)
                <tr>
                    <td>{{ $index + $motor->firstItem() }}</td>

                    {{-- nama --}}
                    <td>{{ $item->nama }}</td>

                    {{-- harga --}}
                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>

                    {{-- stok --}}
                    <td>{{ $item->stok }}</td>

                    {{-- aksi --}}
                    <td>
                        <a href="{{ route('motor.edit', $item->id) }}" 
                           class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('motor.destroy', $item->id) }}" 
                              method="POST" 
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Yakin mau hapus?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Data motor belum ada.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- pagination --}}
    <div class="d-flex justify-content-center">
        {{ $motor->links() }}
    </div>
</div>

</body>
</html>