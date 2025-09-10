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
                    <img src="images/logo.png" class="h-8 sm:h-10 md:h-12" alt="Flowbite Logo" />
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
        <section class="relative h-screen bg-cover bg-center pt-16 md:pt-20" id="heroSection">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="max-w-screen-xl container mx-auto relative z-10 flex items-end justify-start h-full text-start text-white px-4 pb-10 md:pb-20">
                <div>
                    <div class="flex flex-row mb-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="font-light text-base pl-2" id="newsDate">
                            16 September 2025
                        </p>
                    </div>
                    <a href="artikelDetail.html">
                        <h1 class="text-2xl md:text-3xl max-w-4xl font-semibold mb-4 leading-relaxed hover:underline" id="newsTitle">
                            Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh serta Menjelajahi
                        </h1>
                    </a>
                    <p class="text-sm font-light md:text-base max-w-2xl mb-6" id="newsExcerpt">
                        Selamat datang di FamChips – Keripik buah dan sayuran yang 100% alami, renyah, dan bergizi. Pilihan tepat untuk  camilan sehat anda.
                    </p>

                    <!-- Indicator Dots -->
                    <div class="flex justify-start mt-6">
                        <span id="hero-indicator-0" class="indicator w-3 h-3 rounded-full bg-lime-400 cursor-pointer transition-all duration-300 mr-2" data-slide="0"></span>
                        <span id="hero-indicator-1" class="indicator w-3 h-3 rounded-full border border-white bg-white/30 cursor-pointer transition-all duration-300 mr-2" data-slide="1"></span>
                        <span id="hero-indicator-2" class="indicator w-3 h-3 rounded-full border border-white bg-white/30 cursor-pointer transition-all duration-300" data-slide="2"></span>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-white w-full mb-12 sm:mb-16 md:mb-24">
            <div class="max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
                <div class="text-center md:text-left mb-8 sm:mb-10 md:mb-12 mt-12 sm:mt-16 md:mt-24">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-primary mb-4 sm:mb-5">
                        Discover Our Latest News
                    </h2>
                    <p
                        class="text-text-second text-sm sm:text-base md:text-lg xl:text-xl font-light mx-auto leading-relaxed">
                        Discover the achievements that set us apart. From groundbreaking projects to industry accolades.
                    </p>
                    <form class="max-w-md mx-auto pt-4" onsubmit="return false;">
                        <label for="default-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="searchInput"
                                class="block w-full py-3 px-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Cari artikel..." />
                        </div>
                    </form>
                </div>

                <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    
                    
                    <a href="/" class="flex flex-col items-start justify-between">
                        <div class="relative w-full">
                            <img 
                                src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" 
                                class="aspect-video w-full rounded-xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]" 
                            />
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div class="flex max-w-xl grow flex-col justify-between mt-5">
                            <div class="flex items-center text-sm">
                                <div class="flex flex-row items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <p class="font-light pl-2">
                                        16 September 2025
                                    </p>
                                </div>
                            </div>
                            <div class="group relative grow">
                                <h1 class="mt-2 line-clamp-2 font-semibold text-base md:text-lg">
                                    Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh serta Menjelajahi efek jangka panjang
                                </h1>
                                <p class="mt-2 line-clamp-3 text-sm/6 text-gray-600">
                                    Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.
                                </p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="/" class="flex flex-col items-start justify-between">
                        <div class="relative w-full">
                            <img 
                                src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" 
                                class="aspect-video w-full rounded-xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]" 
                            />
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div class="flex max-w-xl grow flex-col justify-between mt-5">
                            <div class="flex items-center text-sm">
                                <div class="flex flex-row items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <p class="font-light pl-2">
                                        16 September 2025
                                    </p>
                                </div>
                            </div>
                            <div class="group relative grow">
                                <h1 class="mt-2 line-clamp-2 font-semibold text-base md:text-lg">
                                    Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh serta Menjelajahi efek jangka panjang
                                </h1>
                                <p class="mt-2 line-clamp-3 text-sm/6 text-gray-600">
                                    Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="/" class="flex flex-col items-start justify-between">
                        <div class="relative w-full">
                            <img 
                                src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" 
                                class="aspect-video w-full rounded-xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]" 
                            />
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div class="flex max-w-xl grow flex-col justify-between mt-5">
                            <div class="flex items-center text-sm">
                                <div class="flex flex-row items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <p class="font-light pl-2">
                                        16 September 2025
                                    </p>
                                </div>
                            </div>
                            <div class="group relative grow">
                                <h1 class="mt-2 line-clamp-2 font-semibold text-base md:text-lg">
                                    Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh serta Menjelajahi efek jangka panjang
                                </h1>
                                <p class="mt-2 line-clamp-3 text-sm/6 text-gray-600">
                                    Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="/" class="flex flex-col items-start justify-between">
                        <div class="relative w-full">
                            <img 
                                src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" 
                                class="aspect-video w-full rounded-xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]" 
                            />
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div class="flex max-w-xl grow flex-col justify-between mt-5">
                            <div class="flex items-center text-sm">
                                <div class="flex flex-row items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <p class="font-light pl-2">
                                        16 September 2025
                                    </p>
                                </div>
                            </div>
                            <div class="group relative grow">
                                <h1 class="mt-2 line-clamp-2 font-semibold text-base md:text-lg">
                                    Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh serta Menjelajahi efek jangka panjang
                                </h1>
                                <p class="mt-2 line-clamp-3 text-sm/6 text-gray-600">
                                    Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="/" class="flex flex-col items-start justify-between">
                        <div class="relative w-full">
                            <img 
                                src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" 
                                class="aspect-video w-full rounded-xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]" 
                            />
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div class="flex max-w-xl grow flex-col justify-between mt-5">
                            <div class="flex items-center text-sm">
                                <div class="flex flex-row items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <p class="font-light pl-2">
                                        16 September 2025
                                    </p>
                                </div>
                            </div>
                            <div class="group relative grow">
                                <h1 class="mt-2 line-clamp-2 font-semibold text-base md:text-lg">
                                    Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh serta Menjelajahi efek jangka panjang
                                </h1>
                                <p class="mt-2 line-clamp-3 text-sm/6 text-gray-600">
                                    Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="/" class="flex flex-col items-start justify-between">
                        <div class="relative w-full">
                            <img 
                                src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" 
                                class="aspect-video w-full rounded-xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]" 
                            />
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div class="flex max-w-xl grow flex-col justify-between mt-5">
                            <div class="flex items-center text-sm">
                                <div class="flex flex-row items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <p class="font-light pl-2">
                                        16 September 2025
                                    </p>
                                </div>
                            </div>
                            <div class="group relative grow">
                                <h1 class="mt-2 line-clamp-2 font-semibold text-base md:text-lg">
                                    Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh serta Menjelajahi efek jangka panjang
                                </h1>
                                <p class="mt-2 line-clamp-3 text-sm/6 text-gray-600">
                                    Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="/" class="flex flex-col items-start justify-between">
                        <div class="relative w-full">
                            <img 
                                src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" 
                                class="aspect-video w-full rounded-xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]" 
                            />
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div class="flex max-w-xl grow flex-col justify-between mt-5">
                            <div class="flex items-center text-sm">
                                <div class="flex flex-row items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <p class="font-light pl-2">
                                        16 September 2025
                                    </p>
                                </div>
                            </div>
                            <div class="group relative grow">
                                <h1 class="mt-2 line-clamp-2 font-semibold text-base md:text-lg">
                                    Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh serta Menjelajahi efek jangka panjang
                                </h1>
                                <p class="mt-2 line-clamp-3 text-sm/6 text-gray-600">
                                    Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="/" class="flex flex-col items-start justify-between">
                        <div class="relative w-full">
                            <img 
                                src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" 
                                class="aspect-video w-full rounded-xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]" 
                            />
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div class="flex max-w-xl grow flex-col justify-between mt-5">
                            <div class="flex items-center text-sm">
                                <div class="flex flex-row items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <p class="font-light pl-2">
                                        16 September 2025
                                    </p>
                                </div>
                            </div>
                            <div class="group relative grow">
                                <h1 class="mt-2 line-clamp-2 font-semibold text-base md:text-lg">
                                    Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh serta Menjelajahi efek jangka panjang
                                </h1>
                                <p class="mt-2 line-clamp-3 text-sm/6 text-gray-600">
                                    Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="/" class="flex flex-col items-start justify-between">
                        <div class="relative w-full">
                            <img 
                                src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" 
                                class="aspect-video w-full rounded-xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]" 
                            />
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div class="flex max-w-xl grow flex-col justify-between mt-5">
                            <div class="flex items-center text-sm">
                                <div class="flex flex-row items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <p class="font-light pl-2">
                                        16 September 2025
                                    </p>
                                </div>
                            </div>
                            <div class="group relative grow">
                                <h1 class="mt-2 line-clamp-2 font-semibold text-base md:text-lg">
                                    Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh serta Menjelajahi efek jangka panjang
                                </h1>
                                <p class="mt-2 line-clamp-3 text-sm/6 text-gray-600">
                                    Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.
                                </p>
                            </div>
                        </div>
                    </a>


                </div>
            </div>
        </section>
    


    </div>
</body>


<script>
    document.addEventListener('DOMContentLoaded', function() {
    var currentHeroSlide = 0;
    var totalHeroSlides = 3;
    var heroAutoSlideInterval;
    
    // Data untuk setiap slide
    var heroSlides = [
        {
            backgroundImage: 'images/blog.png',
            date: '16 September 2025',
            title: 'Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh serta Menjelajahi',
            excerpt: 'Selamat datang di FamChips – Keripik buah dan sayuran yang 100% alami, renyah, dan bergizi. Pilihan tepat untuk camilan sehat anda.'
        },
        {
            backgroundImage: 'https://i.pinimg.com/1200x/2f/e3/81/2fe381af64a4fd78fcede7bdfcd7dd5f.jpg',
            date: '14 September 2025',
            title: 'Tips Memilih Camilan Sehat untuk Keluarga Modern',
            excerpt: 'Panduan lengkap memilih camilan yang tidak hanya lezat tetapi juga memberikan nutrisi terbaik untuk seluruh anggota keluarga.'
        },
        {
            backgroundImage: 'https://i.pinimg.com/1200x/70/60/9c/70609c44670d0c825fb29febc7536ea1.jpg',
            date: '12 September 2025',
            title: 'Revolusi Makanan Ringan: Dari Junk Food ke Healthy Snack',
            excerpt: 'Bagaimana tren makanan ringan berubah dari yang tidak sehat menjadi pilihan camilan bergizi dan ramah lingkungan.'
        }
    ];

    function showHeroSlide(slideIndex) {
        var heroSection = document.getElementById('heroSection');
        var newsDate = document.getElementById('newsDate');
        var newsTitle = document.getElementById('newsTitle');
        var newsExcerpt = document.getElementById('newsExcerpt');
        
        // Update background image dengan fade effect
        if (heroSection) {
            heroSection.style.backgroundImage = "url('" + heroSlides[slideIndex].backgroundImage + "')";
        }
        
        // Update content
        if (newsDate) {
            newsDate.textContent = heroSlides[slideIndex].date;
        }
        if (newsTitle) {
            newsTitle.textContent = heroSlides[slideIndex].title;
        }
        if (newsExcerpt) {
            newsExcerpt.textContent = heroSlides[slideIndex].excerpt;
        }
        
        // Update indicators
        for (var i = 0; i < totalHeroSlides; i++) {
            var indicator = document.getElementById('hero-indicator-' + i);
            if (indicator) {
                indicator.className = 'indicator w-3 h-3 rounded-full border border-white bg-white/30 cursor-pointer transition-all duration-300 mr-2';
            }
        }
        
        var activeIndicator = document.getElementById('hero-indicator-' + slideIndex);
        if (activeIndicator) {
            activeIndicator.className = 'indicator w-3 h-3 rounded-full bg-lime-400 cursor-pointer transition-all duration-300 mr-2';
            
            // Remove mr-2 from last indicator
            if (slideIndex === totalHeroSlides - 1) {
                activeIndicator.className = 'indicator w-3 h-3 rounded-full bg-lime-400 cursor-pointer transition-all duration-300';
            }
        }
    }

    function nextHeroSlide() {
        currentHeroSlide = (currentHeroSlide + 1) % totalHeroSlides;
        showHeroSlide(currentHeroSlide);
    }

    function startAutoSlide() {
        heroAutoSlideInterval = setInterval(nextHeroSlide, 5000); // Ganti slide setiap 5 detik
    }

    function stopAutoSlide() {
        if (heroAutoSlideInterval) {
            clearInterval(heroAutoSlideInterval);
        }
    }

    function restartAutoSlide() {
        stopAutoSlide();
        startAutoSlide();
    }

    // Indicator event listeners
    for (var i = 0; i < totalHeroSlides; i++) {
        var indicator = document.getElementById('hero-indicator-' + i);
        if (indicator) {
            indicator.addEventListener('click', (function(index) {
                return function() {
                    currentHeroSlide = index;
                    showHeroSlide(currentHeroSlide);
                    restartAutoSlide(); // Restart auto slide when manually clicked
                };
            })(i));
        }
    }

    // Pause auto slide when hovering over the section
    var heroSection = document.getElementById('heroSection');
    if (heroSection) {
        heroSection.addEventListener('mouseenter', stopAutoSlide);
        heroSection.addEventListener('mouseleave', startAutoSlide);
    }

    // Initialize
    showHeroSlide(0);
    startAutoSlide();
});
</script>