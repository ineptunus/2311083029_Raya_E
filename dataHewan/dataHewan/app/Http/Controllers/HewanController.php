<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    // Tampilkan semua data hewan
    public function index()
    {
        $hewan = Hewan::latest()->paginate(10); // Ambil data hewan terbaru dan paginasi 10 per halaman
        return view('hewan.index', compact('hewan'));
    }

    // Tampilkan form tambah hewan baru
    public function create()
    {
        return view('hewan.create');
    }

    // Simpan data hewan baru ke database
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama_hewan' => 'required|string|max:255',
            'jenis_hewan' => 'required|string|max:255',
            'ras' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'nama_pemilik' => 'required|string|max:255',
            'kontak_pemilik' => 'required|string|max:255',
            'status' => 'required|in:aktif,tidak aktif',
        ]);

        // Insert data ke tabel hewan
        Hewan::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('hewan.index')->with('success', 'Data hewan berhasil ditambahkan.');
    }

    // Tampilkan form edit hewan
    public function edit($id)
    {
        $hewan = Hewan::findOrFail($id); // Cari data berdasarkan ID
        return view('hewan.edit', compact('hewan'));
    }

    // Update data hewan yang sudah ada
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nama_hewan' => 'required|string|max:255',
            'jenis_hewan' => 'required|string|max:255',
            'ras' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'nama_pemilik' => 'required|string|max:255',
            'kontak_pemilik' => 'required|string|max:255',
            'status' => 'required|in:aktif,tidak aktif',
        ]);

        // Cari data hewan dan update
        $hewan = Hewan::findOrFail($id);
        $hewan->update($request->all());

        // Redirect balik ke index dengan notifikasi
        return redirect()->route('hewan.index')->with('success', 'Data hewan berhasil diupdate.');
    }

    // Hapus data hewan (soft delete)
    public function destroy($id)
    {
        $hewan = Hewan::findOrFail($id);
        $hewan->delete(); // Soft delete

        // Redirect ke index dengan pesan
        return redirect()->route('hewan.index')->with('success', 'Data berhasil dihapus.');
    }

    // Tampilkan daftar data hewan yang sudah dihapus (sampah)
    public function deleted()
    {
        $hewan = Hewan::onlyTrashed()->paginate(10); // Ambil data yang sudah dihapus (soft deleted)
        return view('hewan.riwayat', compact('hewan'));
    }

    // Pulihkan data hewan yang sudah dihapus
    public function restore($id)
    {
        $hewan = Hewan::onlyTrashed()->findOrFail($id);
        $hewan->restore(); // Kembalikan data

        // Redirect ke halaman deleted dengan pesan sukses
        return redirect()->route('hewan.riwayat')->with('success', 'Data berhasil dipulihkan.');
    }
}
