<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataHotel extends Model
{
    protected $table = 'data_hotel'; 

    protected $fillable = [
        'kode_hotel', 'nama_hotel', 'alamat_hotel', 'rating', 'jenis_hotel', 'fasilitas_utama',
    ];    
}
