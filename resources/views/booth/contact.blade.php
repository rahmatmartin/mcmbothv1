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

<!-- HERO CONTACT -->
<section class="relative bg-gradient-to-br from-blue-700 via-blue-800 to-gray-900 text-white py-32 overflow-hidden">
    <!-- Glow Effect -->
    <div class="absolute inset-0 opacity-30 blur-3xl bg-blue-500"></div>

    <div class="container mx-auto px-6 relative text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6 tracking-tight">
            Hubungi Kami
        </h1>
        <p class="text-lg md:text-2xl max-w-3xl mx-auto text-gray-200">
            Kami siap membantu mewujudkan booth terbaik dengan desain premium dan hasil profesional.
        </p>
    </div>
</section>

<!-- CONTACT FORM -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- Info Box -->
        <div class="space-y-8">
            <h2 class="text-4xl font-bold text-gray-900 leading-tight">
                Yuk, Mulai Kolaborasi Bersama Kami
            </h2>
            <p class="text-gray-600 text-lg">
                Tim kami akan merespon pesan Anda dengan cepat untuk konsultasi desain, penawaran, ataupun informasi lebih lanjut.
            </p>

            <div class="space-y-5">
                <div class="flex items-center space-x-4 p-4 bg-white rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-blue-600 text-white flex items-center justify-center rounded-full text-2xl">
                        📞
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">Telepon</h4>
                        <p class="text-gray-600">+62 812-3456-7890</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4 p-4 bg-white rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-blue-600 text-white flex items-center justify-center rounded-full text-2xl">
                        📧
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">Email</h4>
                        <p class="text-gray-600">support@mcmbooth.id</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4 p-4 bg-white rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-blue-600 text-white flex items-center justify-center rounded-full text-2xl">
                        📍
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">Lokasi</h4>
                        <p class="text-gray-600">Bandung, Jawa Barat</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Box -->
        <div class="bg-white/70 backdrop-blur-xl p-10 rounded-3xl shadow-2xl border border-white/30">
            <h3 class="text-3xl font-bold mb-6 text-gray-900">Kirim Pesan Anda</h3>

            <form class="space-y-6">
                <div>
                    <label class="block font-semibold mb-1">Nama</label>
                    <input type="text" class="w-full p-3 rounded-xl border focus:ring-4 focus:ring-blue-300 transition" />
                </div>

                <div>
                    <label class="block font-semibold mb-1">Email</label>
                    <input type="email" class="w-full p-3 rounded-xl border focus:ring-4 focus:ring-blue-300 transition" />
                </div>

                <div>
                    <label class="block font-semibold mb-1">Pesan</label>
                    <textarea rows="4" class="w-full p-3 rounded-xl border focus:ring-4 focus:ring-blue-300 transition"></textarea>
                </div>

                <button
                    class="w-full py-4 bg-blue-700 hover:bg-blue-800 text-white font-semibold rounded-xl shadow-lg transition transform hover:-translate-y-1">
                    Kirim Pesan ✨
                </button>
            </form>
        </div>
    </div>
</section>

<!-- MAP SECTION -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h3 class="text-4xl font-bold text-center mb-10">Lokasi Kami</h3>

        <div class="rounded-3xl overflow-hidden shadow-xl border border-gray-200">
            <iframe
                class="w-full h-96"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.1129999999!2d107.62!3d-6.90"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>

</body>
</html>
