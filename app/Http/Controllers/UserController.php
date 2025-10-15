<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use App\Models\Eskuls;
use App\Models\Galeris;
use App\Models\Guru;
use App\Models\Identitas;
use App\Models\Jurusans;
use App\Models\Profils;
use App\Models\Rombels;
use App\Models\Sarpras;
use App\Models\Settings;
use App\Models\Siswas;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $jml_guru = Guru::count();
        $jml_jurusan = Jurusans::count();
        $jml_eskul = Eskuls::count();
        $jml_rombel = Rombels::count();
        $berita = Beritas::all();
        $setting = Settings::all();
        $profil = Profils::all();
        $eskul = Eskuls::all();
        $jurusan = Jurusans::all();
        $rombel = Rombels::all();
        $siswa = Siswas::all();

        return view('beranda', compact('siswa', 'jml_rombel', 'jml_eskul', 'jml_jurusan', 'jml_guru', 'berita', 'setting', 'profil', 'eskul', 'jurusan', 'rombel'));
    }

    public function profilIndex()
    {
        $profil = Profils::all();
        $setting = Settings::all();
        $identitas = Identitas::all();

        return view('profil', compact('identitas', 'profil', 'setting'));
    }

    public function eskulIndex()
    {
        $setting = Settings::all();
        $eskul = Eskuls::all();

        return view('eskul', compact('eskul', 'setting'));
    }

    public function jurusanIndex()
    {
        $setting = Settings::all();
        $jurusan = Jurusans::all();

        return view('jurusan', compact('setting', 'jurusan'));
    }
    public function galeriIndex()
    {
        $setting = Settings::all();
        $galeri = Galeris::all();

        return view('galeri', compact('setting', 'galeri'));
    }

    public function rombelIndex()
    {
        $setting = Settings::all();
        $rombels = Rombels::all()->groupBy('jurusan');

        return view('rombel', compact('rombels', 'setting' ));
    }

    public function sarprasIndex()
    {
        $setting = Settings::all();
        $sarpras = Sarpras::all()->groupBy('jenis');

        return view('sarpras', compact('sarpras', 'setting'));
    }
    public function guruIndex()
    {
        $setting = Settings::all();
        $gurus = Guru::all()->groupBy('jabatan');

        return view('guru', compact('gurus', 'setting'));
    }

}
