<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PadelCourt</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
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
        
        .fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }
        
        .slide-in-left {
            animation: slideInLeft 0.8s ease-out forwards;
        }
        
        .float {
            animation: float 3s ease-in-out infinite;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .input-focus:focus {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.2);
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex">
        <!-- Left Side - Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="max-w-md w-full fade-in">
                <!-- Logo & Back Button -->
                <div class="mb-8">
                    <a href="index.php" class="inline-flex items-center text-purple-600 hover:text-purple-700 transition mb-6">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Kembali ke Beranda
                    </a>
                    
                    <div class="flex items-center space-x-2 mb-2">
                        <svg class="w-10 h-10 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 100 16 8 8 0 000-16zM8 10a1 1 0 112 0v3a1 1 0 11-2 0v-3zm1-4a1 1 0 100 2 1 1 0 000-2z"/>
                        </svg>
                        <span class="text-2xl font-bold text-gray-800">PadelCourt</span>
                    </div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Selamat Datang Kembali!</h1>
                    <p class="text-gray-600">Masuk ke akun Anda untuk melanjutkan booking</p>
                </div>

                <!-- Login Form -->
                <form class="space-y-6" onsubmit="handleLogin(event)">
                    <!-- Email -->
                    <div class="slide-in-left" style="animation-delay: 0.1s">
                        <label class="block text-gray-700 font-semibold mb-2">Email</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                            </span>
                            <input type="email" class="w-full pl-12 pr-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-purple-500 input-focus transition" placeholder="contoh@email.com" required>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="slide-in-left" style="animation-delay: 0.2s">
                        <label class="block text-gray-700 font-semibold mb-2">Password</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <input type="password" id="password" class="w-full pl-12 pr-12 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-purple-500 input-focus transition" placeholder="Masukkan password" required>
                            <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 flex items-center pr-4 text-gray-400 hover:text-gray-600">
                                <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Remember & Forgot -->
                    <div class="flex items-center justify-between slide-in-left" style="animation-delay: 0.3s">
                        <label class="flex items-center">
                            <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            <span class="ml-2 text-gray-700">Ingat saya</span>
                        </label>
                        <a href="#" class="text-purple-600 hover:text-purple-700 font-semibold transition">Lupa Password?</a>
                    </div>

                    <!-- Login Button -->
                    <div class="slide-in-left" style="animation-delay: 0.4s">
                        <button type="submit" class="w-full gradient-bg text-white py-3 rounded-lg font-bold text-lg hover:opacity-90 transform hover:scale-105 transition duration-300 shadow-lg">
                            Masuk
                        </button>
                    </div>

                    <!-- Divider -->
                    <div class="relative slide-in-left" style="animation-delay: 0.5s">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-4 bg-gray-50 text-gray-500">Atau masuk dengan</span>
                        </div>
                    </div>

                    <!-- Social Login -->
                    <div class="grid grid-cols-2 gap-4 slide-in-left" style="animation-delay: 0.6s">
                        <button type="button" class="flex items-center justify-center px-4 py-3 border-2 border-gray-300 rounded-lg hover:border-purple-500 hover:bg-purple-50 transition">
                            <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                            Google
                        </button>
                        <button type="button" class="flex items-center justify-center px-4 py-3 border-2 border-gray-300 rounded-lg hover:border-purple-500 hover:bg-purple-50 transition">
                            <svg class="w-5 h-5 mr-2" fill="#1877F2" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            Facebook
                        </button>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center slide-in-left" style="animation-delay: 0.7s">
                        <p class="text-gray-600">
                            Belum punya akun? 
                            <a href="daftar.php" class="text-purple-600 hover:text-purple-700 font-bold transition">Daftar Sekarang</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Side - Image/Illustration -->
        <div class="hidden lg:block lg:w-1/2 gradient-bg relative overflow-hidden">
            <div class="absolute inset-0 flex items-center justify-center p-12">
                <div class="text-white text-center">
                    <div class="float mb-8">
                        <svg class="w-64 h-64 mx-auto" viewBox="0 0 500 500" fill="none">
                            <rect x="50" y="50" width="400" height="400" rx="20" fill="white" opacity="0.1"/>
                            <rect x="100" y="100" width="300" height="300" rx="10" fill="white" opacity="0.2"/>
                            <line x1="250" y1="100" x2="250" y2="400" stroke="white" stroke-width="4" opacity="0.3"/>
                            <line x1="100" y1="250" x2="400" y2="250" stroke="white" stroke-width="4" opacity="0.3"/>
                            <circle cx="250" cy="250" r="60" fill="white" opacity="0.3"/>
                        </svg>
                    </div>
                    <h2 class="text-4xl font-bold mb-4">Mulai Petualangan Padel Anda</h2>
                    <p class="text-xl opacity-90">Bergabunglah dengan ribuan pemain padel yang sudah mempercayai kami</p>
                </div>
            </div>
            
            <!-- Decorative Circles -->
            <div class="absolute top-10 right-10 w-32 h-32 bg-white opacity-10 rounded-full"></div>
            <div class="absolute bottom-10 left-10 w-40 h-40 bg-white opacity-10 rounded-full"></div>
            <div class="absolute top-1/2 left-1/4 w-20 h-20 bg-white opacity-10 rounded-full"></div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>';
            }
        }

        function handleLogin(event) {
            event.preventDefault();
            // Simulasi login sukses
            alert('Login berhasil! Anda akan diarahkan ke halaman booking...');
            // Redirect ke index.php setelah 1 detik
            setTimeout(() => {
                window.location.href = 'index.php';
            }, 1000);
        }
    </script>
</body>
</html>