<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::paginate(10); // Mengambil data dari model Alternatif
        return view('admin.alternatif', compact('alternatif'));
    }

    public function create()
    {
        return view('admin.adddataalternatif');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirimkan
        $validatedData = $request->validate([
            'kode_alternatif' => 'required',
            'alternatif' => 'required',
            'c1' => 'required|numeric',
            'c2' => 'required|numeric',
            'c3' => 'required|numeric',
            'c4' => 'required|numeric',
        ]);
    
        // Simpan data ke dalam tabel alternatif
        $alternatif = new Alternatif();
        $alternatif->kode_alternatif = $request->kode_alternatif;
        $alternatif->alternatif = $request->alternatif;
        $alternatif->c1 = $request->c1;
        $alternatif->c2 = $request->c2;
        $alternatif->c3 = $request->c3;
        $alternatif->c4 = $request->c4;
        $alternatif->save();
    
        // Redirect atau kembali ke halaman yang diinginkan setelah menyimpan
        return redirect('/alternatif')->with('success', 'Data alternatif berhasil disimpan.');
    }    

    public function update(Request $request, Alternatif $alternatif)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'kode_alternatif' => 'required|string|max:50',
            'alternatif' => 'required|string|max:100',
            'c1' => 'required|numeric',
            'c2' => 'required|numeric',
            'c3' => 'required|numeric',
            'c4' => 'required|numeric',
        ]);

        // Update data alternatif yang ada
        $alternatif->kode_alternatif = $request->kode_alternatif;
        $alternatif->alternatif = $request->alternatif;
        $alternatif->c1 = $request->c1;
        $alternatif->c2 = $request->c2;
        $alternatif->c3 = $request->c3;
        $alternatif->c4 = $request->c4;
        $alternatif->save();

        return redirect('/alternatif')->with('success', 'Data alternatif berhasil diperbarui.');
    }
    public function edit($id)
{
    $alternatif = Alternatif::find($id);
    return view('alternatif.edit', compact('alternatif'));
}


    public function destroy($id)
    {
        $alternatif = Alternatif::findOrFail($id);
        $alternatif->delete();
    
        return redirect('/alternatif')->with('success', 'Data alternatif berhasil dihapus.');
    }
}
