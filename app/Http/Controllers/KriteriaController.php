<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::all();
        return view ('admin.kriteria', compact('kriteria'));
    }

    public function create()
    {
        return view('admin.adddatakriteria');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirimkan
        $validatedData = $request->validate([
            'kode_kriteria' => 'required',
            'nama_kriteria' => 'required',
            'nilai_bobot' => 'required|numeric',
            'jenis_kriteria' => 'required',
        ]);
    
        // Simpan data ke dalam tabel kriteria
        $kriteria = new Kriteria();
        $kriteria->kode_kriteria = $request->kode_kriteria;
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->nilai_bobot = $request->nilai_bobot;
        $kriteria->jenis_kriteria = $request->jenis_kriteria;
        $kriteria->save();
    
        // Redirect atau kembali ke halaman yang diinginkan setelah menyimpan
        return redirect('/kriteria')->with('success', 'Data kriteria berhasil disimpan.');
    }
    

    public function edit(Kriteria $kriteria)
    {
        return view('kriteria.edit', compact('kriteria'));
    }

    public function update(Request $request, Kriteria $kriteria)
    {
        $request->validate([
            'kode_kriteria' => 'required',
            'nama_kriteria' => 'required',
            'nilai_bobot' => 'required|numeric',
            'jenis_kriteria' => 'required',
        ]);

        $kriteria->update($request->all());

        return redirect()->route('admin.kriteria')->with('success', 'Kriteria updated successfully.');
    }

    public function destroy($id)
{
    $kriteria = Kriteria::findOrFail($id);
    $kriteria->delete();

    return redirect('/kriteria')->with('success', 'Data kriteria berhasil dihapus.');
}
}
