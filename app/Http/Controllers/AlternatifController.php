<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatifs = Alternatif::all();
        return view('alternatif.index', [
            'alternatifs' => $alternatifs,
            'title' => 'Daftar Alternatif'
        ]);
    }

    public function create()
    {
        $title = 'Tambah Alternatif';
        return view('alternatif.create', compact('title'));
    }

    public function store(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'id_alternatif' => 'required|string|max:10',
            'nama_alternatif' => 'required|string|max:255',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data baru ke dalam database
        Alternatif::create($request->all());

        // Redirect ke halaman index atau halaman lainnya setelah sukses menyimpan data
        return redirect()->route('alternatif.index')->with('success', 'Alternatif berhasil ditambahkan.');
    }

    public function show(Alternatif $alternatif)
    {
        return view('alternatif.show', compact('alternatif'));
    }

    public function edit($id)
    {
        $alternatif = Alternatif::find($id);
        if (!$alternatif) {
            abort(404); // atau penanganan error lainnya
        }

        return view('alternatif.edit', compact('alternatif'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'nama_alternatif' => 'required|string|max:255',
            // Atur validasi lainnya sesuai kebutuhan
        ]);

        // Ambil data alternatif dari model berdasarkan ID
        $alternatif = Alternatif::findOrFail($id);

        // Update data alternatif berdasarkan input dari form
        $alternatif->update($request->all());

        // Redirect atau kembali ke halaman yang sesuai
        return redirect()->route('alternatif.index')->with('success', 'Data alternatif berhasil diperbarui.');
    }

    public function destroy(Alternatif $alternatif)
    {
        $alternatif->delete();
        return redirect()->route('alternatif.index')->with('success', 'Alternatif berhasil dihapus.');
    }
}
