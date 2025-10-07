<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombels extends Model
{
    use HasFactory;
    protected $fillable = [
        "jurusan",
        "nama_kelas",
        "jml_lakilaki",
        "jml_perempuan",
    ];
}
