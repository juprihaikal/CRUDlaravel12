<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Motor;
use Illuminate\View\View;

class MotorController extends Controller
{
    public function index(): View
    {
        $motor = Motor::latest()->paginate(5);
        return view('motor.index', compact('motor'));
    }

    public function create(): View
    {
        return view('motor.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama'  => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok'  => 'required|integer',
        ]);

        Motor::create([
            'nama'  => $request->nama,
            'harga' => $request->harga,
            'stok'  => $request->stok,
        ]);

        return redirect()->route('motor.index')
                         ->with('success', 'Data motor berhasil ditambahkan!');
    }

    public function edit(string $id): View
    {
        $motor = Motor::findOrFail($id);
        return view('motor.edit', compact('motor'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $motor = Motor::findOrFail($id);

        $request->validate([
            'nama'  => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok'  => 'required|integer',
        ]);

        $motor->update([
            'nama'  => $request->nama,
            'harga' => $request->harga,
            'stok'  => $request->stok,
        ]);

        return redirect()->route('motor.index')
                         ->with('success', 'Data motor berhasil diupdate!');
    }

    public function destroy($id): RedirectResponse
    {
        $motor = Motor::findOrFail($id);
        $motor->delete();

        return redirect()->route('motor.index')
                         ->with('success', 'Data berhasil dihapus');
    }
}