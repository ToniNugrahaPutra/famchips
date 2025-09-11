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
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sanchez:ital@0;1&family=Space+Grotesk:wght@300..700&display=swap"
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

    {{-- Navbar (TIDAK DIUBAH) --}}
<nav class="bg-white h-16 md:h-20 fixed top-0 left-0 w-full z-50"> <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto h-full px-4 sm:px-6"> {{-- Logo --}} <a href="/" class="flex items-center space-x-2 sm:space-x-3 rtl:space-x-reverse"> <img src="{{ asset('images/logo.png') }}" class="h-8 sm:h-10 md:h-12" alt="Famchips Logo" /> </a> {{-- Burger Button --}} <button id="mobile-menu-button" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 transition-colors" aria-controls="mobile-menu" aria-expanded="false"> <span class="sr-only">Open main menu</span> {{-- Hamburger Icon --}} <svg id="hamburger-icon" class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14"> <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" /> </svg> {{-- Close Icon --}} <svg id="close-icon" class="w-5 h-5 hidden transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"> <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" /> </svg> </button>

{{-- Desktop Menu --}} <div class="hidden md:block md:w-auto"> <ul class="flex items-center font-medium space-x-4 lg:space-x-8"> <li><a href="{{ route('home') }}" class="text-text-second font-semibold text-sm lg:text-base hover:text-primary transition-colors">Home</a></li> <li><a href="{{ route('products.front') }}" class="text-text-second font-semibold text-sm lg:text-base hover:text-primary transition-colors">Our Product</a></li> <li><a href="{{ route('galeri.index') }}" class="text-text-second font-semibold text-sm lg:text-base hover:text-primary transition-colors">Product Gallery</a></li> <li><a href="{{ route('artikel.index') }}" class="text-text-second font-semibold text-sm lg:text-base hover:text-primary transition-colors">Blog</a></li> <li> <a href="https://wa.me/+6281333500579" target="_blank" class="flex items-center h-10 px-4 text-white bg-primary hover:bg-white hover:text-primary border hover:border-primary rounded-full text-sm lg:text-base transition-colors"> Order Now </a> </li> </ul> </div> </div> {{-- Mobile Menu --}} <div id="mobile-menu" class="absolute top-full left-0 w-full bg-white shadow-lg border-t border-gray-200 md:hidden transform -translate-y-2 opacity-0 invisible transition-all duration-300 ease-in-out z-50"> <ul class="flex flex-col font-medium py-4"> <li><a href="{{ route('home') }}" class="block py-3 px-6 font-semibold text-text-second hover:text-primary hover:bg-gray-50">Home</a></li> <li><a href="{{ route('products.front') }}" class="block py-3 px-6 font-semibold text-text-second hover:text-primary hover:bg-gray-50">Our Product</a></li> <li><a href="{{ route('galeri.index') }}" class="block py-3 px-6 font-semibold text-text-second hover:text-primary hover:bg-gray-50">Product Gallery</a></li> <li><a href="{{ route('artikel.index') }}" class="block py-3 px-6 font-semibold text-text-second hover:text-primary hover:bg-gray-50">Blog</a></li> <li class="px-6 pt-2 pb-1"> <a href="https://wa.me/+6281333500579" target="_blank" class="flex items-center justify-center h-10 px-4 text-white bg-primary hover:bg-primary/90 rounded-full text-sm w-full"> Order Now </a> </li> </ul> </div> </nav>

    {{-- Main Content --}}
    <section class="max-w-screen-md mx-auto px-4 sm:px-6 pt-28 pb-20">
        <article>
            {{-- Judul --}}
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-center text-primary mb-4">
                {{ $article->title }}
            </h1>

            {{-- Tanggal --}}
            <div class="flex items-center justify-center text-text-third mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                          d="M12 6v6h4.5m4.5 0a9 
                          9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <time class="text-sm">{{ $article->created_at->format('d F Y') }}</time>
            </div>

            {{-- Gambar --}}
            @if($article->image)
                <div class="w-full aspect-video mb-8">
                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                         class="w-full h-full object-cover rounded-lg" />
                </div>
            @endif

            {{-- Konten --}}
            <div class="text-text-second leading-relaxed text-justify prose max-w-none">
                {!! $article->description ?? $article->content !!}
            </div>

            {{-- Bagikan --}}
            <div class="mt-10 border-t pt-6">
                <p class="text-sm text-gray-500 mb-3">Bagikan artikel ini:</p>
                <div class="flex space-x-4">
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="hover:opacity-80" aria-label="Share on Facebook">
        <img src="{{ asset('images/facebook-logo.png') }}" alt="Facebook" class="w-6 h-6">
    </a>
    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="hover:opacity-80" aria-label="Share on Twitter">
        <img src="{{ asset('images/twitter-logo.png') }}" alt="Twitter" class="w-6 h-6">
    </a>
    <a href="https://wa.me/?text={{ urlencode(request()->fullUrl()) }}" target="_blank" class="hover:opacity-80" aria-label="Share on WhatsApp">
        <img src="{{ asset('images/whatsapp-logo.png') }}" alt="WhatsApp" class="w-6 h-6">
    </a>
</div>

            </div>
        </article>
    </section>

    {{-- Others Blog --}}
    <section class="max-w-screen-xl mx-auto px-4 sm:px-6 mt-16">
        <h2 class="text-2xl font-semibold text-primary text-center mb-8">Other Blogs</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $article)
                <article class="border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                    <a href="{{ route('artikel.show', $article->slug) }}">
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ $article->image ? asset('storage/'.$article->image) : asset('images/default.jpg') }}"
                                 alt="{{ $article->title }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                {{ $article->created_at->format('d F Y') }}
                            </div>
                            <h3 class="font-semibold text-text-second line-clamp-2">
                                {{ $article->title }}
                            </h3>
                            <p class="mt-2 text-sm text-text-third line-clamp-3">
                                {{ \Illuminate\Support\Str::limit(strip_tags($article->description ?? $article->content), 100) }}
                            </p>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-white border-t border-gray-400 mt-16"> <div class="max-w-screen-xl mx-auto px-4 sm:px-6 py-5 md:flex md:items-center md:justify-between"> <div class="flex justify-center gap-x-4 sm:gap-x-6 md:order-2"> {{-- Instagram --}} <a target="_blank" href="https://www.instagram.com/famchips_arjuna999?igsh=OGI3amxwcjZtMXBl" class="text-gray-600 hover:text-gray-800"> <span class="sr-only">Instagram</span> <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.9 4.9 0 0 1 1.772 1.153 4.9 4.9 0 0 1 1.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.9 4.9 0 0 1-1.153 1.772 4.9 4.9 0 0 1-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.9 4.9 0 0 1-1.772-1.153 4.9 4.9 0 0 1-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.9 4.9 0 0 1 1.153-1.772A4.9 4.9 0 0 1 5.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.1 3.1 0 0 0-.748-1.15 3.1 3.1 0 0 0-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 1 1 0 10.27 5.135 5.135 0 0 1 0-10.27zm0 1.802a3.333 3.333 0 1 0 0 6.666 3.333 3.333 0 0 0 0-6.666zm5.338-3.205a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4z"/> </svg> </a> {{-- TikTok --}} <a target="_blank" href="https://www.tiktok.com/@arjuna_triplenine?_t=ZS-8xT0BIZh5lv&_r=1" class="text-gray-600 hover:text-gray-800"> <svg class="w-5 h-5 sm:w-6 sm:h-6" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"> <path d="M38.076 15.854c-2.007-.06-3.826-1.02-5.197-2.307-0.748-.715-1.339-1.577-1.738-2.531-.399-.955-.596-1.982-.58-3.016h-5.589v20.83c0 3.514-2.096 5.589-4.697 5.589-.626.014-1.248-.097-1.83-.327a4.58 4.58 0 0 1-1.56-1.148 4.59 4.59 0 0 1-.644-1.537 4.6 4.6 0 0 1 0-1.823c.243-.577.598-1.1 1.046-1.538.447-.438.978-.782 1.56-1.012.582-.23 1.204-.341 1.83-.327.518.005 1.031.097 1.512.271v-5.823c-1.064-.166-2.15-.184-3.22-.055-1.732.246-3.344.995-4.663 2.163-1.319 1.167-2.288 2.708-2.78 4.431a10.64 10.64 0 0 0-.232 4.853c.27 1.615.954 3.123 1.983 4.377 1.029 1.254 2.368 2.211 3.883 2.772 1.515.562 3.153.706 4.743.42a9.93 9.93 0 0 0 4.411-2.053c1.255-1.04 2.214-2.395 2.774-3.915.56-1.521.698-3.153.401-4.74v-10.55c1.23.954 2.626 1.68 4.114 2.132a12.8 12.8 0 0 0 4.397.439v-5.654c-.35.034-.701.048-1.053.04z"/> </svg> </a> </div> <div class="mt-4 md:mt-0 md:order-1"> <p class="text-center text-xs sm:text-sm leading-5 text-gray-500">&copy; {{ date('Y') }} Famchips. All rights reserved.</p> </div> </div> </footer>
</div>

{{-- JS Mobile Menu --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const button = document.getElementById("mobile-menu-button");
        const menu = document.getElementById("mobile-menu");
        const hamburgerIcon = document.getElementById("hamburger-icon");
        const closeIcon = document.getElementById("close-icon");

        button.addEventListener("click", () => {
            const expanded = button.getAttribute("aria-expanded") === "true" || false;
            button.setAttribute("aria-expanded", !expanded);

            menu.classList.toggle("opacity-0");
            menu.classList.toggle("invisible");
            menu.classList.toggle("translate-y-0");
            menu.classList.toggle("translate-y-2");

            hamburgerIcon.classList.toggle("hidden");
            closeIcon.classList.toggle("hidden");
        });
    });
</script>

</body>
</html>
