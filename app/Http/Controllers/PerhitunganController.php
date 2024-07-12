<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function hitung(Request $request)
    {
        // Ambil semua kriteria dan alternatif dari database
        $kriteria = Kriteria::all();
        $alternatif = Alternatif::all();
        $Alternatif = Alternatif::get();
        $data = Alternatif::orderby('kode_alternatif', 'asc')->get();
      
        // Hitung total bobot dari semua kriteria
        $total_bobot = Kriteria::sum('nilai_bobot');

        // Hitung bobot untuk masing-masing kriteria
        $bobot1 = 30 / $total_bobot;
        $bobot2 = 30 / $total_bobot;
        $bobot3 = 20 / $total_bobot;
        $bobot4 = 20 / $total_bobot;

        // Simpan bobot dalam array untuk dikirimkan ke view
        $widget1 = ['kriteria' => $bobot1];
        $widget2 = ['kriteria' => $bobot2];
        $widget3 = ['kriteria' => $bobot3];
        $widget4 = ['kriteria' => $bobot4];

        // Ambil nilai minimum dan maksimum dari masing-masing kriteria
        $minC1 = Alternatif::min('c1');
        $maxC1 = Alternatif::max('c1');
        $minC2 = Alternatif::min('c2');
        $maxC2 = Alternatif::max('c2');
        $minC3 = Alternatif::min('c3');
        $maxC3 = Alternatif::max('c3');
        $minC4 = Alternatif::min('c4');
        $maxC4 = Alternatif::max('c4');

        // Simpan nilai minimum dan maksimum dalam array untuk dikirimkan ke view
        $C1min = ['alternatif' => $minC1];
        $C1max = ['alternatif' => $maxC1];
        $C2min = ['alternatif' => $minC2];
        $C2max = ['alternatif' => $maxC2];
        $C3min = ['alternatif' => $minC3];
        $C3max = ['alternatif' => $maxC3];
        $C4min = ['alternatif' => $minC4];
        $C4max = ['alternatif' => $maxC4];


$maxC1 = Alternatif::max('c1');
$maxC2 = Alternatif::max('c2');
$minC3 = Alternatif::min('c3');
$maxC4 = Alternatif::max('c4');



        // Menghitung hasil normalisasi untuk setiap alternatif
        foreach ($alternatif as $alt) {
            $alt->alternatif= $alt->c1 / ($maxC1['alternatif'] ?? 1); // Handling jika $maxC1['alternatif'] adalah null
            $alt->alternatif = $alt->c2 / ($maxC2['alternatif'] ?? 1); // Handling jika $maxC2['alternatif'] adalah null
            $alt->alternatif = ($alt->c3 - $minC3) / ($maxC3 - $minC3); // Normalisasi c3 dengan min-max
            $alt->alternatif = $alt->c4 / ($maxC4['alternatif'] ?? 1); // Handling jika $maxC4['alternatif'] adalah null
            $alt->save();
        }
       
        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'alternatif' => $hasil,
        ];

         

        // Kirim data ke view 'admin.hitung'
        return view('admin.hitung', compact('hasil1', 'alternatif', 'data', 'widget1', 'widget2', 'widget3', 'widget4', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max'));
    }
}
