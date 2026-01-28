<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produk Booth — MCMBooth</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 text-gray-800 px-6">

    <!-- Header -->
    @include('layout.header')

    <!-- Hero Carousel with Overlay -->
    <section class="relative w-full h-[280px] overflow-hidden">
        <!-- Carousel Container -->
            <div class="w-full h-[400px] overflow-hidden relative">

                <!-- Carousel Wrapper -->
                <div id="carouselWrapper" class="flex w-full h-full transition-transform duration-700">

                    <!-- Slide 1 -->
                    <div class="min-w-full h-full">
                        <img src="https://i.pinimg.com/1200x/ca/2a/e9/ca2ae9ffb91fbe4a28db314271be2746.jpg"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Slide 2 -->
                    <div class="min-w-full h-full">
                        <img src="https://i.pinimg.com/1200x/fe/d5/d6/fed5d6e765797b54ee7f8009c6848ef5.jpg"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Slide 3 -->
                    <div class="min-w-full h-full">
                        <img src="https://i.pinimg.com/1200x/ae/80/90/ae8090aa67ad8026e7a05052206a0864.jpg"
                            class="w-full h-full object-cover" />
                    </div>

                </div>
            </div>


        <!-- DARK GRADIENT OVERLAY -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/30 to-black/50"></div>

        <!-- TEXT OVERLAY (TOP OF CAROUSEL) -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-6">
            <h1 class="text-5xl font-bold mb-4 drop-shadow-lg">Produk Booth</h1>
            <p class="text-lg max-w-2xl drop-shadow-md">
                Temukan berbagai pilihan booth eksklusif yang dirancang untuk memberikan daya tarik maksimal pada setiap event atau pameran.
            </p>
        </div>

        <!-- Left Button -->
        <button onclick="prevSlide()"
            class="absolute top-1/2 left-4 -translate-y-1/2 bg-white/70 backdrop-blur shadow hover:bg-white p-3 rounded-full">
            ◀
        </button>

        <!-- Right Button -->
        <button onclick="nextSlide()"
            class="absolute top-1/2 right-4 -translate-y-1/2 bg-white/70 backdrop-blur shadow hover:bg-white p-3 rounded-full">
            ▶
        </button>

    </section>

    <!-- Carousel JS -->
    <script>
        let index = 0;
        function showSlide() {
            const wrapper = document.getElementById("carouselWrapper");
            wrapper.style.transform = `translateX(-${index * 100}%)`;
        }
        function prevSlide() {
            index = (index === 0) ? 2 : index - 1;
            showSlide();
        }
        function nextSlide() {
            index = (index === 2) ? 0 : index + 1;
            showSlide();
        }
        setInterval(nextSlide, 6000);
    </script>


    <!-- Product Grid -->
    <section id="products" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6 text-center mb-12">
            <h3 class="text-4xl font-bold mb-4">Produk Unggulan Kami</h3>
            <p class="text-gray-600 text-lg">Berbagai jenis booth yang dirancang untuk memberikan pengalaman terbaik bagi pengunjung event Anda.</p>
        </div>

        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <img src="https://i.pinimg.com/736x/34/9b/de/349bdea0cf502aa5663776931b506538.jpg" class="rounded-xl mb-4" />
                <h4 class="text-2xl font-bold mb-2">Booth Minimalis</h4>
                <p class="text-gray-600 mb-4">Desain elegan, cocok untuk brand activation dan pameran modern.</p>
                <a href="#" class="text-blue-600 font-semibold hover:underline">Detail Produk →</a>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
              <img src="https://i.pinimg.com/1200x/4f/6a/e2/4f6ae2412931c4971bdf9a4872d781aa.jpg" alt="Booth Premium" class="rounded-xl mb-4" />
                <h4 class="text-2xl font-bold mb-2">Booth Premium</h4>
                <p class="text-gray-600 mb-4">Material high-quality dengan tampilan eksklusif dan mewah.</p>
                <a href="#" class="text-blue-600 font-semibold hover:underline">Detail Produk →</a>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <img src="https://i.pinimg.com/736x/73/5d/d1/735dd12f4a35d8732910f5fd6a7a708c.jpg" class="rounded-xl mb-4" />
                <h4 class="text-2xl font-bold mb-2">Booth Custom</h4>
                <p class="text-gray-600 mb-4">Buat booth sesuai konsep dan kebutuhan brand Anda.</p>
                <a href="#" class="text-blue-600 font-semibold hover:underline">Detail Produk →</a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-white">
        <div class="container mx-auto px-6 text-center mb-12">
            <h3 class="text-4xl font-bold mb-4">Portofolio Proyek</h3>
            <p class="text-gray-600 text-lg">Beberapa hasil pekerjaan booth yang telah kami produksi untuk brand ternama.</p>
        </div>

        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
            <img src="https://i.pinimg.com/736x/18/4b/be/184bbecf30062354ce10b581f1a1b929.jpg" class="rounded-2xl shadow-lg hover:scale-105 transition" />
            <img src="https://i.pinimg.com/736x/4f/fd/b0/4ffdb0de7019a0f33459ca91d0b12789.jpg" class="rounded-2xl shadow-lg hover:scale-105 transition" />
            <img src="https://i.pinimg.com/1200x/02/a4/42/02a442a14f4606909242ab0e66c898e8.jpg" class="rounded-2xl shadow-lg hover:scale-105 transition" />
        </div>
    </section>


<!-- PRODUCT DETAIL PAGE -->
    <section class="container mx-auto py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <img src="https://i.pinimg.com/1200x/bd/e8/1f/bde81f2d76b271f53a9ba274033eb831.jpg" class="rounded-2xl shadow-xl w-full" />
            <div>
                <h1 class="text-5xl font-bold mb-4">Booth Premium 3×3 m</h1>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    Booth premium ukuran 3×3 meter dengan desain modern, material kokoh,
                    lighting profesional, dan branding penuh. Cocok untuk event besar,
                    expo, pameran nasional, dan brand activation.
                </p>

                <h2 class="text-2xl font-semibold mb-3">Spesifikasi</h2>
                <ul class="space-y-2 text-gray-700 mb-6">
                    <li>• Struktur kayu + rangka besi</li>
                    <li>• Finishing HPL premium</li>
                    <li>• Backdrop branding full printing</li>
                    <li>• Rak display + meja kasir</li>
                    <li>• LED spotlight & lampu ambient</li>
                </ul>

                <h3 class="text-2xl font-semibold mb-3">Harga</h3>
                <p class="text-3xl font-bold text-blue-600 mb-8">Mulai dari Rp 15.000.000</p>

                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl shadow-md text-lg font-semibold">Hubungi Kami</a>
            </div>
        </div>

        <div class="mt-20">
            <h2 class="text-4xl font-bold mb-8">Fitur Unggulan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-white rounded-2xl shadow text-center">
                    <h3 class="font-semibold text-xl mb-2">Material Premium</h3>
                    <p class="text-gray-600">Menggunakan bahan berkualitas tinggi untuk ketahanan maksimal.</p>
                </div>
                <div class="p-6 bg-white rounded-2xl shadow text-center">
                    <h3 class="font-semibold text-xl mb-2">Desain Eksklusif</h3>
                    <p class="text-gray-600">Dirancang khusus mengikuti kebutuhan brand.</p>
                </div>
                <div class="p-6 bg-white rounded-2xl shadow text-center">
                    <h3 class="font-semibold text-xl mb-2">Instalasi Cepat</h3>
                    <p class="text-gray-600">Tim profesional memastikan pemasangan tepat waktu.</p>
                </div>
            </div>
        </div>

        <div class="mt-20">
            <h2 class="text-4xl font-bold mb-8">Galeri Foto</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <img src="https://i.pinimg.com/1200x/d2/56/2b/d2562b577c5d523386719667be7dc3d8.jpg" class="rounded-xl shadow" />
                <img src="https://i.pinimg.com/1200x/61/94/a1/6194a1e0abc70817ddb8cc17506ccd23.jpg" class="rounded-xl shadow" />
                <img src="https://i.pinimg.com/1200x/c1/cc/fd/c1ccfd82ce4c862f154614b54cd30af1.jpg" class="rounded-xl shadow" />
            </div>
        </div>
    </section>

        <!-- Footer -->
    @include('layout.footer')
    
</body>
</html>