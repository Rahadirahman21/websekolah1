@extends('layout.layout')

@section('content')
<div class="flex items-center justify-center py-10">
            <div class="relative inline-block">
                <span class="absolute top-2 left-2 w-full h-full bg-black  shadow-2xl "></span>
                <h1
                    class="relative text-center font-bold text-2xl bg-blue-100 w-130 py-5  
  transform transition duration-300 hover:scale-105 text-blue-500 border-2 border-gray-800">
                    Kegiatan SMKN 4 Tasikmalaya
                </h1>
            </div>
        </div>
        <div class="w-400  px-10 ms-40 ">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 mb-5 h-full">
                @foreach ($galeri as $img)
                <div>
                    <img class="object-cover object-center w-full h-100 max-w-full rounded-lg"
                    src="{{ asset('storage/' . $img->foto) }}"
                    alt="gallery-photo" />
                    <div class="block mt-2 font-sans text-sm antialiased font-normal leading-normal text-center text-inherit">
        Kegiatan Sekolah
        
      </div>
                </div>
                @endforeach
                
            </div>
        </div>
@endsection