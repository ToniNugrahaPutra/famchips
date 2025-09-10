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
  <body>
    <div class="font-primary">
        
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
                            <a href="{{ route('gallery.front') }}"
                            class="text-text-second font-semibold text-sm lg:text-base hover:text-primary transition-colors">
                            Product Gallery
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)" onclick="scrollToSection('testi')"
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
                        <a href="index"
                            class="block py-3 px-6 text-text-second font-semibold hover:text-primary hover:bg-gray-50 transition-colors">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<a href="{{ route('products.front') }}""
                            class="block py-3 px-6 text-text-second font-semibold hover:text-primary hover:bg-gray-50 transition-colors">
                            Our Product
                        </a>
                    </li>
                    <li>
                        <a href="<a href="{{ route('gallery.front') }}""
                            class="block py-3 px-6 text-text-second font-semibold hover:text-primary hover:bg-gray-50 transition-colors">
                            Product Gallery
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" onclick="scrollToSection('testi')"
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


        <section class="bg-white w-full my-12 sm:my-16 md:my-24">
            <div class="max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
                <div class="text-center mb-8 sm:mb-10 md:mb-12 mt-12 sm:mt-16 md:mt-24">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-primary mb-4 sm:mb-5">Our Product
                    </h2>
                    <p
                        class="text-text-second text-sm sm:text-base md:text-lg xl:text-xl font-light mx-auto leading-relaxed max-w-3xl">
                        Our Products with the famchips brand are suitable for your family's snack choice.
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
                                placeholder="Cari produk..." />
                        </div>
                    </form>

                </div>

                <!-- Product Section -->
                <div class="relative mx-auto">
                    <div id="product-grid" class="product-list grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6 md:gap-8">

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center"
                                        src="product_compressed/KeripikApel-Famchips.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Apple Freezeredried
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Apel segar yang dibekukan jadi camilan renyah, dan bergizi.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Apples, Sugar, Vegetable Oil</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center"
                                        src="product_compressed/KeripikBawangPutih.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Garlic Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Bawang Putih dengan aroma kuat serta rasa gurih, cocok untuk penggemar rasa bawang putih.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Garlic, Wheat Flour, Vegetable Oil</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center"
                                        src="product_compressed/KeripikBawangMerah.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Shallot Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Bawang Merah yang renyah dan gurih, tambahan sempurna untuk hidangan atau camilan langsung.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Shallots, Wheat Flour, Vegetable Oil</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center"
                                        src="product_compressed/KeripikBrokoli.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Broccoli Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Broccoli sehat dari brokoli asli, renyah, gurih dan nutrisinya tetap menyehatkan
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Broccoli, Wheat Flour, Vegetable Oil</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center"
                                        src="product_compressed/KeripikBananafreez.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Banana Freezdried
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Pisang beku dengan rasa manis alami dan tekstur renyah yang unik, camilan sehat untuk keluarga.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Bananas, Sugar, Vegetable Oil</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center"
                                        src="product_compressed/KeripikBuahApel.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Apple Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik apel renyah alami dari irisan apel pilihan. Tanpa pewarna untuk menjaga rasa dan gizi.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Apples, Vegetable Oil</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/KeripikMangga.jpg"
                                        alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Mango Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Mangga matang dengan rasa yang khas, pas untuk camilan keluarga.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Mangoes, Sugar, Vegetable Oil</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/KeripikCabe.jpg"
                                        alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Chilli Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Cabai yang pedas gurihnya nendang, pas buat camilan kamu.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Chili, Wheat Flour, Vegetable Oil</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/KeripikBuahNaga.jpg"
                                        alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Dragonfruit Freezedried
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Buah Naga asli yang dikeringkan dengan teknologi freeze-dried, menjaga warna, rasa, dan nutrisinya tetap utuh.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Dragonfruit, Sugar, Vegetable Oil</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/BananaOven.jpg"
                                        alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Banana Oven Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Pisang dengan rasa manis alami dan tekstur renyah yang unik, camilan sehat untuk keluarga.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Bananas, Vegetable Oil</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/Tempeh.jpg"
                                        alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Tempeh Crisps
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik tempe renyah yang kaya akan protein, tanpa pewarna dan pastinya bikin nagih.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Tempeh, Vegetable Oil, Salt</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/KeripikUbi.jpg"
                                        alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Purple Sweet Potato Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik dari ubi ungu pilihan , ungu warnanya yang alami, renyah dan menyehatkan
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Purple Sweet Potato, Vegetable Oil, Salt</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/PisangRambak.jpg"
                                        alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Keripik Pisang Rambak
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik yang renyah rasanya, teksturnya kriuk, camilan cocok di segala waktu
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Bananas, Vegetable Oil, Salt</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/bombay.jpg"
                                        alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Onion Ring Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik bawang asli dengan cita rasa yang khas, renyah, gurih cocok sebagai camilan keluarga
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Onions, Wheat Flour, Vegetable Oil</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/mushroom.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Mushroom Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Jamur renyah dengan rasa otentik jamur, cocok sebagai camilan unik yang bikin penasaran.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Mushroom, Vegetable Oil, Salt</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/pineapple.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Pineapple Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Nanas dengan rasa asam manis yang menyegarkan
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Pineapple, Sugar, Citric Acid</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/longbean.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Long Bean Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik sayur dari kacang panjang asli, teksturnya garing dengan rasa ringan dan gurih.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Long Beans, Vegetable Oil, Salt</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/tempehsago.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Tempeh Sago Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Tempe Sagu dengan perpaduan tempe yang gurih dan tekstur renyah dari sagu.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Tempeh, Sago, Vegetable Oil, Salt</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/longan.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Longan Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Kelengkeng yang manis dan kriuknya menyehatkan
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Longan, Sugar</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/KeripikCasava.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Cassava Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Singkong gurih dengan kerenyahan alami, cocok temani waktu anda.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Cassava, Vegetable Oil, Salt</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/nangka.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Ripe Jackfruit Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Nangka matang dengan rasa yang khas, pas untuk camilan keluarga anda.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Jackfruit, Sugar, Vegetable Oil</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/kelapa.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Coconut Freezedried
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Kelapa yang dibekukan dengan rasa manis dan aroma khas kelapa yang segar.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Coconut, Sugar</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/salak.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Snakefruit Freezedried
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Salak kering beku dengan rasa manis asam yang menyegarkan, pas untuk camilan kamu.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Snakefruit, Sugar</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/paprika.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Paprika Chips
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Sehat dari Paprika merah pilihan yang diolah tanpa pewarna dan renyahnya bikin ketagihan
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Paprika, Vegetable Oil, Salt</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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

                        <div class="group relative">
                            <div class="relative">
                                <div class="aspect-[3/4] w-full mb-3 sm:mb-4 rounded overflow-hidden">
                                    <img class="w-full h-full object-cover object-center" src="product_compressed/manggofreeze.jpg" alt="content">
                                </div>
                                <h2 class="text-sm sm:text-base md:text-lg text-gray-800 font-semibold mb-1 sm:mb-2">
                                    Mango Freedried
                                </h2>
                                <p class="leading-relaxed text-xs sm:text-sm text-gray-600 font-light h-16">
                                    Keripik Mangga yang dibekukan dengan manis alami dan sedikit asam yang menyegarkan.
                                </p>
                                <div class="flex justify-center items-center mt-3 w-full">
                                    <a href="https://wa.me/+6285184635509" target="_blank"
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
                            <div class="absolute rounded inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center text-white text-center px-4">
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Ingredients</h3>
                                    <p class="text-sm text-gray-200">Mango, Sugar</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="font-semibold text-base">Expire Date</h3>
                                    <p class="text-sm text-gray-200">12 months</p>
                                </div>
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


                    {{-- else --}}
                    </div>
                    <p id="notFoundMessage" class="text-center text-gray-500 mt-8 hidden h-80">Produk tidak ditemukan.</p>

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
    // navbar
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

    document.getElementById('searchInput').addEventListener('input', function () {
        const query = this.value.toLowerCase();
        const allCards = document.querySelectorAll('[class*="grid"] > div');
        let visibleCount = 0;

        allCards.forEach(card => {
            const title = card.querySelector('h2')?.textContent.toLowerCase() || '';
            const desc = card.querySelector('p')?.textContent.toLowerCase() || '';

            if (title.includes(query) || desc.includes(query)) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        document.getElementById('notFoundMessage').classList.toggle('hidden', visibleCount > 0);
    });

    // product
    document.addEventListener("DOMContentLoaded", function () {
        const grid = document.getElementById("product-grid");
        const products = Array.from(grid.children);

        // Urutkan berdasarkan isi dari h2 (judul produk)
        const sorted = products.sort((a, b) => {
            const titleA = a.querySelector("h2").textContent.trim().toLowerCase();
            const titleB = b.querySelector("h2").textContent.trim().toLowerCase();
            return titleA.localeCompare(titleB);
        });

        // Kosongkan grid, lalu tambahkan kembali dalam urutan baru
        grid.innerHTML = "";
        sorted.forEach(product => grid.appendChild(product));
    });
</script>

</html>