<?php

namespace App\Http\Controllers;

use App\Models\DataHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class DataHotelController extends Controller
{
    public function create()
    {
        return view('admin.adddatahotel');
    }

    public function index()
    {
        $datahotel = DataHotel::all();
        return view('admin.datahotel', compact('datahotel'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_hotel' => 'required',
            'nama_hotel' => 'required|string|max:255',
            'alamat_hotel' => 'required|string',
            'rating' => 'required|numeric',
            'jenis_hotel' => 'required|string',
            'fasilitas_utama' => 'required|string',
        ]);
        

        $dataHotel = new datahotel();
        $dataHotel->kode_hotel = $request->kode_hotel;
        $dataHotel->nama_hotel = $request->nama_hotel;
        $dataHotel->alamat_hotel = $request->alamat_hotel;
        $dataHotel->rating = $request->rating;
        $dataHotel->jenis_hotel = $request->jenis_hotel;
        $dataHotel->fasilitas_utama = $request->fasilitas_utama;
        $dataHotel->save();

        return redirect('/datahotel')->with('success', 'Data Hotel berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $datahotel = DataHotel::findOrFail($id);
        return view('admin.editdatahotel', compact('datahotel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_hotel' => 'required|string|max:255',
            'alamat_hotel' => 'required|string|max:255',
            'rating' => 'required|numeric|min:1|max:5',
            'jenis_hotel' => 'required|string|max:255',
            'fasilitas_umum' => 'required|string',
        ]);
    
        $datahotel = DataHotel::findOrFail($id);
    
        $datahotel->update([
            'nama_hotel' => $request->nama_hotel,
            'alamat_hotel' => $request->alamat_hotel,
            'rating' => $request->rating,
            'jenis_hotel' => $request->jenis_hotel,
            'fasilitas_umum' => $request->fasilitas_umum,
        ]);
    
        return redirect()->route('admin.datahotel')->with('success', 'Data hotel berhasil diperbarui');
    }
    
    public function destroy($id)
{
    $datahotel = DataHotel::findOrFail($id);
    $datahotel->delete();

    return redirect()->route('admin.datahotel')->with('success', 'Data hotel berhasil dihapus');
}

    
    public function delete(Request $request, $column)
    {
        $nama = $request->input('nama');
        $tipe = $request->input('tipe');
        try {
            if (!Schema::hasColumn('nilai', $column)) {
                throw new \Exception('Kolom tidak ditemukan.');
            }

            $lastWColumn = DB::table('information_schema.columns')
                ->select('column_name')
                ->where('table_schema', env('DB_DATABASE'))
                ->where('table_name', 'pembobotan')
                ->where('column_name', 'like', 'w%')
                ->orderBy('ordinal_position', 'desc')
                ->first();

            if (!$lastWColumn) {
                throw new \Exception('Kolom W tidak ditemukan di tabel pembobotan.');
            }

            Schema::table('nilai', function ($table) use ($column) {
                $table->dropColumn($column);
            });

            Schema::table('pembobotan', function ($table) use ($lastWColumn) {
                $table->dropColumn($lastWColumn->column_name);
            });

            TipeKriteria::where('nama', $nama)
                ->where('tipe', $tipe)
                ->delete();

            return redirect()->back()->with('success', 'Kolom berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
