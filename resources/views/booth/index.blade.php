<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MCMBooth — Professional Event Booth</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    @include('layout.header')

    <!-- Hero Section -->
    <section id="home" class="relative bg-white">
        <div class="container mx-auto px-6 py-24 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-5xl font-bold leading-tight mb-6">Solusi Booth Event Profesional<br/>Modern & Menarik</h2>
                <p class="text-lg text-gray-600 mb-8">Kami menyediakan booth premium untuk pameran, brand activation, dan berbagai kebutuhan event dengan desain modern dan kualitas terbaik.</p>
                <a href="{{ url('simulation') }}" class="px-8 py-4 bg-blue-600 text-white rounded-lg text-lg hover:bg-blue-700 transition shadow-lg">Simulasi</a>
            </div>

            <div>
                <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0" alt="Booth Image" class="rounded-2xl shadow-xl" />
            </div>
        </div>
    </section>

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

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-100">
    <div class="container mx-auto px-6 text-center mb-12">
        <h3 class="text-4xl font-bold mb-4">Testimoni</h3>
        <p class="text-gray-600 text-lg">Apa kata klien tentang layanan kami.</p>
    </div>

    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-2xl shadow">
            <p class="text-gray-700 italic mb-4">
                "Booth-nya rapi, cepat, dan hasilnya sesuai ekspektasi!"
            </p>
            <h4 class="font-bold text-xl">Rina – Event Organizer</h4>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-6 rounded-2xl shadow">
            <p class="text-gray-700 italic mb-4">
                "Pelayanan profesional dan sangat membantu branding kami."
            </p>
            <h4 class="font-bold text-xl">Dimas – Brand Manager</h4>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-6 rounded-2xl shadow">
            <p class="text-gray-700 italic mb-4">
                "Desain booth premium dan pengerjaan cepat!"
            </p>
            <h4 class="font-bold text-xl">Selvy – Exhibition Specialist</h4>
        </div>
    </div>
</section>


    <!-- Footer -->
    @include('layout.footer')
</body>
</html>
