<!-- Navbar Modern -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

<nav class="bg-gray-900 shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <a href="{{ url('/welcome') }}" class="flex items-center space-x-2">
                <i class="fa-solid fa-motorcycle text-yellow-400 text-xl"></i>
                <span class="text-lg font-semibold text-white">Baherindo Motor</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8 text-white font-medium">
                <a href="{{ url('/welmob') }}" class="hover:text-yellow-400 transition-colors duration-300">Beli Mobil</a>
                <a href="{{ url('/about') }}" class="hover:text-yellow-400 transition-colors duration-300">About</a>
                <a href="{{ url('/contact') }}" class="hover:text-yellow-400 transition-colors duration-300">Contact</a>
                <a href="{{ url('/motor') }}" class="hover:text-yellow-400 transition-colors duration-300">+Tambah Motor</a>
                <a href="{{ url('/mobil') }}" class="hover:text-yellow-400 transition-colors duration-300">+Tambah Mobil</a>
                <a href="https://wa.me/628xxxxxxxxxx" target="_blank" 
                   class="bg-green-600 hover:bg-green-500 text-white px-4 py-1.5 rounded-full flex items-center gap-2 transition">
                    <i class="fab fa-whatsapp"></i> Chat Ki Baher
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden text-white focus:outline-none">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden px-4 pb-4 space-y-2 bg-gray-900 text-white font-medium">
        <a href="{{ url('/welmob') }}" class="block hover:text-yellow-400 transition-colors">Beli Mobil</a>
        <a href="{{ url('/about') }}" class="block hover:text-yellow-400 transition-colors">About</a>
        <a href="{{ url('/contact') }}" class="block hover:text-yellow-400 transition-colors">Contact</a>
        <a href="{{ url('/motor') }}" class="block hover:text-yellow-400 transition-colors">+Tambah Motor</a>
        <a href="{{ url('/mobil') }}" class="block hover:text-yellow-400 transition-colors">+Tambah Mobil</a>
        <a href="https://wa.me/628xxxxxxxxxx" target="_blank" 
           class="block bg-green-600 hover:bg-green-500 text-white px-4 py-1.5 rounded-full flex items-center gap-2 transition">
            <i class="fab fa-whatsapp"></i> Chat Ki Baher
        </a>
    </div>
</nav>

<!-- Script Toggle Mobile Menu -->
<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        menuBtn.innerHTML = mobileMenu.classList.contains('hidden')
            ? '<i class="fa-solid fa-bars text-xl"></i>'
            : '<i class="fa-solid fa-xmark text-xl"></i>';
    });
</script>
