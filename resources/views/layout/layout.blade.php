<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @foreach ($setting as $s)
        <link rel="shortcut icon" href=" {{ asset('storage/' . $s->logo) }} " type="image/x-icon">
        <title>{{ $s->nama_sekolah }}</title>
    @endforeach
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <header
        class="border-b border-gray-200/70 dark:border-white/10 sticky top-0 backdrop-blur supports-[backdrop-filter]:bg-white/70 supports-[backdrop-filter]:dark:bg-gray-950/60 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            @foreach ($setting as $s)
                <img src="{{ asset('storage/' . $s->logo) }}" alt="Logo" class="rounded-full" width="50px">
                <a href="" class="font-bold tracking-tight text-xl">{{ $s->nama_sekolah }}</a>
            @endforeach
            <nav class="hidden md:flex items-center gap-6 text-sm">
                <a href="{{ route('beranda') }}"
                    class="link-underline hover:text-indigo-600 {{ request()->routeIs('beranda') ? 'text-indigo-600 font-bold' : '' }}">
                    Beranda
                </a>
                <a href="{{ route('profil') }}"
                    class="link-underline hover:text-indigo-600 {{ request()->routeIs('profil') ? 'text-indigo-600 font-bold' : '' }}">Profil</a>
                <a href="{{ route('jurusan') }}"
                    class="link-underline hover:text-indigo-600 {{ request()->routeIs('jurusan') ? 'text-indigo-600 font-bold' : '' }}">Kompetensi
                    Keahlian</a>
                <a href="{{ route('sarpras') }}"
                    class="link-underline hover:text-indigo-600 {{ request()->routeIs('sarpras') ? 'text-indigo-600 font-bold' : '' }}">Sarana
                    Prasarana</a>
                <a href="{{ route('guru') }}"
                    class="link-underline hover:text-indigo-600 {{ request()->routeIs('guru') ? 'text-indigo-600 font-bold' : '' }}">Pegawai</a>
                <a href="{{ route('eskul') }}"
                    class="link-underline hover:text-indigo-600 {{ request()->routeIs('eskul') ? 'text-indigo-600 font-bold' : '' }}">Ekstrakulikuler</a>
                <a href="{{ route('rombel') }}"
                    class="link-underline hover:text-indigo-600 {{ request()->routeIs('rombel') ? 'text-indigo-600 font-bold' : '' }}">Rombongan
                    Belajar</a>
                <a href="{{ route('galeri') }}"
                    class="link-underline hover:text-indigo-600 {{ request()->routeIs('galeri') ? 'text-indigo-600 font-bold' : '' }}">
                    Galeri</a>
                {{-- <a href="{{ url('/admin/login') }}"
                        class="px-4 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 transition">
                        Login
                    </a> --}}
            </nav>
        </div>
    </header>

    <div>
        @yield('content')
    </div>
    <section>
        <footer class="footer sm:footer-horizontal bg-black text-white text-base-content p-10">
            <aside>
                @foreach ($setting as $s)
                    <img src="{{ asset('storage/' . $s->logo) }}" alt="" width="50px" class=" rounded-full">
                    <p>
                        {{ $s->nama_sekolah }}
                        <br />
                @endforeach

                </p>
            </aside>
            <nav>
                <h6 class="footer-title">Alamat</h6>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2131636317426!2d108.25189907404213!3d-7.32993997208793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f59eeb6bda36f%3A0xa9e724a275da6c2d!2sSMK%20Negeri%204%20Tasikmalaya!5e0!3m2!1sid!2sid!4v1734660682140!5m2!1sid!2sid"
                    frameborder="0"></iframe>

            </nav>
            <nav>

                <h6 class="footer-title">Hubungi kami</h6>
                <a class=" flex link link-hover" href="tel:++62265312059"><svg xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                    <h6 class="ms-1"> +62265312059</h6>
                </a>
                <a class="flex link link-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                    <h6 class="ms-1">info@smkn4-tsm.sch.id</h6>

                </a>

            </nav>
            <nav>

                <h6 class="footer-title">Link Eksternal</h6>
                <a class="link link-hover" href="https://www.kemdikbud.go.id/">
                    Kemdikbud
                </a>
                <a class="link link-hover" href="https://dapo.dikdasmen.kemdikbud.go.id/">
                    Dapodikdasmen
                </a>
                <a class="link link-hover" href="https://smk.kemendikdasmen.go.id/">
                    PSMK
                </a>
                <a class="link link-hover" href="https://disdik.jabarprov.go.id/">
                    Disdik Jabar
                </a>
            </nav>
        </footer>
    </section>
    <footer>
        <footer class="footer sm:footer-horizontal bg-neutral text-neutral-content items-center p-4">
            <aside class="grid-flow-col items-center ">
                <p>Copyright © 2025 - All right reserved</p>
            </aside>
            <nav class="grid-flow-col gap-4 md:place-self-center md:justify-self-end">
                <a href="https://x.com/4smkn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M18.244 2H21.5l-7.42 8.49L22 22h-6.77l-5.3-6.9L4.7 22H1.5l7.93-9.07L2 2h6.91l4.78 6.3L18.244 2Zm-1.18 18h1.95L8.01 4h-2.1l11.154 16Z" />
                    </svg>

                </a>
                <a class="https://www.instagram.com/smkn4tasikmalaya">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2Zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5a4.25 4.25 0 0 0 4.25-4.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5Zm4.25 4a5.25 5.25 0 1 1 0 10.5 5.25 5.25 0 0 1 0-10.5Zm0 1.5a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5Zm5.75-.75a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" />
                    </svg>

                </a>
                <a href="https://www.facebook.com/4smkn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.2l-.4 3h-1.8v7A10 10 0 0 0 22 12Z" />
                    </svg>
                </a>
            </nav>
        </footer>
    </footer>
</body>

</html>
