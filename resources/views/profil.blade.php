@extends('layout.layout')

@section('content')
    <div class="relative w-full md:w-3/4 mx-auto mt-5 p">
        <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl "></span>
        <div
            class="relative bg-blue-100 shadow-lg  p-6 md:p-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800">
            <h2 class="text-blue-500 font-bold text-2xl mb-4">Identitas Sekolah</h2>
            <table class="table-auto w-full ">
                @foreach ($identitas as $identita)
                
                <tbody>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Nama Sekolah</td>
                        <td class="py-2 px-4">: {{ $identita->nama_sekolah}}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">NPSN</td>
                        <td class="py-2 px-4">: {{ $identita->npsn }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Alamat</td>
                        <td class="py-2 px-4">: {{ $identita->alamat }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Telepon</td>
                        <td class="py-2 px-4">: {{ $identita->telepon }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Email</td>
                        <td class="py-2 px-4">: {{ $identita->email }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Tahun Berdiri</td>
                        <td class="py-2 px-4">: {{ $identita->tahun_berdiri }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">No SK</td>
                        <td class="py-2 px-4">: {{ $identita->no_sk }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Tanggal SK</td>
                        <td class="py-2 px-4">: {{ $identita->tgl_sk }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Kepemilikan</td>
                        <td class="py-2 px-4">: {{ $identita->kepemilikan }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    <div class="py-5">
        <div class="relative w-full md:w-3/4 mx-auto">
            <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl "></span>
            <div
                class="relative bg-blue-100 shadow-lg  p-6 md:p-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800">
                <div class="w-full">
                    @foreach ($profil as $p)
                        <h3 class="text-blue-500 font-bold text-2xl mb-2">SEJARAH</h3>
                        <p class="text-black mb-4">{{ $p->sejarah }}</p>
                    @endforeach
                </div>
            </div>
        </div>


        
    </div>
    <div class="py-10">
        <div class="relative w-full md:w-3/4 mx-auto">
            <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl "></span>
            <div
                class="relative bg-blue-100 shadow-lg  p-6 md:p-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800">
                <div class="w-full">
                    @foreach ($profil as $p)
                        <h3 class="text-blue-500 font-bold text-2xl mb-2">VISI</h3>
                        <p class="text-black mb-4">{{ $p->visi }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="mb-10">
        <div class="relative w-full md:w-3/4 mx-auto">
            <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl "></span>
            <div
                class="relative bg-blue-100 shadow-lg  p-6 md:p-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800">
                <div class="w-full">
                    @foreach ($profil as $p)
                        <h3 class="text-blue-500 font-bold text-2xl mb-2">MISI</h3>
                        <p class="text-black mb-4">{{ $p->misi }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection