<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bobot extends Model
{
    use HasFactory;
    protected $table = 'bobot';
    protected $fillable = ['W1', 'W2', 'W3', 'W4', 'W5'];
}
