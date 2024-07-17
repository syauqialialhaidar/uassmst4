<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Kriteria';
        $kriterias = Kriteria::all();
        return view('kriteria.index', compact('title', 'kriterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_kriteria' => 'required|string|max:255',
            'atribut' => 'required|string|max:255',
            'bobot' => 'required|numeric',
        ]);

        // Menyimpan data baru
        $kriteria = new Kriteria();
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->atribut = $request->atribut;
        $kriteria->bobot = $request->bobot;
        $kriteria->save();

        return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil ditambahkan');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Kriteria $kriteria)
    {
        return view('kriteria.show', compact('kriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kriteria $kriteria)
    {
        return view('kriteria.edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kriteria $kriteria)
    {
        // Validasi input
        $request->validate([
            'nama_kriteria' => 'required|string|max:255',
            'atribut' => 'required|string|max:255',
            'bobot' => 'required|numeric',
        ]);

        // Memperbarui data
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->atribut = $request->atribut;
        $kriteria->bobot = $request->bobot;
        $kriteria->save();

        return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kriteria $kriteria)
    {
        $kriteria->delete();

        return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil dihapus');
    }
}
