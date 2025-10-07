 @extends('layout.layout')

@section('content') 
<div class="relative py-12 text-white overflow-hidden ">
    <div class="flex items-center justify-center my-5">
        <div class="relative inline-block">
            <span class="absolute top-2 left-3 w-full h-full bg-black  shadow-2xl border-2 border-gray-800"></span>
            <h1 class="relative text-center font-bold text-2xl bg-blue-100 w-130 py-5 transform transition duration-300 hover:scale-105 text-blue-500 border-2 border-gray-800">
                Sarana dan Prasarana SMKN 4 Tasikmalaya 
            </h1>
        </div>
    </div>
     @foreach ($sarpras as $jenis => $listSarpras) 
            <div class="bg-black">
                 <h2 class="text-xl font-semibold py-5 text-blue-100 ms-10">{{ $jenis }}</h2> 
            </div>
            <div class="flex justify-center gap-10 my-10 flex-wrap">
                 @foreach ($listSarpras as $sarpras) 
                    <div class="relative w-96 my-6">
                        <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl"></span>
                        <div
                            class="relative bg-blue-100 w-full shadow-sm transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800 ">
                            <div class="h-56 w-full overflow-hidden">
                                 <img src="{{ asset('storage/' . $sarpras->foto) }}" alt="{{ $sarpras->nama_tempat }}" 
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="card-body text-black">
                                <h2 class="card-title font-drak">{{ $sarpras->nama_tempat }}</h2> 
                            </div>
                        </div>
                    </div>
                 @endforeach 
            </div>
        @endforeach -
</div>
 @endsection 