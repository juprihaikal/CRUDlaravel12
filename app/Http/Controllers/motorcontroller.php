<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\motor;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;


class motorcontroller extends Controller
{
    public function index(): View
    {
        $motor = motor::latest()->paginate(5);
        return View('motor.index', compact('motor'));
    }

    public function create(): View
    {
        return View('motor.create');
    }

      public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nama'   => 'required|string|max:255',
            'harga'  => 'required|numeric',
            'stok'   => 'required|integer',
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/motor', $gambar->hashName());

        Motor::create([
            'gambar' => $gambar->hashName(),
            'nama'   => $request->nama,
            'harga'  => $request->harga,
            'stok'   => $request->stok,
        ]);

        return redirect()->route('motor.index')
                         ->with('success', 'Data motor berhasil ditambahkan!');
    }

    public function edit(string $id): View
    {
        $motor = motor::findOrFail($id);
        return View('motor.edit', compact('motor'));
    }

    public function update(Request $request, $id): RedirectResponse
{
    $motor = Motor::findOrFail($id);

    // validasi
    $request->validate([
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'nama'   => 'required|string|max:255',
        'harga'  => 'required|numeric',
        'stok'   => 'required|integer',
    ]);

    // cek kalau ada gambar baru
    if ($request->hasFile('gambar')) {

        // hapus gambar lama
        Storage::delete('public/motor/' . $motor->gambar);

        // upload gambar baru
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/motor', $gambar->hashName());

        $motor->update([
            'gambar' => $gambar->hashName(),
            'nama'   => $request->nama,
            'harga'  => $request->harga,
            'stok'   => $request->stok,
        ]);

    } else {
        // kalau tidak update gambar
        $motor->update([
            'nama'  => $request->nama,
            'harga' => $request->harga,
            'stok'  => $request->stok,
        ]);
    }

    return redirect()->route('motor.index')
                     ->with('success', 'Data motor berhasil diupdate!');
}

    public function destroy($id): RedirectResponse
    {
        $motor = motor::findOrFail($id);
        Storage::delete('motor/'. $motor->gambar);
        $motor->delete();
        return redirect()->route('motor.index')->with(['succes' => 'Data Berhasil Dihapus']);
    }
}


