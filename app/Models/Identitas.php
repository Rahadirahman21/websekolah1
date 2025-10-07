<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    use HasFactory;
    protected $fillable = [
        "nama_sekolah",
        "npsn",
        "alamat",
        "telepon",
        "email",
        "tahun_berdiri",
        "no_sk",
        "tgl_sk",
        "kepemilikan",
    ];
}
