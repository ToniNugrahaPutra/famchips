<!DOCTYPE html>
<html>
  <head>
    <title>Famchips</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sanchez:ital@0;1&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
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
 <body class="scroll-smooth">
    <div class="font-primary">
        <!-- navbar -->
        <nav class="bg-white h-16 md:h-20 fixed top-0 left-0 w-full z-50">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto h-full px-4 sm:px-6">
                <a href="/" class="flex items-center space-x-2 sm:space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('images/logo.png') }}" class="h-8 sm:h-10 md:h-12" alt="Famchips Logo">
                </a>

                <!-- Burger Button -->
                <button id="mobile-menu-button" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 transition-colors"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Hamburger Icon -->
                    <svg id="hamburger-icon" class="w-5 h-5 transition-transform duration-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                    <!-- Close Icon -->
                    <svg id="close-icon" class="w-5 h-5 hidden transition-transform duration-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>

                <!-- Desktop Menu -->
                <div class="hidden md:block md:w-auto">
                    <ul class="flex items-center font-medium space-x-4 lg:space-x-8">
                        <li>
                            <a href="{{ route('home') }}"
                                class="text-text-second font-semibold text-sm lg:text-base hover:text-primary transition-colors">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.front') }}"
                            class="text-text-second font-semibold text-sm lg:text-base hover:text-primary transition-colors">
                            Our Product
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('galeri.index') }}"
                            class="text-text-second font-semibold text-sm lg:text-base hover:text-primary transition-colors">
                            Product Gallery
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('artikel.index') }}"
                                class="text-text-second font-semibold text-sm lg:text-base hover:text-primary transition-colors">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/+6281333500579" target="_blank"
                                class="flex items-center h-10 px-4 text-white bg-primary hover:bg-white hover:text-primary border hover:border-primary focus:outline-none font-medium rounded-full text-sm lg:text-base transition-colors">
                                Order Now
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Mobile Menu Dropdown -->
            <div id="mobile-menu"
                class="absolute top-full left-0 w-full bg-white shadow-lg border-t border-gray-200 md:hidden transform -translate-y-2 opacity-0 invisible transition-all duration-300 ease-in-out z-50">
                <ul class="flex flex-col font-medium py-4">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-3 px-6 text-text-second font-semibold hover:text-primary hover:bg-gray-50 transition-colors">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products.front') }}"
                            class="block py-3 px-6 text-text-second font-semibold hover:text-primary hover:bg-gray-50 transition-colors">
                            Our Product
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('galeri.index') }}"
                            class="block py-3 px-6 text-text-second font-semibold hover:text-primary hover:bg-gray-50 transition-colors">
                            Product Gallery
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('artikel.index') }}"
                            class="block py-3 px-6 text-text-second font-semibold hover:text-primary hover:bg-gray-50 transition-colors">
                            Blog
                        </a>
                    </li>
                    <li class="px-6 pt-2 pb-1">
                        <a href="https://wa.me/+6281333500579" target="_blank"
                            class="flex items-center justify-center h-10 px-4 text-white bg-primary hover:bg-primary/90 focus:outline-none font-medium rounded-full text-sm transition-colors w-full">
                            Order Now
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


        <!-- hero -->
        <section class="relative h-screen bg-cover bg-center mb-12 sm:mb-16 md:mb-24 pt-16 md:pt-20" style="background-image: url('images/hero.JPG');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="max-w-screen-xl container mx-auto relative z-10 flex items-center justify-start h-full text-start text-white px-4">
                <div>
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Nikmati Lezatnya Camilan <br> Sehat dan Bergizi</h1>
                    <p class="text-lg font-light md:text-xl mb-6">Selamat datang di FamChips – Keripik buah dan sayuran yang <br> 100% alami, renyah, dan bergizi. Pilihan tepat untuk <br> camilan sehat anda.</p>
                    <a href="javascript:void(0)" class="inline-block px-6 py-3 bg-primary text-white font-medium rounded-full hover:bg-green-600 transition-colors">
                        Order Now
                    </a>
                </div>
            </div>
        </section>

        
        <!-- about -->
        <section class="bg-white w-full mb-12 sm:mb-16 md:mb-24">
            <div class="max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
                <!-- Header -->
                <div class="text-center mb-8 sm:mb-10 md:mb-12">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-primary mb-4 sm:mb-5">About Us
                    </h2>
                    <p
                        class="text-text-second text-sm sm:text-base md:text-lg xl:text-xl font-light mx-auto leading-relaxed">
                        FamChips adalah UMKM dari Kota Batu Jawa Timur yang menghadirkan keripik sehat dari buah dan
                        sayuran pilihan. Setiap produk FamChips dibuat dari bahan 100% alami, diolah secara higienis,
                        dan dikemas dengan
                        penuh cinta. Kami terus tumbuh dan berinovasi demi menghadirkan camilan yang bukan hanya enak,
                        tapi juga sehat dan
                        penuh manfaat.
                    </p>
                </div>

                <!-- Video Section -->
                <div class="relative w-full">
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                        <iframe
                            src="https://www.youtube.com/embed/_ZjJLD1dstw?modestbranding=1&rel=0&controls=0&showinfo=0&iv_load_policy=3&disablekb=1&fs=0"
                            title="Famchips Company Profile" frameborder="0" allow="autoplay; encrypted-media"
                            allowfullscreen class="aspect-video h-auto w-full object-cover rounded-2xl">
                        </iframe>
                    </div>
                </div>

            </div>
        </section>


        <!-- visi -->
        <section class="bg-white w-full mb-12 sm:mb-16 md:mb-24">
            <div class="max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
                <!-- Header -->
                <div class="text-center mb-8 sm:mb-10 md:mb-12">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-primary mb-4 sm:mb-5">Vision and Mission
                    </h2>
                    <p
                        class="text-text-second text-sm sm:text-base md:text-lg xl:text-xl font-light mx-auto leading-relaxed">
                        FamChips adalah UMKM dari Kota Batu Jawa Timur yang menghadirkan keripik sehat dari buah dan sayuran pilihan. Setiap produk FamChips dibuat dari bahan 100% alami, diolah secara higienis, dan dikemas dengan penuh cinta.
                    </p>
                </div>

                <!-- Section -->
                <div class="relative w-full">
                    <div class="flex flex-wrap overflow-hidden rounded-2xl">
                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
                            <img alt="feature" class="object-cover object-center aspect-square w-full" src="https://dummyimage.com/460x500">
                        </div>
                        
                        <div class="flex flex-col justify-center flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                            <div class="flex flex-col mb-10 lg:items-start items-center">
                                <div class="w-[73px] h-[73px] inline-flex items-center justify-center rounded-full bg-primary text-white mb-5">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7" viewBox="0 0 24 24">
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow">
                                    <h2 class="text-primary text-3xl title-font font-semibold mb-3">
                                        Vision
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        FamChips adalah UMKM dari Kota Batu Jawa Timur yang menghadirkan keripik sehat dari buah dan sayuran pilihan. Setiap produk FamChips dibuat dari bahan 100%.
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col mb-10 lg:items-start items-center">
                                <div class="w-[73px] h-[73px] inline-flex items-center justify-center rounded-full bg-primary text-white mb-5">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7" viewBox="0 0 24 24">
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow">
                                    <h2 class="text-primary text-3xl title-font font-semibold mb-3">
                                        Mission
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        FamChips adalah UMKM dari Kota Batu Jawa Timur yang menghadirkan keripik sehat dari buah dan sayuran pilihan. Setiap produk FamChips dibuat dari bahan 100%.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- advantages -->
        <section class="font-primary bg-white w-full my-12 sm:my-16 md:my-24">
            <div class="max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
                <!-- Header -->
                <div class="text-center mb-8 sm:mb-10 md:mb-12">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-primary mb-4 sm:mb-5">Product Advantages
                    </h2>
                    <p
                        class="text-text-second text-sm sm:text-base md:text-lg xl:text-xl font-light mx-auto leading-relaxed">
                        the unique characteristics or benefits of a product that make it more attractive to customers than competing products.
                    </p>
                </div>

                <!-- Section -->
                <div class="relative w-full">
                    <div class="flex flex-wrap text-center">
                        <div class="sm:w-1/2 mb-10 px-4">
                            <div class="rounded-lg overflow-hidden flex items-center justify-center h-36">
                                <img alt="content" class="object-cover flex items-center justify-center object-center h-auto w-56" src="images/famchips.png">
                            </div>
                            <p class="leading-relaxed text-base md:px-20">
                                FamChips adalah UMKM dari Kota Batu Jawa Timur yang menghadirkan keripik sehat dari buah dan sayuran pilihan. Setiap produk FamChips dibuat dari bahan 100% alami, diolah secara higienis, dan dikemas dengan penuh cinta.
                            </p>
                        </div>
                        <div class="sm:w-1/2 mb-10 px-4">
                            <div class="rounded-lg overflow-hidden flex items-center justify-center h-36">
                                <img alt="content" class="object-cover flex items-center justify-center object-center h-auto w-56" src="images/MOMCHIPZ.png">
                            </div>
                            <p class="leading-relaxed text-base md:px-20">
                                FamChips adalah UMKM dari Kota Batu Jawa Timur yang menghadirkan keripik sehat dari buah dan sayuran pilihan. Setiap produk FamChips dibuat dari bahan 100% alami, diolah secara higienis, dan dikemas dengan penuh cinta.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section Galeri -->
        <section
            id="gallery"
            class="font-primary relative py-12 mb-24 bg-cover bg-center"
            style="background-image: url('/images/bg.jpg');">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/60 z-0"></div>


            <!-- Konten galeri -->
            <div class="relative z-10 max-w-screen-xl mx-auto px-4 text-center">
                <!-- Judul -->
                <div class="text-center mb-8 sm:mb-10 md:mb-12">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-primary mb-4 sm:mb-5">Product
                        Gallery
                    </h2>
                </div>

                <!-- Slider Container -->
                <div class="overflow-hidden">
                    <div id="sliderTrack" class="flex transition-transform duration-500 ease-in-out">
                        <!-- Slide 1 -->
                        <div class="flex-shrink-0 w-full flex justify-center gap-6">
                            <div class="w-28 sm:w-36 md:w-44">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/AppleFreeze.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                            <div class="w-28 sm:w-36 md:w-44">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/KeripikApel.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                            <div class="w-28 sm:w-36 md:w-44">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/KeripikBombay.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                            <div class="w-28 sm:w-36 md:w-44">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/KeripikBuahNaga.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                            <div class="w-28 sm:w-36 md:w-44 md:block hidden">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/KeripikBuncis.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="flex-shrink-0 w-full flex justify-center gap-6">
                            <div class="w-28 sm:w-36 md:w-44">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/KeripikJamur.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                            <div class="w-28 sm:w-36 md:w-44">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/KeripikCabe.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                            <div class="w-28 sm:w-36 md:w-44">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/KeripikKelengkeng.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                            <div class="w-28 sm:w-36 md:w-44">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/KeripikMangga.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                            <div class="w-28 sm:w-36 md:w-44 md:block hidden">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/KeripikUbi.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="flex-shrink-0 w-full flex justify-center gap-6">
                            <div class="w-28 sm:w-36 md:w-44">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/KeripikPisang.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                            <div class="w-28 sm:w-36 md:w-44">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/KeripikPisangFreeze.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                            <div class="w-28 sm:w-36 md:w-44">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/KeripikPisangOven.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                            <div class="w-28 sm:w-36 md:w-44">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/KeripikTempe.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                            <div class="w-28 sm:w-36 md:w-44 md:block hidden">
                                <div class="flex items-center justify-center overflow-hidden-64">
                                    <img src="galeri_compressed/KeripikTempehCrisp.png" class="max-h-60 object-contain">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Indicator Dots -->
                <div class="flex justify-center mt-6">
                    <span
                        class="indicator w-3 h-3 rounded-full bg-lime-400 cursor-pointer transition-all duration-300 mr-2"
                        data-slide="0"></span>
                    <span
                        class="indicator w-3 h-3 rounded-full border border-white bg-white/30 cursor-pointer transition-all duration-300 mr-2"
                        data-slide="1"></span>
                    <span
                        class="indicator w-3 h-3 rounded-full border border-white bg-white/30 cursor-pointer transition-all duration-300"
                        data-slide="2"></span>
                </div>
            </div>
        </section>

       
        <!-- product -->
        <section class="font-primary bg-white w-full mb-12 sm:mb-16 md:mb-24">
            <div class="max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
                <div class="text-center mb-8 sm:mb-10 md:mb-12">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-primary mb-4 sm:mb-5">Our Product
                    </h2>
                    <p
                        class="text-text-second text-sm sm:text-base md:text-lg xl:text-xl font-light mx-auto leading-relaxed max-w-3xl">
                        Our Products with the famchips brand are suitable for your family's snack choice.
                    </p>
                </div>

<!-- Product Section -->
<div class="relative mx-auto">
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6 md:gap-8">

        @foreach ($products as $product)
        <div class="group relative">
            <div class="relative">
                <!-- Gambar -->
                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                    <img class="w-full h-full object-cover object-center"
                         src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                </div>

                {{-- Nama & Deskripsi --}}
                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                {{ $product->name }}
                </h2>
                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                {!! Str::limit(strip_tags($product->description), 80) !!}
                </p>

                <!-- Tombol Order -->
                <div class="flex justify-center items-center mt-3 w-full">
                    <a href="https://wa.me/{{ $product->whatsapp }}" target="_blank"
                        class="flex items-center px-3 py-2 sm:px-4 text-[#a4ce3e] bg-white hover:bg-[#a4ce3e] hover:text-white border-2 border-[#a4ce3e] font-medium rounded-full text-sm transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        <p>Order Now</p>
                    </a>
                </div>
            </div>

            <!-- Hover Card -->
            <div
                class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                <div class="mb-4">
                    <h3 class="font-semibold text-base">Ingredients</h3>
                    <p class="text-sm text-gray-200">{{ $product->ingredients }}</p>
                </div>
                <div class="mb-4">
                    <h3 class="font-semibold text-base">Expire Date</h3>
                    <p class="text-sm text-gray-200">{{ $product->expired_date }}</p>
                </div>
                <a href="https://wa.me/{{ $product->whatsapp }}" target="_blank"
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
        @endforeach

    </div>
</div>

<div class="flex justify-center pt-10 space-x-2">
    <a href="{{ route('products.front') }}"
        class="flex items-center px-3 py-2 sm:px-4 text-white bg-primary hover:bg-white hover:text-[#a4ce3e] border-2 hover:border-primary focus:outline-none font-medium rounded-full text-sm sm:text-md md:text-lg text-center transition-colors">
        <p>Produk Lainnya</p>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="size-5 ml-2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
        </svg>
    </a>
</div>
<!-- End Product Section -->

            </div>
        </section>



        <!-- certificaation -->
        <section class="font-primary bg-bg w-full mb-12 sm:mb-16 md:mb-24 pt-12 sm:pt-16 md:pt-24 ">
            <div class="max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
                <!-- Header -->
                <div class="text-center mb-8 sm:mb-10 md:mb-12">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-text-second mb-4 sm:mb-5">Certification
                    </h2>
                    <p
                        class="text-text-second text-sm sm:text-base md:text-lg xl:text-xl font-light mx-auto leading-relaxed">
                        the unique characteristics or benefits of a product that make it more attractive to customers than competing products.
                    </p>
                </div>
                <!-- Section -->
                <div class="relative w-full">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 text-center">
                        <div class="mb-10 px-4">
                            <div class="rounded-lg overflow-hidden flex items-center justify-center mb-5 h-36">
                                <img alt="content" class="object-cover flex items-center justify-center object-center h-auto w-20" src="https://upload.wikimedia.org/wikipedia/commons/1/1c/Halal_Indonesia.svg">
                            </div>
                            <p class="leading-relaxed text-base">
                                Arjuna Citra Indonesia's Products Have Passedthe Halal Certification.
                            </p>
                        </div>
                        <div class="mb-10 px-4">
                            <div class="rounded-lg overflow-hidden flex items-center justify-center mb-5 h-36">
                                <img alt="content" class="object-cover flex items-center justify-center object-center h-auto w-40" src="https://upload.wikimedia.org/wikipedia/id/a/a8/BADAN_POM.png">
                            </div>
                            <p class="leading-relaxed text-base">
                                Arjuna Citra Indonesia's Products Have Passedthe Halal Certification.
                            </p>
                        </div>
                        <div class="mb-10 px-4">
                            <div class="rounded-lg overflow-hidden flex items-center justify-center mb-5 h-36">
                                <img alt="content" class="object-cover flex items-center justify-center object-center h-auto w-44" src="images/haccp.png">
                            </div>
                            <p class="leading-relaxed text-base">
                                Arjuna Citra Indonesia's Products Have Passedthe Halal Certification.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!-- partners -->
        <section class="font-primary bg-white w-full mb-12 sm:mb-16 md:mb-24">
            <div class="max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
                <div class="grid grid-cols-1 items-center gap-x-8 gap-y-16 lg:grid-cols-2">
                    <div class="mx-auto w-full max-w-xl lg:mx-0">
                        <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-primary mb-4 sm:mb-5">Our Partners</h2>
                        <p class="mt-6 text-lg/8 text-gray-600">
                            FamChips adalah UMKM dari Kota Batu Jawa Timur yang menghadirkan keripik sehat dari buah dan sayuran pilihan.
                        </p>
                    </div>
                    <div class="mx-auto grid w-full max-w-xl grid-cols-2 gap-x-7 items-center gap-y-12 sm:gap-y-14 lg:mx-0 lg:max-w-none lg:pl-5">
                        <img src="images/rotio.png" alt="Tuple" class="h-24 w-full object-contain object-left" />
                        <img src="images/hypermart.png" alt="Tuple" class="h-24 w-full object-contain object-left" />
                        <img src="images/monde.webp" alt="Tuple" class="h-24 w-full object-contain object-left" />
                        <img src="images/alfamart.png" alt="Tuple" class="h-24 w-full object-contain object-left" />
                        <img src="images/Lemonilo.png" alt="Tuple" class="h-24 w-full object-contain object-left" />
                        <img src="images/batu.svg" alt="Tuple" class="h-24 w-full object-contain object-left" />
                    </div>
                </div>
            </div>
        </section>


        <!-- Testimonial -->
        <section class="font-primary bg-bg w-full mb-12 sm:mb-16 md:mb-24 pt-12 sm:pt-16 md:pt-24 ">
            <div class="max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
                <!-- Header -->
                <div class="text-center mb-8 sm:mb-10 md:mb-12">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-text-second mb-4 sm:mb-5">Testimonial</h2>
                </div>
                
                <!-- Section -->
                <div class="relative w-full">
                    <div class="flex justify-between items-center">
                        <button id="prevBtn" class="hidden md:flex justify-center items-center h-16 w-16 rounded-full bg-primary cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                            </svg>
                        </button>

                        <!-- Testimonial 1 -->
                        <div id="testimonial-0" class="bg-[#E5F0C1] flex items-center lg:w-4/5 mx-auto rounded-xl p-10 mb-10 border-gray-200 sm:flex-row flex-col">
                            <img 
                                class="sm:w-56 sm:h-56 h-20 w-20 sm:mr-10 object-cover inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0"
                                src="https://i.pinimg.com/736x/f4/a9/88/f4a988001304370c626932781b20c1f9.jpg"
                            />
                            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0 space-y-3">
                                <p class="leading-relaxed text-base text-text-second">
                                    Chilli Chips-nya enak banget! Pedesnya berasa, tapi nggak lebay—pas di mulut, nggak bikin seret. Teksturnya ringan dan renyah, jadi makin susah berhenti ngunyah. Camilan ini cocok banget buat nemenin nonton bola atau kumpul bareng temen. Sekali coba, langsung pengen nambah terus!
                                </p>
                                <div class="flex justify-center md:justify-start items-center space-x-1">
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                </div>
                                <h2 class="text-text-second text-xl title-font font-bold mb-2">
                                    Lee Ji-eun
                                </h2>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div id="testimonial-1" class="bg-[#E5F0C1] flex items-center lg:w-4/5 mx-auto rounded-xl p-10 mb-10 border-gray-200 sm:flex-row flex-col" style="display: none;">
                            <img 
                                class="sm:w-56 sm:h-56 h-20 w-20 sm:mr-10 object-cover inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0"
                                src="https://i.pinimg.com/736x/5b/03/54/5b035482641a547625808499c89447ce.jpg"
                            />
                            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0 space-y-3">
                                <p class="leading-relaxed text-base text-text-second">
                                    Wah, Chilli Chips ini beneran mantap! Rasanya unik, ada pedas-pedas gimana gitu yang bikin nagih. Bumbunya meresap sempurna ke setiap chip-nya. Gue suka banget sama teksturnya yang garing tapi gak keras di gigi. Perfect buat camilan santai di rumah!
                                </p>
                                <div class="flex justify-center md:justify-start items-center space-x-1">
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                </div>
                                <h2 class="text-text-second text-xl title-font font-bold mb-2">
                                    Andi Setiawan
                                </h2>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div id="testimonial-2" class="bg-[#E5F0C1] flex items-center lg:w-4/5 mx-auto rounded-xl p-10 mb-10 border-gray-200 sm:flex-row flex-col" style="display: none;">
                            <img 
                                class="sm:w-56 sm:h-56 h-20 w-20 sm:mr-10 object-cover inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0"
                                src="https://i.pinimg.com/736x/09/0b/bc/090bbcffd9c72bc9dbcc34506b7cdcc4.jpg"
                            />
                            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0 space-y-3">
                                <p class="leading-relaxed text-base text-text-second">
                                    Saya sangat terkesan dengan Chilli Chips ini! Kombinasi rasa pedas dan gurihnya pas banget. Kemasannya juga praktis, jadi bisa dibawa ke mana-mana. Anak-anak di rumah juga suka banget. Ini jadi camilan wajib di rumah kami sekarang. Recommended!
                                </p>
                                <div class="flex justify-center md:justify-start items-center space-x-1">
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                </div>
                                <h2 class="text-text-second text-xl title-font font-bold mb-2">
                                    Sari Dewi
                                </h2>
                            </div>
                        </div>

                        <button id="nextBtn" class="hidden md:flex justify-center items-center h-16 w-16 rounded-full bg-primary cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex justify-center mb-10">
                        <span id="indicator-0" class="indicator w-3 h-3 rounded-full bg-lime-400 cursor-pointer transition-all duration-300 mr-2" data-slide="0"></span>
                        <span id="indicator-1" class="indicator w-3 h-3 rounded-full border border-white bg-white/30 cursor-pointer transition-all duration-300 mr-2" data-slide="1"></span>
                        <span id="indicator-2" class="indicator w-3 h-3 rounded-full border border-white bg-white/30 cursor-pointer transition-all duration-300" data-slide="2"></span>
                    </div>
                </div>
            </div>
        </section>



        <!-- blog -->
        <section class="font-primary bg-white w-full mb-12 sm:mb-16 md:mb-24">
            <div class="max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
                <div class="text-center mb-8 sm:mb-10 md:mb-12">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-primary mb-4 sm:mb-5">Article
                    </h2>
                    <p
                        class="text-text-second text-sm sm:text-base md:text-lg xl:text-xl font-light mx-auto leading-relaxed max-w-3xl">
                        Our Products with the famchips brand are suitable for your family's snack choice.
                    </p>
                </div>

                <!-- Product Section -->
                <div class="relative mx-auto">
                    <div class="grid md:grid-cols-3 gap-5">
                        <div class="flex items-end flex-wrap w-full h-60 bg-black px-10 relative rounded-xl">
                            <img alt="gallery" 
                                class="w-full h-60 object-cover object-center block opacity-60 absolute inset-0 rounded-xl" 
                                src="https://i.pinimg.com/1200x/0b/bb/e8/0bbbe8435a1373f6564377a6059cb710.jpg"
                            >
                            <div class="text-left relative z-10 w-full pb-4 space-y-2">
                                <p class="text-white leading-relaxed text-xs">15 July 2024</p>
                                <h2 class="text-base text-white font-bold title-font mb-2">
                                    Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh
                                </h2>
                            </div>
                        </div>
                        <div class="flex items-end flex-wrap w-full h-60 bg-black px-10 relative rounded-xl">
                            <img alt="gallery" 
                                class="w-full h-60 object-cover object-center block opacity-60 absolute inset-0 rounded-xl" 
                                src="https://i.pinimg.com/1200x/0b/bb/e8/0bbbe8435a1373f6564377a6059cb710.jpg"
                            >
                            <div class="text-left relative z-10 w-full pb-4 space-y-2">
                                <p class="text-white leading-relaxed text-xs">15 July 2024</p>
                                <h2 class="text-base text-white font-bold title-font mb-2">
                                    Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh
                                </h2>
                            </div>
                        </div>
                        <div class="flex items-end flex-wrap w-full h-60 bg-black px-10 relative rounded-xl">
                            <img alt="gallery" 
                                class="w-full h-60 object-cover object-center block opacity-60 absolute inset-0 rounded-xl" 
                                src="https://i.pinimg.com/1200x/0b/bb/e8/0bbbe8435a1373f6564377a6059cb710.jpg"
                            >
                            <div class="text-left relative z-10 w-full pb-4 space-y-2">
                                <p class="text-white leading-relaxed text-xs">15 July 2024</p>
                                <h2 class="text-base text-white font-bold title-font mb-2">
                                    Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="font-primary bg-bg w-full pt-12 sm:pt-16 md:pt-24 ">
            <div class="max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
                <!-- Header -->
                <div class="text-center mb-8 sm:mb-10 md:mb-12">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-text-second mb-4 sm:mb-5">Get in touch - Famchips Arjuna 999
                    </h2>
                </div>
                <!-- Section -->
                <div class="relative w-full mb-10">
                    <div class="flex flex-col md:flex-row md:justify-between">
                        <div class="flex justify-start max-w-md">
                            <p class="mt-6 text-lg/8 text-gray-600">
                                Jl. Bukit Berbunga No.176, Sidomulyo, Kec. Batu, Kota Batu, Jawa Timur 65317
                            </p>                            
                        </div>
                        <div class="flex justify-end max-w-md">
                            <p class="mt-6 text-lg/8 text-gray-600">
                                Jl. Bukit Berbunga No.176, Sidomulyo, Kec. Batu, Kota Batu, Jawa Timur 65317
                            </p>                            
                        </div>
                    </div>
                    <div class="w-full h-48 sm:h-56 md:h-[470px] mt-5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.918234778458!2d112.52567871428793!3d-7.873989794416995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6287e5f8f9b0f%3A0x9c2c8f7e7e7e7e7e!2sJl.+Bukit+Berbunga+No.176%2C+Sidomulyo%2C+Kec.+Batu%2C+Kota+Batu%2C+Jawa+Timur+65317!5e0!3m2!1sen!2sid!4v1623912345678!5m2!1sen!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

        
        <footer class="bg-white border-t border-gray-400">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 py-5 md:flex md:items-center md:justify-between">
                <div class="flex justify-center gap-x-4 sm:gap-x-6 md:order-2">
                    <a target="_blank" href="https://www.instagram.com/famchips_arjuna999?igsh=OGI3amxwcjZtMXBl" class="text-gray-600 hover:text-gray-800">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a target="_blank" href="https://www.tiktok.com/@arjuna_triplenine?_t=ZS-8xT0BIZh5lv&_r=1" class="text-gray-600 hover:text-gray-800">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>Tiktok</title>
                            <g id="Icon/Social/tiktok-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M38.0766847,15.8542954 C36.0693906,15.7935177 34.2504839,14.8341149 32.8791434,13.5466056 C32.1316475,12.8317108 31.540171,11.9694126 31.1415066,11.0151329 C30.7426093,10.0603874 30.5453728,9.03391952 30.5619062,8 L24.9731521,8 L24.9731521,28.8295196 C24.9731521,32.3434487 22.8773693,34.4182737 20.2765028,34.4182737 C19.6505623,34.4320127 19.0283477,34.3209362 18.4461858,34.0908659 C17.8640239,33.8612612 17.3337909,33.5175528 16.8862248,33.0797671 C16.4386588,32.6422142 16.0833071,32.1196657 15.8404292,31.5426268 C15.5977841,30.9658208 15.4727358,30.3459348 15.4727358,29.7202272 C15.4727358,29.0940539 15.5977841,28.4746337 15.8404292,27.8978277 C16.0833071,27.3207888 16.4386588,26.7980074 16.8862248,26.3604545 C17.3337909,25.9229017 17.8640239,25.5791933 18.4461858,25.3491229 C19.0283477,25.1192854 19.6505623,25.0084418 20.2765028,25.0219479 C20.7939283,25.0263724 21.3069293,25.1167239 21.794781,25.2902081 L21.794781,19.5985278 C21.2957518,19.4900128 20.7869423,19.436221 20.2765028,19.4380839 C18.2431278,19.4392483 16.2560928,20.0426009 14.5659604,21.1729264 C12.875828,22.303019 11.5587449,23.9090873 10.7814424,25.7878401 C10.003907,27.666593 9.80084889,29.7339663 10.1981162,31.7275214 C10.5953834,33.7217752 11.5748126,35.5530237 13.0129853,36.9904978 C14.4509252,38.4277391 16.2828722,39.4064696 18.277126,39.8028054 C20.2711469,40.1991413 22.3382874,39.9951517 24.2163416,39.2169177 C26.0948616,38.4384508 27.7002312,37.1209021 28.8296253,35.4300711 C29.9592522,33.7397058 30.5619062,31.7522051 30.5619062,29.7188301 L30.5619062,18.8324027 C32.7275484,20.3418321 35.3149087,21.0404263 38.0766847,21.0867664 L38.0766847,15.8542954 Z" id="Fill-1" fill="#000000"></path>
                            </g>
                        </svg>
                    </a>
                </div>
                <p class="mt-6 sm:mt-8 text-center text-xs sm:text-sm text-gray-600 md:order-1 md:mt-0">
                    © 2025 Rakryan - Famchips. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
</body>


<script>
    function scrollToSection(id) {
        const section = document.getElementById(id);
        if (section) {
            section.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');

    let isMenuOpen = false;

    mobileMenuButton.addEventListener('click', function() {
        isMenuOpen = !isMenuOpen;

        if (isMenuOpen) {
            // Show menu
            mobileMenu.classList.remove('-translate-y-2', 'opacity-0', 'invisible');
            mobileMenu.classList.add('translate-y-0', 'opacity-100', 'visible');

            // Switch icons
            hamburgerIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');

            // Update aria-expanded
            mobileMenuButton.setAttribute('aria-expanded', 'true');
        } else {
            // Hide menu
            mobileMenu.classList.add('-translate-y-2', 'opacity-0', 'invisible');
            mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');

            // Switch icons
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');

            // Update aria-expanded
            mobileMenuButton.setAttribute('aria-expanded', 'false');
        }
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (isMenuOpen && !mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
            isMenuOpen = false;

            // Hide menu
            mobileMenu.classList.add('-translate-y-2', 'opacity-0', 'invisible');
            mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');

            // Switch icons
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');

            // Update aria-expanded
            mobileMenuButton.setAttribute('aria-expanded', 'false');
        }
    });

    // Close menu when window is resized to desktop size
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 768 && isMenuOpen) {
            isMenuOpen = false;

            // Hide menu
            mobileMenu.classList.add('-translate-y-2', 'opacity-0', 'invisible');
            mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');

            // Switch icons
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');

            // Update aria-expanded
            mobileMenuButton.setAttribute('aria-expanded', 'false');
        }
    });

    let currentSlide = 0;
    const totalSlides = 3;
    const sliderTrack = document.getElementById('sliderTrack');
    const indicators = document.querySelectorAll('.indicator');

    // Fungsi untuk mengubah slide
    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        const translateX = -slideIndex * 100;
        sliderTrack.style.transform = `translateX(${translateX}%)`;

        // Update indicators
        indicators.forEach((indicator, index) => {
            if (index === slideIndex) {
                indicator.classList.remove('bg-white/30', 'border-white');
                indicator.classList.add('bg-lime-400');
            } else {
                indicator.classList.remove('bg-lime-400');
                indicator.classList.add('bg-white/30', 'border-white');
            }
        });
    }

    // Auto slide setiap 4 detik
    function autoSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        goToSlide(currentSlide);
    }

    // Mulai auto slide
    let autoSlideInterval = setInterval(autoSlide, 4000);

    // Event listener untuk indicator dots
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            // Reset interval ketika user manual klik
            clearInterval(autoSlideInterval);
            goToSlide(index);
            // Restart auto slide
            autoSlideInterval = setInterval(autoSlide, 4000);
        });
    });

    // Pause auto slide saat hover
    const sliderContainer = document.querySelector('section');
    sliderContainer.addEventListener('mouseenter', () => {
        clearInterval(autoSlideInterval);
    });

    sliderContainer.addEventListener('mouseleave', () => {
        autoSlideInterval = setInterval(autoSlide, 4000);
    });



    // testimonial
    document.addEventListener('DOMContentLoaded', function() {
    var currentSlide = 0;
    var totalSlides = 3;

    function showSlide(slideIndex) {
        // Hide all testimonials
        for (var i = 0; i < totalSlides; i++) {
            var testimonial = document.getElementById('testimonial-' + i);
            var indicator = document.getElementById('indicator-' + i);
            
            if (testimonial) {
                testimonial.style.display = 'none';
            }
            if (indicator) {
                indicator.className = 'indicator w-3 h-3 rounded-full border border-white bg-white/30 cursor-pointer transition-all duration-300 mr-2';
            }
        }
        
        // Show current testimonial
        var currentTestimonial = document.getElementById('testimonial-' + slideIndex);
        var currentIndicator = document.getElementById('indicator-' + slideIndex);
        
        if (currentTestimonial) {
            currentTestimonial.style.display = 'flex';
        }
        if (currentIndicator) {
            currentIndicator.className = 'indicator w-3 h-3 rounded-full bg-lime-400 cursor-pointer transition-all duration-300 mr-2';
            
            // Remove mr-2 from last indicator
            if (slideIndex === totalSlides - 1) {
                currentIndicator.className = 'indicator w-3 h-3 rounded-full bg-lime-400 cursor-pointer transition-all duration-300';
            }
        }
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    // Event listeners
    var nextBtn = document.getElementById('nextBtn');
    var prevBtn = document.getElementById('prevBtn');
    
    if (nextBtn) {
        nextBtn.addEventListener('click', nextSlide);
    }
    if (prevBtn) {
        prevBtn.addEventListener('click', prevSlide);
    }

    // Indicator event listeners
    for (var i = 0; i < totalSlides; i++) {
        var indicator = document.getElementById('indicator-' + i);
        if (indicator) {
            indicator.addEventListener('click', (function(index) {
                return function() {
                    currentSlide = index;
                    showSlide(currentSlide);
                };
            })(i));
        }
    }

    // Initialize
    showSlide(0);
});
</script>

</html>
