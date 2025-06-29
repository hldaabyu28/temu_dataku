<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TemuDataku - Platform Pencarian Data Terpercaya</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#1E40AF',
                        accent: '#F59E0B'
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div
                        class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-search text-white text-lg"></i>
                    </div>
                    <h1
                        class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        TemuDataku
                    </h1>
                </div>

                <div class="hidden md:flex items-center space-x-6">
                    <a href="#tentang"
                        class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Tentang</a>
                    <a href="#fitur" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Fitur</a>
                    <a href="#kontak"
                        class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Kontak</a>
                    <a href="{{ route('login') }}"
                        class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-2 rounded-full hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                        Login
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button class="text-gray-600 hover:text-blue-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="gradient-bg min-h-screen flex items-center relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-20 h-20 bg-white opacity-10 rounded-full floating-animation"></div>
            <div class="absolute top-40 right-20 w-16 h-16 bg-white opacity-10 rounded-full floating-animation"
                style="animation-delay: -2s;"></div>
            <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white opacity-10 rounded-full floating-animation"
                style="animation-delay: -4s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Content -->
                <div class="text-white fade-in">
                    <h2 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        Temukan Data yang Anda
                        <span class="text-yellow-300">Cari</span>
                    </h2>
                    <p class="text-xl lg:text-2xl mb-8 text-gray-100 leading-relaxed">
                        Platform pencarian data terpercaya yang membantu Anda menemukan informasi yang dibutuhkan dengan
                        cepat, akurat, dan terpercaya.
                    </p>

                    <!-- Features List -->
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-400 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-lg">Pencarian data real-time</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-400 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-lg">Keamanan data terjamin</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-400 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-lg">Interface yang mudah digunakan</span>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('login') }}"
                            class="bg-white text-blue-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-xl text-center">
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            Masuk Sekarang
                        </a>
                        <a href="#tentang"
                            class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-blue-600 transform hover:scale-105 transition-all duration-300 text-center">
                            <i class="fas fa-info-circle mr-2"></i>
                            Pelajari Lebih
                        </a>
                    </div>
                </div>

                <!-- Illustration -->
                <div class="flex justify-center lg:justify-end fade-in">
                    <div class="relative">
                        <div class="glass-effect w-80 h-80 rounded-3xl p-8 floating-animation">
                            <div class="bg-white rounded-2xl h-full flex items-center justify-center">
                                <div class="text-center">
                                    <div
                                        class="w-20 h-20 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                                        <i class="fas fa-database text-white text-2xl"></i>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">Data Center</h3>
                                    <p class="text-gray-600">Millions of records</p>
                                    <div class="mt-4 space-y-2">
                                        <div class="h-2 bg-gray-200 rounded-full">
                                            <div
                                                class="h-2 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full w-4/5">
                                            </div>
                                        </div>
                                        <div class="h-2 bg-gray-200 rounded-full">
                                            <div
                                                class="h-2 bg-gradient-to-r from-green-400 to-blue-500 rounded-full w-3/5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Mengapa Pilih TemuDataku?</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Platform kami menyediakan solusi pencarian data yang
                    komprehensif dengan teknologi terdepan</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div
                    class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-bolt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Pencarian Cepat</h3>
                    <p class="text-gray-600">Sistem pencarian berbasis AI yang dapat menemukan data dalam hitungan detik
                        dengan akurasi tinggi.</p>
                </div>

                <div
                    class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-green-500 to-blue-500 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Keamanan Terjamin</h3>
                    <p class="text-gray-600">Enkripsi end-to-end dan sistem keamanan berlapis untuk melindungi privasi
                        data Anda.</p>
                </div>

                <div
                    class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Analisis Mendalam</h3>
                    <p class="text-gray-600">Tools analisis canggih untuk mengolah dan memahami data dengan visualisasi
                        yang interaktif.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Tentang TemuDataku</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        TemuDataku adalah platform pencarian data terdepan yang menggabungkan teknologi artificial
                        intelligence dengan keamanan tingkat enterprise. Kami berkomitmen untuk memberikan akses data
                        yang cepat, akurat, dan aman bagi semua pengguna.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Dengan database yang terus berkembang dan sistem pencarian yang canggih, TemuDataku membantu
                        individu dan organisasi menemukan informasi yang mereka butuhkan untuk membuat keputusan yang
                        tepat.
                    </p>

                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 mb-2">1M+</div>
                            <div class="text-gray-600">Data Records</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600 mb-2">99.9%</div>
                            <div class="text-gray-600">Uptime</div>
                        </div>
                    </div>

                    <a href="{{ route('login') }}"
                        class="inline-flex items-center bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-3 rounded-full font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                        Mulai Pencarian
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="flex justify-center">
                    <div class="relative">
                        <div
                            class="w-96 h-96 bg-gradient-to-r from-blue-500 to-purple-600 rounded-3xl flex items-center justify-center">
                            <div class="text-white text-center">
                                <i class="fas fa-search text-6xl mb-4"></i>
                                <h3 class="text-2xl font-bold">Pencarian Pintar</h3>
                                <p class="text-blue-100 mt-2">AI-Powered Search</p>
                            </div>
                        </div>
                        <div
                            class="absolute -top-4 -right-4 w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center floating-animation">
                            <i class="fas fa-star text-white text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-purple-700">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Siap Menemukan Data Anda?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Bergabunglah dengan ribuan pengguna yang telah mempercayai TemuDataku untuk kebutuhan pencarian data
                mereka.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('login') }}"
                    class="bg-white text-blue-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-xl">
                    <i class="fas fa-user-plus mr-2"></i>
                    Daftar Gratis
                </a>
                <a href="{{ route('login') }}"
                    class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-blue-600 transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Login Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div
                            class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-search text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold">TemuDataku</h3>
                    </div>
                    <p class="text-gray-400">Platform pencarian data terpercaya untuk semua kebutuhan informasi Anda.
                    </p>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Pencarian Data</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Analisis</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">API Access</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Perusahaan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Karir</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-envelope mr-2"></i> info@temudataku.com</li>
                        <li><i class="fas fa-phone mr-2"></i> +62 21 1234 5678</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2024 TemuDataku. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navbar
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.classList.add('bg-white/95', 'backdrop-blur-sm');
            } else {
                header.classList.remove('bg-white/95', 'backdrop-blur-sm');
            }
        });
    </script>
</body>

</html>
