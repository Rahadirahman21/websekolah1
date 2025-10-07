@extends('layout.layout')

@section('content')

<div class=" bg-cover bg-no-repeat h-200" style="background-image: url({{ asset('storage/bg/bg1.jpg') }});"></div>

<div class="container mx-auto px-4 py-10">
    <div class="relative">
        <span class="absolute top-4 left-4 w-full h-full bg-black  shadow-2xl border-2 border-gray-800"></span>
        <div class="border-2 border-gray-800 relative bg-blue-100 shadow-lg  p-6 md:p-10 flex flex-col md:flex-row gap-6 items-center transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            @foreach ($setting as $s)
            <div class="md:w-1/2 flex justify-center">
                <img src="{{ asset('storage/'. $s->foto) }}" alt="" class="rounded-lg w-full max-w-sm object-cover">
            </div>
            <div class="md:w-1/2">
                <h3 class="text-blue-500 font-semibold text-lg mb-2">Sambutan Kepala Sekolah</h3>
                <h2 class="text-gray-800 font-bold text-2xl md:text-3xl mb-4">{{ $s->nama_kepsek }}</h2>
                <p>{{ $s->sambutan }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="relative py-12 text-white overflow-hidden ">
    <div class="flex items-center justify-center my-5">
        <div class="relative inline-block">
            <span class="absolute top-2 left-3 w-full h-full bg-black  shadow-2xl border-2 border-gray-800"></span>
            <h1 class="relative text-center font-bold text-2xl bg-blue-100 w-130 py-5 transform transition duration-300 hover:scale-105 text-blue-500 border-2 border-gray-800">
                Statistik SMKN 4 Tasikmalaya 
            </h1>
        </div>
    </div>
    <div class="flex justify-center gap-15 my-20 flex-wrap text-black">
            <div class="relative w-[300px] my-10">
                <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl"></span>
                <div
                    class="relative bg-blue-100 w-full transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800">
                    <div class="card-body items-center">
                        <h2 class="card-title">Guru</h2>
                        <h1 class="text-4xl font-bold counter" data-count="{{ $jml_guru }}"></h1>
                    </div>
                </div>
            </div>
            <div class="relative w-[300px] my-10">
                <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl"></span>
                <div
                    class="relative bg-blue-100 w-full transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800">
                    <div class="card-body items-center">
                        @foreach ($siswa as $siswa)
                            <h2 class="card-title">Siswa</h2>
                            <h1 class="text-4xl font-bold counter" data-count="{{ $siswa->jml_siswa }}"></h1>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="relative w-[300px] my-10">
                <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl"></span>
                <div
                    class="relative bg-blue-100 w-full transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800">
                    <div class="card-body items-center">
                        <h2 class="card-title">Konsentrasi Keahlian</h2>
                        <h1 class="text-4xl font-bold counter" data-count="{{ $jml_jurusan }}"></h1>
                    </div>
                </div>
            </div>
            <div class="relative w-[300px] my-10">
                <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl"></span>
                <div
                    class="relative bg-blue-100 w-full transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800">
                    <div class="card-body items-center">
                        <h2 class="card-title">Ekstrakulikuler</h2>
                        <h1 class="text-4xl font-bold counter" data-count="{{ $jml_eskul }}"></h1>
                    </div>
                </div>
            </div>
            <div class="relative w-[300px] my-10">
                <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl"></span>
                <div
                    class="relative bg-blue-100 w-full transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800">
                    <div class="card-body items-center">
                        <h2 class="card-title text-center">Rombongan Belajar</h2>
                        <h1 class="text-4xl font-bold counter" data-count="{{ $jml_rombel }}"></h1>
                    </div>
                </div>
            </div>
</div>
<div class="relative py-12 text-white overflow-hidden ">
    <div class="flex items-center justify-center my-5">
        <div class="relative inline-block">
            <span class="absolute top-2 left-3 w-full h-full bg-black  shadow-2xl border-2 border-gray-800"></span>
            <h1 class="relative text-center font-bold text-2xl bg-blue-100 w-130 py-5 transform transition duration-300 hover:scale-105 text-blue-500 border-2 border-gray-800">
                Berita SMKN 4 Tasikmalaya 
            </h1>
        </div>
    </div>
    <div class="flex justify-center gap-15 flex-wrap px-4 ">
            @foreach ($berita as $berita)
                <div class="relative w-[400px] my-10">

                    <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl"></span>
                    <div
                        class="relative bg-blue-100 w-full h-[540px] shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800 overflow-hidden">
                        <figure>
                            <img src="{{ asset('storage/' . $berita->foto) }}" alt="" 
                                class="w-full h-full object-cover">
                        </figure>
                        <div class="card-body text-black">
                            <p class="text-sm">{{ $berita->tanggal }}</p>
                            <h2 class="card-title">{{ $berita->nama_berita }}</h2>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>
<script>
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll(".counter");

            const animateCounter = (el) => {
                const target = +el.getAttribute("data-count");
                const duration = 2000; 
                const start = 0;
                const increment = target / (duration / 20);
                let current = start;

                const updateCounter = () => {
                    current += increment;
                    if (current >= target) {
                        el.textContent = target.toLocaleString(); 
                    } else {
                        el.textContent = Math.floor(current).toLocaleString();
                        requestAnimationFrame(updateCounter);
                    }
                };

                updateCounter();
            };

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target); 
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(counter => observer.observe(counter));
        });
    </script>
@endsection