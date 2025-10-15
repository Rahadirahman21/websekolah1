@extends('layout.layout')

@section('content')
<div class="relative py-12 text-white overflow-hidden ">
    <div class="flex items-center justify-center my-5">
        <div class="relative inline-block">
            <span class="absolute top-2 left-3 w-full h-full bg-black  shadow-2xl border-2 border-gray-800"></span>
            <h1 class="relative text-center font-bold text-2xl bg-blue-100 w-130 py-5 transform transition duration-300 hover:scale-105 text-blue-500 border-2 border-gray-800">
                Rombongan Belajar SMKN 4 Tasikmalaya 
            </h1>
        </div>
    </div>
    @foreach ($rombels as $jurusan => $listRombel)
            <div class="bg-black">
                <h2 class="text-xl font-semibold py-5 text-white ms-10">{{ $jurusan }}</h2>
            </div>
            <div class="flex justify-center gap-10 my-10 flex-wrap">
                @foreach ($listRombel as $rombel)
                    <div class="relative w-96 my-6">
                        <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl "></span>
                        <div
                            class="relative bg-blue-100 w-full shadow-sm transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800">
                            <div class="card-body text-black">
                                <h2 class="card-title font-drak">{{ $rombel->nama_kelas }}</h2>
                                <p>Anggota Rombel : {{ $rombel->jml_perempuan + $rombel->jml_lakilaki }}</p>
                                <p>Perempuan : {{ $rombel->jml_perempuan }}</p>
                                <p>Laki - Laki : {{ $rombel->jml_lakilaki }}</p>
                                {{-- <div class="card-actions justify-end">
                                    <button class="btn btn-primary">Selengkapnya</button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
</div>
@endsection