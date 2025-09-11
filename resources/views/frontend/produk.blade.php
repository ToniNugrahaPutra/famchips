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
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sanchez:ital@0;1&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

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
      <nav class="bg-white h-16 md:h-20 fixed top-0 left-0 w-full z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto h-full px-4 sm:px-6">
          {{-- Logo --}}
          <a href="/" class="flex items-center space-x-2 sm:space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo.png') }}" class="h-8 sm:h-10 md:h-12" alt="Famchips Logo" />
          </a>

          {{-- Burger Button --}}
          <button id="mobile-menu-button" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 transition-colors"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            {{-- Hamburger Icon --}}
            <svg id="hamburger-icon" class="w-5 h-5 transition-transform duration-300"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
            {{-- Close Icon --}}
            <svg id="close-icon" class="w-5 h-5 hidden transition-transform duration-300"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
          </button>

          {{-- Desktop Menu --}}
          <div class="hidden md:block md:w-auto">
            <ul class="flex items-center font-medium space-x-4 lg:space-x-8">
              <li><a href="{{ route('home') }}" class="text-text-second font-semibold text-sm lg:text-base hover:text-primary transition-colors">Home</a></li>
              <li><a href="{{ route('products.front') }}" class="text-text-second font-semibold text-sm lg:text-base hover:text-primary transition-colors">Our Product</a></li>
              <li><a href="{{ route('galeri.index') }}" class="text-text-second font-semibold text-sm lg:text-base hover:text-primary transition-colors">Product Gallery</a></li>
              <li><a href="{{ route('artikel.index') }}" class="text-text-second font-semibold text-sm lg:text-base hover:text-primary transition-colors">Blog</a></li>
              <li>
                <a href="https://wa.me/+6281333500579" target="_blank"
                   class="flex items-center h-10 px-4 text-white bg-primary hover:bg-white hover:text-primary border hover:border-primary rounded-full text-sm lg:text-base transition-colors">
                  Order Now
                </a>
              </li>
            </ul>
          </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu"
             class="absolute top-full left-0 w-full bg-white shadow-lg border-t border-gray-200 md:hidden transform -translate-y-2 opacity-0 invisible transition-all duration-300 ease-in-out z-50">
          <ul class="flex flex-col font-medium py-4">
            <li><a href="{{ route('home') }}" class="block py-3 px-6 font-semibold text-text-second hover:text-primary hover:bg-gray-50">Home</a></li>
            <li><a href="{{ route('products.front') }}" class="block py-3 px-6 font-semibold text-text-second hover:text-primary hover:bg-gray-50">Our Product</a></li>
            <li><a href="{{ route('galeri.index') }}" class="block py-3 px-6 font-semibold text-text-second hover:text-primary hover:bg-gray-50">Product Gallery</a></li>
            <li><a href="{{ route('artikel.index') }}" class="block py-3 px-6 font-semibold text-text-second hover:text-primary hover:bg-gray-50">Blog</a></li>
            <li class="px-6 pt-2 pb-1">
              <a href="https://wa.me/+6281333500579" target="_blank"
                 class="flex items-center justify-center h-10 px-4 text-white bg-primary hover:bg-primary/90 rounded-full text-sm w-full">
                Order Now
              </a>
            </li>
          </ul>
        </div>
      </nav>

      {{-- Product Section --}}
      <section class="bg-white w-full my-12 sm:my-16 md:my-24">
        <div class="max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
          
          {{-- Heading --}}
          <div class="text-center mb-8 sm:mb-10 md:mb-12 mt-12 sm:mt-16 md:mt-24">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-primary mb-4 sm:mb-5">Our Product</h2>
            <p class="text-text-second text-sm sm:text-base md:text-lg xl:text-xl font-light mx-auto leading-relaxed max-w-3xl">
              Our Products with the Famchips brand are suitable for your family's snack choice.
            </p>
            {{-- Search Form --}}
            <form action="{{ route('products.front') }}" method="GET" class="max-w-md mx-auto pt-4">
              <label for="search" class="sr-only">Search</label>
              <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                  <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                  </svg>
                </div>
                <input type="search" id="search" name="search" value="{{ request('search') }}"
                       class="block w-full py-3 px-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary focus:border-primary"
                       placeholder="Cari produk..." />
              </div>
            </form>
          </div>

          {{-- Product Grid --}}
        <div id="product-grid" 
        class="product-list grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6 md:gap-8">

        @forelse($products as $product)
            <div class="group relative">
            <div class="relative">
                {{-- Gambar Produk --}}
                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                @if($product->image)
                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}"
                        class="w-full h-full object-cover object-center">
                @else
                    <div class="w-full h-full flex items-center justify-center bg-gray-100">
                    <span class="text-gray-400 text-sm">No Image</span>
                    </div>
                @endif
                </div>

                {{-- Nama & Deskripsi --}}
                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                {{ $product->name }}
                </h2>
                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                {!! Str::limit(strip_tags($product->description), 80) !!}
                </p>

                {{-- Tombol Order Default --}}
                <div class="flex justify-center items-center mt-3 w-full">
                <a href="https://wa.me/+6285184635509" target="_blank"
                    class="flex items-center px-3 py-2 sm:px-4 text-[#a4ce3e] bg-white hover:bg-[#a4ce3e] hover:text-white border-2 border-[#a4ce3e] font-medium rounded-full text-sm transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                    Order Now
                </a>
                </div>
            </div>

            {{-- Overlay Hover Detail --}}
            <div class="absolute rounded inset-0 bg-black/20 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                @if($product->ingredients)
                <div class="mb-4">
                    <h3 class="font-semibold text-base">Ingredients</h3>
                    <p class="text-sm text-gray-200">{{ $product->ingredients }}</p>
                </div>
                @endif

                @if($product->expired_date)
                <div class="mb-4">
                    <h3 class="font-semibold text-base">Expire Date</h3>
                    <p class="text-sm text-gray-200">{{ $product->expired_date }}</p>
                </div>
                @endif

                <a href="https://wa.me/+6285184635509" target="_blank"
                class="flex items-center px-4 py-2 text-[#a4ce3e] bg-white hover:bg-[#a4ce3e] hover:text-white border-2 border-[#a4ce3e] font-medium rounded-full text-sm transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
                Order Now
                </a>
            </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
            <p class="text-gray-500">Belum ada produk</p>
            </div>
        @endforelse

        </div>

        </div>

          {{-- Pagination --}}
          <div class="mt-6">
            {{ $products->links() }}
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
