<nav class="bg-white h-16 md:h-20 fixed top-0 left-0 w-full z-50">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto h-full px-4 sm:px-6">
        <a href="/" class="flex items-center space-x-2">
            <img src="{{ asset('images/logo.png') }}" class="h-8 sm:h-10 md:h-12" alt="Famchips Logo" />
        </a>

        {{-- Menu desktop --}}
        <ul class="hidden md:flex space-x-6 font-medium">
            <li><a href="/" class="hover:text-primary">Home</a></li>
            <li><a href="/products" class="hover:text-primary">Our Product</a></li>
            <li><a href="/gallery" class="hover:text-primary">Product Gallery</a></li>
            <li><a href="/articles" class="hover:text-primary">Blog</a></li>
            <li>
                <a href="https://wa.me/+6281333500579" target="_blank"
                   class="px-4 py-2 bg-primary text-white rounded-full hover:bg-white hover:text-primary border hover:border-primary">
                   Order Now
                </a>
            </li>
        </ul>
    </div>
</nav>
