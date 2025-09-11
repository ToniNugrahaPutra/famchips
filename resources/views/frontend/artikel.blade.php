<!DOCTYPE html>
<html lang="en">
<head>
    <title>Famchips</title>
    <link rel="icon" href="{{ asset('images/logo2.png') }}" type="image/png" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- Tailwind via CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:wght@300;400;500;600;700;800;900&family=Sanchez:ital@0;1&family=Space+Grotesk:wght@300..700&display=swap"
        rel="stylesheet">

    {{-- Custom Tailwind Theme --}}
    <style type="text/tailwindcss">
        @theme {
            --font-primary: 'Poppins', sans-serif;
            --color-primary: #A4CE3E;
            --color-text-second: #222;
            --color-text-third: #787878;
            --color-bg: #EDF6D4;
        }
    </style>
</head>
<body>
    <div class="font-primary">

        {{-- Navbar --}}
        <nav class="bg-white h-16 md:h-20 fixed top-0 left-0 w-full z-50 shadow">
            <div class="max-w-screen-xl flex items-center justify-between mx-auto h-full px-4 sm:px-6">
                
                {{-- Logo --}}
                <a href="/" class="flex items-center space-x-2 sm:space-x-3">
                    <img src="{{ asset('images/logo.png') }}" class="h-8 sm:h-10 md:h-12" alt="Famchips Logo" />
                </a>

                {{-- Burger Button --}}
                <button id="mobile-menu-button" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 transition-colors"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    {{-- Hamburger Icon --}}
                    <svg id="hamburger-icon" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>

                    {{-- Close Icon --}}
                    <svg id="close-icon" class="w-5 h-5 hidden" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>

                {{-- Desktop Menu --}}
                <div class="hidden md:block md:w-auto">
                    <ul class="flex items-center font-medium space-x-4 lg:space-x-8">
                        <li><a href="{{ route('home') }}" class="text-text-second font-semibold hover:text-primary transition-colors">Home</a></li>
                        <li><a href="{{ route('products.front') }}" class="text-text-second font-semibold hover:text-primary transition-colors">Our Product</a></li>
                        <li><a href="{{ route('galeri.index') }}" class="text-text-second font-semibold hover:text-primary transition-colors">Product Gallery</a></li>
                        <li><a href="{{ route('artikel.index') }}" class="text-text-second font-semibold hover:text-primary transition-colors">Blog</a></li>
                        <li>
                            <a href="https://wa.me/+6281333500579" target="_blank"
                                class="flex items-center h-10 px-4 text-white bg-primary hover:bg-white hover:text-primary border hover:border-primary rounded-full transition-colors">
                                Order Now
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Mobile Menu --}}
            <div id="mobile-menu"
                class="absolute top-full left-0 w-full bg-white shadow-lg border-t border-gray-200 md:hidden transform -translate-y-2 opacity-0 invisible transition-all duration-300 ease-in-out">
                <ul class="flex flex-col font-medium py-4">
                    <li><a href="{{ route('home') }}" class="block py-3 px-6 font-semibold text-text-second hover:text-primary hover:bg-gray-50">Home</a></li>
                    <li><a href="{{ route('products.front') }}" class="block py-3 px-6 font-semibold text-text-second hover:text-primary hover:bg-gray-50">Our Product</a></li>
                    <li><a href="{{ route('galeri.index') }}" class="block py-3 px-6 font-semibold text-text-second hover:text-primary hover:bg-gray-50">Product Gallery</a></li>
                    <li><a href="{{ route('artikel.index') }}" class="block py-3 px-6 font-semibold text-text-second hover:text-primary hover:bg-gray-50">Blog</a></li>
                    <li class="px-6 pt-2 pb-1">
                        <a href="https://wa.me/+6281333500579" target="_blank"
                            class="flex items-center justify-center h-10 px-4 text-white bg-primary hover:bg-primary/90 rounded-full w-full">
                            Order Now
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        {{-- Hero Section --}}
        @if($hero)
            <section class="relative h-screen bg-cover bg-center pt-16 md:pt-20" 
                style="background-image: url('{{ $hero->image ? asset('storage/'.$hero->image) : asset('images/default-hero.jpg') }}');"
                id="heroSection">

                <div class="absolute inset-0 bg-black opacity-50"></div>

                <div class="max-w-screen-xl container mx-auto relative z-10 flex items-end justify-start h-full text-start text-white px-4 pb-10 md:pb-20">
                    <div>
                        {{-- Date --}}
                        <div class="flex flex-row mb-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <p class="font-light text-base pl-2" id="newsDate">
                                {{ $hero->created_at->format('d F Y') }}
                            </p>
                        </div>

                        {{-- Title --}}
                        <a href="{{ route('artikel.show', $hero->slug) }}">
                            <h1 class="text-2xl md:text-3xl max-w-4xl font-semibold mb-4 leading-relaxed hover:underline" id="newsTitle">
                                {{ $hero->title }}
                            </h1>
                        </a>

                        {{-- Excerpt --}}
                        <p class="text-sm font-light md:text-base max-w-2xl mb-6" id="newsExcerpt">
                            {{ \Illuminate\Support\Str::limit(strip_tags($hero->description), 150) }}
                        </p>

                        {{-- Indicator Dots --}}
                        <div class="flex justify-start mt-6">
                            <span class="indicator w-3 h-3 rounded-full bg-lime-400 cursor-pointer transition-all duration-300 mr-2"></span>
                            <span class="indicator w-3 h-3 rounded-full border border-white bg-white/30 cursor-pointer transition-all duration-300 mr-2"></span>
                            <span class="indicator w-3 h-3 rounded-full border border-white bg-white/30 cursor-pointer transition-all duration-300"></span>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        {{-- Heading + Search + Artikel Grid --}}
        <section class="bg-white w-full mb-12 sm:mb-16 md:mb-24">
            <div class="max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
                
                {{-- Heading & Search --}}
                <div class="text-center md:text-left mb-8 sm:mb-10 md:mb-12 mt-12">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-primary mb-4 sm:mb-5">
                        Discover Our Latest News
                    </h2>
                    <p class="text-text-second text-sm sm:text-base md:text-lg xl:text-xl font-light mx-auto leading-relaxed">
                        Discover the achievements that set us apart. From groundbreaking projects to industry accolades.
                    </p>

                    {{-- Search Form --}}
                    <form action="{{ route('artikel.index') }}" method="GET" class="max-w-md mx-auto pt-4">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="search" name="search" value="{{ request('search') }}"
                                class="block w-full py-3 px-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary focus:border-primary"
                                placeholder="Cari artikel..." />
                        </div>
                    </form>
                </div>

                {{-- Artikel Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                    @forelse($articles as $article)
                        <article class="group border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                            <a href="{{ route('artikel.show', $article->slug) }}" class="block">
                                @if($article->image)
                                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                                        class="w-full h-48 object-cover" />
                                @else
                                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-400">
                                        No Image
                                    </div>
                                @endif
                                <div class="p-4">
                                    <time class="text-sm text-text-third">{{ $article->created_at->format('d M Y') }}</time>
                                    <h2 class="mt-2 text-xl font-semibold text-text-second group-hover:text-primary transition-colors">
                                        {{ \Illuminate\Support\Str::limit($article->title, 60) }}
                                    </h2>
                                    <p class="mt-2 text-text-third text-sm line-clamp-3">
                                        {!! \Illuminate\Support\Str::limit(strip_tags($article->description ?? $article->content), 120) !!}
                                    </p>
                                </div>
                            </a>
                        </article>
                    @empty
                        <p class="col-span-full text-center text-gray-500">Belum ada artikel.</p>
                    @endforelse
                </div>

                {{-- Pagination --}}
                <div class="mt-12">
                    {{ $articles->links() }}
                </div>
            </div>
        </section>
    </div>

    {{-- Script Mobile Menu --}}
    <script>
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        const openIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        btn.addEventListener('click', () => {
            menu.classList.toggle('opacity-0');
            menu.classList.toggle('invisible');
            menu.classList.toggle('-translate-y-2');
            openIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>
</body>
</html>
