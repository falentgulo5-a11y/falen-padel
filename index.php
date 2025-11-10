<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padel Court Booking - Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        
        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(34, 197, 94, 0.5);
            }
            50% {
                box-shadow: 0 0 40px rgba(34, 197, 94, 0.8);
            }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .float {
            animation: float 3s ease-in-out infinite;
        }
        
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .gradient-green {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
        }
        
        .gradient-gold {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="gradient-bg text-white shadow-lg sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <svg class="w-10 h-10 float" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a8 8 0 100 16 8 8 0 000-16zM8 10a1 1 0 112 0v3a1 1 0 11-2 0v-3zm1-4a1 1 0 100 2 1 1 0 000-2z"/>
                    </svg>
                    <span class="text-2xl font-bold">PadelCourt</span>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="login.php" class="px-6 py-2 bg-white text-purple-600 rounded-full font-semibold hover:bg-gray-100 transition duration-300">Masuk</a>
                    <a href="daftar.php" class="px-6 py-2 bg-green-500 text-white rounded-full font-semibold hover:bg-green-600 transition duration-300 pulse-glow">Daftar Akun</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="gradient-bg text-white py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 fade-in-up">
                    <h1 class="text-5xl font-bold mb-4">Selamat Datang di PadelCourt</h1>
                    <p class="text-xl mb-8">Booking lapangan padel terbaik dengan fasilitas premium. Nikmati pengalaman bermain padel yang tak terlupakan!</p>
                    <a href="#booking" class="inline-block px-8 py-4 bg-green-500 text-white rounded-full font-bold text-lg hover:bg-green-600 transition duration-300 transform hover:scale-105">Booking Sekarang</a>
                </div>
                <div class="md:w-1/2 mt-10 md:mt-0">
                    <div class="float">
                        <svg class="w-full h-auto" viewBox="0 0 500 500" fill="none">
                            <rect x="50" y="50" width="400" height="400" rx="20" fill="white" opacity="0.1"/>
                            <rect x="100" y="100" width="300" height="300" rx="10" fill="white" opacity="0.2"/>
                            <line x1="250" y1="100" x2="250" y2="400" stroke="white" stroke-width="4" opacity="0.3"/>
                            <line x1="100" y1="250" x2="400" y2="250" stroke="white" stroke-width="4" opacity="0.3"/>
                            <circle cx="250" cy="250" r="60" fill="white" opacity="0.3"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Harga Lapangan -->
    <section id="booking" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-4 text-gray-800">Pilih Lapangan Anda</h2>
            <p class="text-center text-gray-600 mb-12">Tersedia lapangan regular dan VIP dengan fasilitas terbaik</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <!-- Lapangan Biasa 1-3 -->
                <div class="card-hover bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-green-500 fade-in-up">
                    <div class="gradient-green p-6 text-white text-center">
                        <h3 class="text-2xl font-bold">Court 1</h3>
                        <p class="text-sm opacity-90">Regular</p>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-4">
                            <span class="text-4xl font-bold text-green-600">100K</span>
                            <span class="text-gray-600">/jam</span>
                        </div>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Lapangan Standar
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Pencahayaan LED
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Ruang Ganti
                            </li>
                        </ul>
                        <button class="w-full py-3 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition duration-300">Booking</button>
                    </div>
                </div>

                <div class="card-hover bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-green-500 fade-in-up" style="animation-delay: 0.1s">
                    <div class="gradient-green p-6 text-white text-center">
                        <h3 class="text-2xl font-bold">Court 2</h3>
                        <p class="text-sm opacity-90">Regular</p>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-4">
                            <span class="text-4xl font-bold text-green-600">100K</span>
                            <span class="text-gray-600">/jam</span>
                        </div>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Lapangan Standar
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Pencahayaan LED
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Ruang Ganti
                            </li>
                        </ul>
                        <button class="w-full py-3 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition duration-300">Booking</button>
                    </div>
                </div>

                <div class="card-hover bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-green-500 fade-in-up" style="animation-delay: 0.2s">
                    <div class="gradient-green p-6 text-white text-center">
                        <h3 class="text-2xl font-bold">Court 3</h3>
                        <p class="text-sm opacity-90">Regular</p>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-4">
                            <span class="text-4xl font-bold text-green-600">100K</span>
                            <span class="text-gray-600">/jam</span>
                        </div>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Lapangan Standar
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Pencahayaan LED
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Ruang Ganti
                            </li>
                        </ul>
                        <button class="w-full py-3 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition duration-300">Booking</button>
                    </div>
                </div>

                <!-- Lapangan VIP 1-2 -->
                <div class="card-hover bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-yellow-500 fade-in-up" style="animation-delay: 0.3s">
                    <div class="gradient-gold p-6 text-white text-center relative">
                        <div class="absolute top-2 right-2">
                            <span class="bg-white text-yellow-600 text-xs font-bold px-2 py-1 rounded-full">VIP</span>
                        </div>
                        <h3 class="text-2xl font-bold">Court VIP 1</h3>
                        <p class="text-sm opacity-90">Premium</p>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-4">
                            <span class="text-4xl font-bold text-yellow-600">250K</span>
                            <span class="text-gray-600">/jam</span>
                        </div>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Lapangan Premium
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                AC + Lounge
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Minuman Gratis
                            </li>
                        </ul>
                        <button class="w-full py-3 bg-yellow-500 text-white rounded-lg font-semibold hover:bg-yellow-600 transition duration-300">Booking</button>
                    </div>
                </div>

                <div class="card-hover bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-yellow-500 fade-in-up" style="animation-delay: 0.4s">
                    <div class="gradient-gold p-6 text-white text-center relative">
                        <div class="absolute top-2 right-2">
                            <span class="bg-white text-yellow-600 text-xs font-bold px-2 py-1 rounded-full">VIP</span>
                        </div>
                        <h3 class="text-2xl font-bold">Court VIP 2</h3>
                        <p class="text-sm opacity-90">Premium</p>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-4">
                            <span class="text-4xl font-bold text-yellow-600">250K</span>
                            <span class="text-gray-600">/jam</span>
                        </div>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Lapangan Premium
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                AC + Lounge
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Minuman Gratis
                            </li>
                        </ul>
                        <button class="w-full py-3 bg-yellow-500 text-white rounded-lg font-semibold hover:bg-yellow-600 transition duration-300">Booking</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-4 text-gray-800">Apa Kata Mereka</h2>
            <p class="text-center text-gray-600 mb-12">Testimoni dari pelanggan setia kami</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold text-xl">A</div>
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-800">Ahmad Rizki</h4>
                            <div class="flex text-yellow-400">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Lapangan sangat bagus dan bersih! Pelayanannya juga ramah. Pasti akan booking lagi."</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg card-hover" style="animation-delay: 0.1s">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-xl">S</div>
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-800">Siti Nurhaliza</h4>
                            <div class="flex text-yellow-400">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"VIP Court-nya luar biasa! Fasilitas lengkap dan nyaman banget. Worth it!"</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg card-hover" style="animation-delay: 0.2s">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-xl">B</div>
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-800">Budi Santoso</h4>
                            <div class="flex text-yellow-400">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Harga terjangkau dengan kualitas premium. Sistem booking-nya juga mudah!"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Lokasi -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-4 text-gray-800">Lokasi Kami</h2>
            <p class="text-center text-gray-600 mb-12">Temukan kami di pusat kota</p>
            
            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/2">
                    <div class="bg-gray-200 rounded-xl overflow-hidden shadow-lg h-96">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2673076805644!2d110.40831647499658!3d-6.982615993020779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e0432b9da5cb9f2!2sSemarang%2C%20Kota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1699999999999!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center text-white mr-4 flex-shrink-0">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 text-lg mb-2">Alamat</h3>
                                <p class="text-gray-600">Jl. Padel Sport Center No. 123<br>Semarang, Jawa Tengah 50132</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white mr-4 flex-shrink-0">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 text-lg mb-2">Telepon</h3>
                                <p class="text-gray-600">+62 812-3456-7890<br>+62 821-9876-5432</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white mr-4 flex-shrink-0">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 text-lg mb-2">Jam Operasional</h3>
                                <p class="text-gray-600">Senin - Minggu<br>08:00 - 22:00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="gradient-bg text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 100 16 8 8 0 000-16zM8 10a1 1 0 112 0v3a1 1 0 11-2 0v-3zm1-4a1 1 0 100 2 1 1 0 000-2z"/>
                        </svg>
                        <span class="text-xl font-bold">PadelCourt</span>
                    </div>
                    <p class="text-gray-300">Platform booking lapangan padel terbaik di Indonesia dengan fasilitas premium dan pelayanan terpercaya.</p>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Link Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#booking" class="text-gray-300 hover:text-white transition">Booking</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Harga</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Layanan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Sewa Lapangan</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Private Lesson</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Turnamen</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Membership</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-white/20 mt-8 pt-8 text-center text-gray-300">
                <p>&copy; 2024 PadelCourt. All rights reserved. Made with ❤️ in Semarang</p>
            </div>
        </div>
    </footer>
</body>
</html>