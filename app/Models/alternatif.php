<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    
class alternatif extends Model
{
    use HasFactory;
    protected $table = 'alternatif';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'kode_alternatif', 'alternatif', 'c1', 'c2', 'c3', 'c4',
    ];
}

