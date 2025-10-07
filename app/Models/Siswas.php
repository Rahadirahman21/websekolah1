<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswas extends Model
{
    use HasFactory;
    protected $fillable = [
        "jml_siswa",
    ];
}
