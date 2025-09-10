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

        
        <section class="w-full my-16 md:my-24">
            <div class="flex items-center justify-center max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
                
                <div class="mt-10 text-center">
                    <h2 class="text-2xl md:text-3xl font-semibold text-primary mb-4 sm:mb-5 md:leading-relaxed capitalize">
                        Menggali Manfaat Buah dan Sayur untuk Kesehatan Tubuh serta Menjelajahi Kandungan Didalamnya
                    </h2>
                    <div class="flex items-center justify-center text-sm mt-5 mb-10">
                        <div class="flex flex-row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <p class="font-light pl-2">
                                16 September 2025
                            </p>
                        </div>
                    </div>

                    <img class="aspect-video rounded-xl mb-10" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80">

                    <p class="text-base leading-normal text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et laoreet turpis, finibus faucibus nunc. Donec nulla sem, lacinia a metus et, maximus sagittis tortor. Maecenas dictum eros et commodo auctor. Ut elementum consectetur congue. In porttitor, sem quis mattis euismod, magna felis euismod justo, eget sodales sem tortor a felis. Etiam laoreet varius lacus, at pharetra ligula congue ac. Nulla lacus ex, consequat eget interdum non, fermentum eget mi. Praesent id sem nec nulla hendrerit ultrices non sit amet libero. Sed a nisi odio. Donec pellentesque efficitur lectus, non pellentesque magna imperdiet at. Nullam vestibulum nisi ac euismod molestie. Curabitur risus dui, feugiat in ipsum eu, rutrum egestas arcu.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et laoreet turpis, finibus faucibus nunc. Donec nulla sem, lacinia a metus et, maximus sagittis tortor. Maecenas dictum eros et commodo auctor. Ut elementum consectetur congue. In porttitor, sem quis mattis euismod, magna felis euismod justo, eget sodales sem tortor a felis. Etiam laoreet varius lacus, at pharetra ligula congue ac. Nulla lacus ex, consequat eget interdum non, fermentum eget mi. Praesent id sem nec nulla hendrerit ultrices non sit amet libero. Sed a nisi odio. Donec pellentesque efficitur lectus, non pellentesque magna imperdiet at. Nullam vestibulum nisi ac euismod molestie. Curabitur risus dui, feugiat in ipsum eu, rutrum egestas arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et laoreet turpis, finibus faucibus nunc. Donec nulla sem, lacinia a metus et, maximus sagittis tortor. Maecenas dictum eros et commodo auctor. Ut elementum consectetur congue. In porttitor, sem quis mattis euismod, magna felis euismod justo, eget sodales sem tortor a felis. Etiam laoreet varius lacus, at pharetra ligula congue ac. Nulla lacus ex, consequat eget interdum non, fermentum eget mi. Praesent id sem nec nulla hendrerit ultrices non sit amet libero. Sed a nisi odio. Donec pellentesque efficitur lectus, non pellentesque magna imperdiet at. Nullam vestibulum nisi ac euismod molestie. Curabitur risus dui, feugiat in ipsum eu, rutrum egestas arcu.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et laoreet turpis, finibus faucibus nunc. Donec nulla sem, lacinia a metus et, maximus sagittis tortor. Maecenas dictum eros et commodo auctor. Ut elementum consectetur congue. In porttitor, sem quis mattis euismod, magna felis euismod justo, eget sodales sem tortor a felis. Etiam laoreet varius lacus, at pharetra ligula congue ac. Nulla lacus ex, consequat eget interdum non, fermentum eget mi. Praesent id sem nec nulla hendrerit ultrices non sit amet libero. Sed a nisi odio. Donec pellentesque efficitur lectus, non pellentesque magna imperdiet at. Nullam vestibulum nisi ac euismod molestie. Curabitur risus dui, feugiat in ipsum eu, rutrum egestas arcu.  Nulla lacus ex, consequat eget interdum non, fermentum eget mi. Praesent id sem nec nulla hendrerit ultrices non sit amet libero. Sed a nisi odio. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et laoreet turpis, finibus faucibus nunc. Donec nulla sem, lacinia a metus et, maximus sagittis tortor. Maecenas dictum eros et commodo auctor. Ut elementum consectetur congue. In porttitor, sem quis mattis euismod, magna felis euismod justo, eget sodales sem tortor a felis. Etiam laoreet varius lacus, at pharetra ligula congue ac. Nulla lacus ex, consequat eget interdum non, fermentum eget mi. Praesent id sem nec nulla hendrerit ultrices non sit amet libero. Sed a nisi odio. Donec pellentesque efficitur lectus, non pellentesque magna imperdiet at. Nullam vestibulum nisi ac euismod molestie. Curabitur risus dui, feugiat in ipsum eu, rutrum egestas arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et laoreet turpis, finibus faucibus nunc. Donec nulla sem, lacinia a metus et, maximus sagittis tortor. Maecenas dictum eros et commodo auctor. Ut elementum consectetur congue. In porttitor, sem quis mattis euismod, magna felis euismod justo, eget sodales sem tortor a felis. Etiam laoreet varius lacus, at pharetra ligula congue ac. Nulla lacus ex, consequat eget interdum non, fermentum eget mi. Praesent id sem nec nulla hendrerit ultrices non sit amet libero. Sed a nisi odio. Donec pellentesque efficitur lectus, non pellentesque magna imperdiet at. Nullam vestibulum nisi ac euismod molestie. Curabitur risus dui, feugiat in ipsum eu, rutrum egestas arcu.. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et laoreet turpis, finibus faucibus nunc. Donec nulla sem, lacinia a metus et, maximus sagittis tortor. Maecenas dictum eros et commodo auctor. Ut elementum consectetur congue. In porttitor, sem quis mattis euismod, magna felis euismod justo, eget sodales sem tortor a felis. Etiam laoreet varius lacus, at pharetra ligula congue ac. Nulla lacus 
                    </p>

                    <div class="flex items-center justify-start text-sm mt-10">
                        <div class="flex flex-row items-center space-x-3">
                            <p class="font-semibold">
                                Bagikan:
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="flex items-center justify-center max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
            <h2 class="text-3xl font-semibold text-primary mb-4 sm:mb-5 text-center">
                Others Blog
            </h2>

            <div class="mx-auto mt-5 md:mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-10 lg:mx-0 lg:max-w-none lg:grid-cols-3">
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

            <div class="mt-10">
                <a href="artikel.html"
                    class="flex items-center h-10 px-4 text-white bg-primary hover:bg-white hover:text-primary border hover:border-primary focus:outline-none font-medium rounded-full text-sm lg:text-base transition-colors">
                    Discover More
                </a>
            </div>
        </div>
    </div>
</body>