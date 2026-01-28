<header id="smartHeader" 
    class="backdrop-blur-md bg-white/70 shadow-sm sticky top-0 z-50 border-b border-white/40 transition-transform duration-300">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- LOGO -->
        <h1 class="text-3xl font-extrabold tracking-tight bg-gradient-to-r from-blue-600 to-purple-600 text-transparent bg-clip-text">
            MCMBooth
        </h1>

        <!-- MOBILE BUTTON -->
        <button id="mobileMenuBtn" 
            class="md:hidden text-gray-700 hover:text-blue-600 transition-transform duration-200 active:scale-90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- NAV DESKTOP -->
        <nav class="hidden md:flex space-x-8 text-lg font-medium">
            <a href="{{ url('/') }}" 
                class="hover:text-blue-600 transition-colors duration-200">Home</a>

            <a href="{{ route('product') }}" 
                class="hover:text-blue-600 transition-colors duration-200">Produk</a>

            <a href="{{ url('/simulation') }}" 
                class="hover:text-blue-600 transition-colors duration-200">Simulasi</a>

            <a href="{{ url('/contact') }}" 
                class="hover:text-blue-600 transition-colors duration-200">Kontak</a>
        </nav>
    </div>

    <!-- NAV MOBILE -->
    <nav id="mobileMenu" 
         class="md:hidden hidden bg-white/90 backdrop-blur-md shadow-inner border-t border-gray-200 animate-fadein">
        <div class="px-6 py-4 flex flex-col space-y-4 text-lg font-medium">
            <a href="{{ url('/') }}" class="hover:text-blue-600 transition">Home</a>
            <a href="{{ route('product') }}" class="hover:text-blue-600 transition">Produk</a>
            <a href="{{ url('/simulation') }}" class="hover:text-blue-600 transition">Simulasi</a>
            <a href="{{ url('/contact') }}" class="hover:text-blue-600 transition">Kontak</a>
        </div>
    </nav>

    <script>
        const btn = document.getElementById('mobileMenuBtn');
        const menu = document.getElementById('mobileMenu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</header>
<script>
    let lastScroll = 0;
    const header = document.getElementById('smartHeader');

    window.addEventListener('scroll', () => {
        const current = window.pageYOffset;

        // Scroll ke bawah → sembunyikan header
        if (current > lastScroll && current > 80) {
            header.style.transform = "translateY(-100%)";
        } 
        // Scroll ke atas → tampilkan header
        else {
            header.style.transform = "translateY(0)";
        }

        lastScroll = current;
    });
</script>

<style>
    @keyframes fadein {
        from { opacity: 0; transform: translateY(-5px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadein {
        animation: fadein .25s ease-out;
    }
</style>
