
<!DOCTYPE html>
<html>
  <head>
    <title>Famchips</title>
    <link rel="icon" href="{{ asset('images/logo2.png') }}" type="image/png" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
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
                    <img src="{{ asset('images/logo.png') }}" class="h-8 sm:h-10 md:h-12" alt="Famchips Logo" />
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

        <section class="bg-white w-full my-12 sm:my-16 md:my-24">
            <div class="max-w-screen-xl mx-auto flex flex-col justify-center px-4 sm:px-6">
                <div class="text-center mb-8 sm:mb-10 md:mb-12 mt-12 sm:mt-16 md:mt-24">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-primary mb-4 sm:mb-5">Galleries
                    </h2>
                    <p
                        class="text-text-second text-sm sm:text-base md:text-lg xl:text-xl font-light mx-auto leading-relaxed max-w-3xl">
                        This Is Our Gallery
                    </p>
                </div>


                <div class="w-full flex flex-col">
                    <div class="grid grid-cols-2 gap-2">
                        <div class="w-full">
                            <a data-fancybox="gallery" href="https://i.pinimg.com/736x/78/1f/fa/781ffa691906490c64a7aa49fb031942.jpg">
                                <img 
                                    class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                    src="https://i.pinimg.com/736x/78/1f/fa/781ffa691906490c64a7aa49fb031942.jpg" 
                                >
                            </a>
                            <div class="grid grid-cols-2 gap-2 mt-2">
                                <a data-fancybox="gallery" href="https://i.pinimg.com/736x/99/87/ef/9987efd13bba539e90e6c48dd8142826.jpg">
                                    <img 
                                        class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                        src="https://i.pinimg.com/736x/99/87/ef/9987efd13bba539e90e6c48dd8142826.jpg" 
                                    >
                                </a>
                                <a data-fancybox="gallery" href="https://i.pinimg.com/1200x/f3/8d/56/f38d564c8a0bb37d6755793bb1d0701e.jpg">
                                    <img 
                                        class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                        src="https://i.pinimg.com/1200x/f3/8d/56/f38d564c8a0bb37d6755793bb1d0701e.jpg" 
                                    >
                                </a>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="grid grid-cols-2 gap-2 mb-2">
                                <a data-fancybox="gallery" href="https://i.pinimg.com/1200x/f4/9b/a8/f49ba877dc20b51b5db1bf48d23ec485.jpg">
                                    <img 
                                        class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                        src="https://i.pinimg.com/1200x/f4/9b/a8/f49ba877dc20b51b5db1bf48d23ec485.jpg" 
                                    >
                                </a>
                                <a data-fancybox="gallery" href="https://i.pinimg.com/1200x/8a/7a/f1/8a7af10b51f97c9476806adb3d55f76a.jpg">
                                    <img 
                                        class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                        src="https://i.pinimg.com/1200x/8a/7a/f1/8a7af10b51f97c9476806adb3d55f76a.jpg" 
                                    >
                                </a>
                            </div>
                            <a data-fancybox="gallery" href="https://i.pinimg.com/1200x/a9/79/60/a97960255b38310603787580e587c320.jpg">
                                <img 
                                    class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                    src="https://i.pinimg.com/1200x/a9/79/60/a97960255b38310603787580e587c320.jpg" 
                                >
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-4 gap-2 mt-2">
                        <a data-fancybox="gallery" href="https://i.pinimg.com/1200x/dd/3b/fe/dd3bfe947ef88678b74b4417fb21b7ea.jpg">
                            <img 
                                class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                src="https://i.pinimg.com/1200x/dd/3b/fe/dd3bfe947ef88678b74b4417fb21b7ea.jpg" 
                            >
                        </a>
                        <a data-fancybox="gallery" href="https://i.pinimg.com/736x/9b/30/c5/9b30c56fdd77c11fc237d0f07e7629d2.jpg">
                            <img 
                                class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                src="https://i.pinimg.com/736x/9b/30/c5/9b30c56fdd77c11fc237d0f07e7629d2.jpg" 
                            >
                        </a>
                        <a data-fancybox="gallery" href="https://i.pinimg.com/736x/c3/4a/7b/c34a7bab711df3d793702c83343a976a.jpg">
                            <img 
                                class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                src="https://i.pinimg.com/736x/c3/4a/7b/c34a7bab711df3d793702c83343a976a.jpg" 
                            >
                        </a>
                        <a data-fancybox="gallery" href="https://i.pinimg.com/1200x/a9/79/60/a97960255b38310603787580e587c320.jpg">
                            <img 
                                class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                src="https://i.pinimg.com/1200x/a9/79/60/a97960255b38310603787580e587c320.jpg" 
                            >
                        </a>
                    </div>

                    <div class="w-full mt-2">
                        <a data-fancybox="gallery" href="https://i.pinimg.com/1200x/0b/27/34/0b2734eef4cbd0b2fb3fb208743747b7.jpg">
                            <img 
                                class="rounded-md md:rounded-xl h-40 md:h-[414px] w-full object-cover"
                                src="https://i.pinimg.com/1200x/0b/27/34/0b2734eef4cbd0b2fb3fb208743747b7.jpg" 
                            >
                        </a>
                    </div>

                    <div class="grid grid-cols-4 gap-2 mt-2">
                        <a data-fancybox="gallery" href="https://i.pinimg.com/736x/a7/77/df/a777dfac14fcdbea9cce94c8d0b6877e.jpg">
                            <img 
                                class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                src="https://i.pinimg.com/736x/a7/77/df/a777dfac14fcdbea9cce94c8d0b6877e.jpg" 
                            >
                        </a>
                        <a data-fancybox="gallery" href="https://i.pinimg.com/1200x/49/ef/12/49ef12273ccb5f653b02ddde9cf614be.jpg">
                            <img 
                                class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                src="https://i.pinimg.com/1200x/49/ef/12/49ef12273ccb5f653b02ddde9cf614be.jpg" 
                            >
                        </a>
                        <a data-fancybox="gallery" href="">
                            <img 
                                class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                src="https://i.pinimg.com/736x/e8/71/90/e87190638dabfd5cb8f3f1179dc09608.jpg" 
                            >
                        </a>
                        <a data-fancybox="gallery" href="">
                            <img 
                                class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                src="https://i.pinimg.com/736x/10/73/9e/10739ec875b40a85374e90820bf32f7f.jpg" 
                            >
                        </a>
                        <a data-fancybox="gallery" href="">
                            <img 
                                class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                src="https://i.pinimg.com/736x/d1/dc/03/d1dc03f9f798d5fb561a6b4e361dabff.jpg" 
                            >
                        </a>
                        <a data-fancybox="gallery" href="">
                            <img 
                                class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                src="https://i.pinimg.com/736x/9b/30/c5/9b30c56fdd77c11fc237d0f07e7629d2.jpg" 
                            >
                        </a>
                        <a data-fancybox="gallery" href="">
                            <img 
                                class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                src="https://i.pinimg.com/736x/c3/4a/7b/c34a7bab711df3d793702c83343a976a.jpg" 
                            >
                        </a>
                        <a data-fancybox="gallery" href="">
                            <img 
                                class="rounded-md md:rounded-xl aspect-[9/16] object-cover"
                                src="https://i.pinimg.com/1200x/a9/79/60/a97960255b38310603787580e587c320.jpg" 
                            >
                        </a>
                    </div>

                    <div class="w-full grid grid-cols-2 gap-2 mt-2">
                        <a data-fancybox="gallery" href="">
                            <img 
                                class="rounded-md md:rounded-xl h-40 md:h-[414px] w-full object-cover"
                                src="https://i.pinimg.com/1200x/1a/f5/30/1af530ac555a2c977495c2d01ce11dc2.jpg" 
                            >
                        </a>
                        <a data-fancybox="gallery" href="">
                            <img 
                                class="rounded-md md:rounded-xl h-40 md:h-[414px] w-full object-cover"
                                src="https://i.pinimg.com/1200x/10/ff/9a/10ff9a65bfa31890dbff2621a4e61e87.jpg" 
                            >
                        </a>
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