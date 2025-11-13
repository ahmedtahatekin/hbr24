<!DOCTYPE html>
<html lang="tr">

<head>
    <?php
    $title = "Ana Sayfa";
    require_once 'partials/_head.php';
    ?>
</head>

<body class="bg-gray-50 text-gray-800 antialiased transition-colors duration-200 dark:bg-gray-900 dark:text-gray-200">
    <!-- ...existing code... -->
    <header class="bg-white border-b shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <button class="lg:hidden p-2 rounded-md focus:outline-none focus:ring">
                    <!-- hamburger -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <a href="#" class="flex items-end gap-3">
                    <div class="text-2xl font-extrabold tracking-wide text-sky-600 dark:text-sky-400">HBR24</div>
                    <div class="text-xs text-gray-500 -mb-0.5 dark:text-gray-400">haber &güncel</div>
                </a>

                <!-- Dark mode toggle: sağında -->
                <button id="themeToggle" aria-label="Toggle dark mode" class="ml-2 p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-600 dark:text-gray-300 hidden md:inline-flex">
                    <svg id="icon-sun" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M12 3v2M12 19v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="12" cy="12" r="3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg id="icon-moon" class="w-5 h-5 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <div class="hidden md:flex items-center gap-6">
                <div class="flex items-center gap-3 bg-gray-100 px-3 py-2 rounded-full dark:bg-gray-700">
                    <svg class="w-5 h-5 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6.76 4.84l-1.8-1.79L2.5 5.51l1.79 1.79 2.47-2.46zM1 13h3v-2H1v2zm10-9h2V1h-2v3zM20.49 5.51l-2.46-2.46-1.79 1.79 2.46 2.46 1.79-1.79zM17 11v2h3v-2h-3zM6.76 19.16L4.29 21l1.79 1.79 2.47-2.46-1.79-1.17zM12 20a4 4 0 100-8 4 4 0 000 8z" />
                    </svg>
                    <div class="text-sm">
                        <div class="font-medium">İstanbul</div>
                        <div class="text-xs text-gray-500 dark:text-gray-400">22° • Güneşli</div>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="relative">
                        <input type="search" placeholder="Haber ara..." class="w-48 md:w-64 bg-gray-100 rounded-full px-4 py-2 text-sm focus:outline-none focus:ring dark:bg-gray-700 dark:placeholder-gray-400" />
                        <button class="absolute right-1 top-1.5 p-1.5 text-gray-500">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M21 21l-4.35-4.35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <circle cx="11" cy="11" r="6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>

                    <button class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <!-- Left navigation (haber türleri) -->
            <nav class="lg:col-span-2 bg-white rounded-lg border p-4 shadow-sm hidden lg:block dark:bg-gray-800 dark:border-gray-700">
                <h3 class="text-lg font-semibold mb-4">Haber Türleri</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="block px-3 py-2 rounded hover:bg-sky-50 dark:hover:bg-sky-900">Güncel</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded hover:bg-sky-50 dark:hover:bg-sky-900">Ekonomi</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded hover:bg-sky-50 dark:hover:bg-sky-900">Spor</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded hover:bg-sky-50 dark:hover:bg-sky-900">Teknoloji</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded hover:bg-sky-50 dark:hover:bg-sky-900">Kültür & Sanat</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded hover:bg-sky-50 dark:hover:bg-sky-900">Dünya</a></li>
                </ul>
            </nav>

            <!-- Main content -->
            <section class="lg:col-span-7 space-y-6">
                <!-- Büyük manşet kart -->
                <article class="bg-white rounded-lg border p-6 shadow-lg flex flex-col items-center justify-center text-center min-h-[220px] dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-gray-800 dark:text-gray-100 mb-3">Günlük Haberler</h2>
                    <p class="text-gray-500 max-w-xl dark:text-gray-300">Türkiye ve dünyadan seçkin başlıklar, doğrulanmış ve hızlı içeriklerle burada. Gündemi takip edin.</p>
                    <div class="mt-5">
                        <a href="#" class="inline-block bg-sky-600 hover:bg-sky-700 text-white px-6 py-2 rounded-full font-medium">Tümünü Gör</a>
                    </div>
                </article>

                <!-- İki-alt blok (genel haberler ve bize ulaşın) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg border p-6 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <h3 class="text-2xl font-bold mb-3">Genel Haberler</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <div class="w-16 h-12 bg-gray-200 rounded-md flex-shrink-0 dark:bg-gray-700"></div>
                                <div>
                                    <a href="#" class="font-medium hover:underline">Başlık örneği: Önemli gelişme...</a>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">3 saat önce • Ekonomi</div>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-16 h-12 bg-gray-200 rounded-md flex-shrink-0 dark:bg-gray-700"></div>
                                <div>
                                    <a href="#" class="font-medium hover:underline">Yeni teknoloji duyuruldu...</a>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">5 saat önce • Teknoloji</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white rounded-lg border p-6 shadow-sm flex flex-col justify-between dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <h3 class="text-2xl font-bold mb-3">Bize Ulaşın</h3>
                            <p class="text-gray-500 mb-4 dark:text-gray-300">Haber önerileri, düzeltmeler veya reklam talepleri için bizimle iletişime geçin.</p>
                        </div>
                        <form class="space-y-3">
                            <input type="text" placeholder="Adınız" class="w-full border rounded px-3 py-2 text-sm focus:outline-none dark:bg-gray-700 dark:border-gray-600" />
                            <input type="email" placeholder="E-posta" class="w-full border rounded px-3 py-2 text-sm focus:outline-none dark:bg-gray-700 dark:border-gray-600" />
                            <textarea rows="3" placeholder="Mesajınız..." class="w-full border rounded px-3 py-2 text-sm focus:outline-none dark:bg-gray-700 dark:border-gray-600"></textarea>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-sky-600 text-white px-4 py-2 rounded">Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Küçük haber kartları (örnek liste) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white rounded-lg border p-4 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <h4 class="font-semibold">Öne Çıkan</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Kısa özet ile anlık gelişmeler.</p>
                    </div>
                    <div class="bg-white rounded-lg border p-4 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <h4 class="font-semibold">Derin Analiz</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Uzman yorumları ve analizler.</p>
                    </div>
                </div>
            </section>

            <!-- Right sidebar (hisse, döviz, altın vb) -->
            <aside class="lg:col-span-3">
                <div class="bg-white rounded-lg border p-4 mb-6 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-semibold">Piyasa Özeti</h4>
                        <a href="#" class="text-xs text-sky-600">Detay</a>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-600 dark:text-gray-400">BIST</div>
                            <div class="font-medium text-green-600">+0.85%</div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-600 dark:text-gray-400">USD/TRY</div>
                            <div class="font-medium">38.45</div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-600 dark:text-gray-400">Gram Altın</div>
                            <div class="font-medium">1,450</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg border p-4 mb-6 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <h4 class="font-semibold mb-3">Bildirimler</h4>
                    <div class="text-sm text-gray-500 dark:text-gray-400">Son dakika bildirimlerini açmak için hesabınıza giriş yapın.</div>
                    <div class="mt-3">
                        <a href="#" class="inline-block bg-sky-50 text-sky-600 px-3 py-2 rounded dark:bg-sky-900 dark:text-sky-300">Bildirimleri Aç</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg border p-4 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <h4 class="font-semibold mb-3">Özel Bölüm</h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Sponsorlu içerikler veya önemli duyurular buraya gelebilir.</p>
                </div>
            </aside>
        </div>
    </main>

    <footer class="bg-white border-t mt-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="container mx-auto px-4 py-6 text-sm text-gray-500 dark:text-gray-400">
            © <?= date('Y') ?> HBR24. Tüm hakları saklıdır.
        </div>
    </footer>
    <!-- ...existing code... -->

    <!-- Dark mode toggle script -->
    <script>
        const root = document.documentElement;
        const toggle = document.getElementById('themeToggle');
        const sun = document.getElementById('icon-sun');
        const moon = document.getElementById('icon-moon');

        function applyTheme(theme) {
            if (theme === 'dark') {
                root.classList.add('dark');
                sun.classList.add('hidden');
                moon.classList.remove('hidden');
            } else {
                root.classList.remove('dark');
                moon.classList.add('hidden');
                sun.classList.remove('hidden');
            }
        }

        // Initialize from localStorage or system preference
        const stored = localStorage.getItem('hbr24-theme');
        if (stored) {
            applyTheme(stored);
        } else {
            const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            applyTheme(prefersDark ? 'dark' : 'light');
        }

        toggle && toggle.addEventListener('click', () => {
            const isDark = root.classList.toggle('dark');
            applyTheme(isDark ? 'dark' : 'light');
            localStorage.setItem('hbr24-theme', isDark ? 'dark' : 'light');
        });
    </script>
</body>

</html>