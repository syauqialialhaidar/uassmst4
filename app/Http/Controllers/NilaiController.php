<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Nilai';
        $kriterias = [];
        $alternatifs = [];
        $nilais = [];
        foreach (Kriteria::all() as $kriteria)
            $kriterias[$kriteria->id_kriteria] = $kriteria;
        foreach (Alternatif::all() as $alternatif)
            $alternatifs[$alternatif->id_alternatif] = $alternatif;
        foreach (Nilai::orderBy('id_alternatif')->orderBy('id_kriteria')->get() as $nilai)
            $nilais[$nilai->id_alternatif][$nilai->id_kriteria] = $nilai->nilai;

        return view('nilai.index', compact('title', 'kriterias', 'alternatifs', 'nilais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alternatifs = Alternatif::all();
        $kriterias = Kriteria::all();

        return view('nilai.create', compact('alternatifs', 'kriterias'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'alternatif_id' => 'required|exists:alternatifs,id',
                // Tambahkan validasi untuk setiap kriteria jika diperlukan
            ]);

            // Simpan nilai alternatif ke dalam database
            $nilai = new Nilai();
            $nilai->alternatif_id = $request->input('alternatif_id');
            $nilai->save();

            // Simpan nilai kriteria ke dalam database
            foreach ($request->input('kriteria') as $kriteria_id => $nilai_kriteria) {
                // Misalnya, Anda memiliki tabel nilai_kriterias
                // Sesuaikan ini dengan model dan tabel yang sesuai
                $nilai->kriteria()->attach($kriteria_id, ['nilai' => $nilai_kriteria]);
            }

            // Redirect dengan pesan sukses
            return redirect()->route('nilai.index')->with('success', 'Data nilai alternatif berhasil disimpan.');
        } catch (\Exception $e) {
            // Tangkap dan tampilkan pesan kesalahan jika terjadi
            return redirect()->back()->with('error', 'Gagal menyimpan data. ' . $e->getMessage());
        }
    }


    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
