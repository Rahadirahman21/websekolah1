@extends('layout.layout')

@section('content')
<div class="relative py-12 text-white overflow-hidden ">
    <div class="flex items-center justify-center my-5">
        <div class="relative inline-block">
            <span class="absolute top-2 left-3 w-full h-full bg-black  shadow-2xl border-2 border-gray-800"></span>
            <h1 class="relative text-center font-bold text-2xl bg-blue-100 w-130 py-5 transform transition duration-300 hover:scale-105 text-blue-500 border-2 border-gray-800">
                 Ekstrakurikuler SMKN 4 Tasikmalaya
            </h1>
        </div>
    </div>
    <div class="flex justify-center gap-15 flex-wrap px-4">
            @foreach ($eskul as $eskul)
                <div class="relative w-96 my-10 md:w-1/4">
                    <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl"></span>
                    <div
                        class="relative bg-blue-100 w-full shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800 ">
                        <div class="h-56 w-full overflow-hidden">
                            <img src="{{ asset('storage/' . $eskul->foto) }}" alt="{{ $eskul->nama_eskul }}"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="card-body p-4 text-black">
                            <h2 class="card-title text-lg font-semibold mb-2">{{ $eskul->nama_eskul }}</h2>
                            <p class="text-sm mb-1">Jadwal: {{ $eskul->jadwal }}</p>
                            <p class=" text-sm mb-4">{{ Str::limit($eskul->detail, 80) }}</p>

                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>
@endsection