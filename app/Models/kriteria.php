<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class kriteria extends Model
{
    use HasFactory;
    protected $table = 'kriteria';
    protected $primaryKey = 'kode_kriteria';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['kode_kriteria', 'nama_kriteria', 'nilai_bobot', 'jenis_kriteria'];
}


 