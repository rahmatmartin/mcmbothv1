<!-- simulation.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simulasi Booth — MCMBooth</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 text-gray-800 px-6">

    <!-- Header -->
    @include('layout.header')

    <section class="container mx-auto py-16">
        <h1 class="text-4xl font-bold mb-10 text-center">Simulasi Harga Booth</h1>

        <!-- SIMULATOR WRAPPER -->
        <div class="bg-white shadow-xl rounded-2xl p-8 max-w-4xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                <!-- LEFT INPUT SECTION -->
                <div class="space-y-6">
                    <div>
                        <label class="font-semibold">Jenis Booth</label>
                        <select id="jenisBooth" class="w-full mt-2 p-3 rounded-lg border border-gray-300">
                            <option value="10">Booth Standard</option>
                            <option value="15">Booth Premium</option>
                            <option value="20">Booth Custom</option>
                        </select>
                    </div>

                    <div>
                        <label class="font-semibold">Ukuran Booth</label>
                        <select id="ukuranBooth" class="w-full mt-2 p-3 rounded-lg border border-gray-300">
                            <option value="1">2×2 m</option>
                            <option value="1.5">3×3 m</option>
                            <option value="2">4×4 m</option>
                        </select>
                    </div>

                    <div>
                        <label class="font-semibold">Tambahan Fitur</label>
                        <div class="space-y-2 mt-2">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" value="3" class="addon" />
                                <span>Lighting Premium</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" value="5" class="addon" />
                                <span>Branding Full Printing</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" value="4" class="addon" />
                                <span>Rak Display Tambahan</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- RIGHT OUTPUT SECTION -->
                <div class="bg-gray-100 p-6 rounded-2xl shadow-inner">
                    <h2 class="text-2xl font-semibold mb-4">Estimasi Biaya</h2>
                    <p class="text-lg text-gray-600 mb-6">Hasil perhitungan otomatis berdasarkan pilihan Anda.</p>

                    <div class="text-center py-10 bg-white rounded-xl shadow-md">
                        <p class="text-gray-500">Total Estimasi</p>
                        <h1 id="totalBiaya" class="text-4xl font-bold text-blue-600 mt-2">Rp 0</h1>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10">
                <button onclick="hitungSimulasi()" class="px-8 py-3 bg-blue-600 text-white rounded-xl shadow hover:bg-blue-700">Hitung Harga</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layout.footer')

    <script>
        function formatRupiah(num) {
            return "Rp " + num.toLocaleString("id-ID");
        }

        function hitungSimulasi() {
            let jenis = parseFloat(document.getElementById('jenisBooth').value);
            let ukuran = parseFloat(document.getElementById('ukuranBooth').value);

            let addons = document.querySelectorAll('.addon:checked');
            let totalAddon = 0;
            addons.forEach(a => totalAddon += parseFloat(a.value));

            let total = (jenis * 1_000_000) * ukuran + (totalAddon * 1_000_000);

            document.getElementById('totalBiaya').innerText = formatRupiah(total);
        }
    </script>
</body>
</html>