<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beritas extends Model
{
    use  HasFactory ;
    protected $fillable = [
        "foto",
        "tanggal",
        "nama_berita",
    ] ;
}
