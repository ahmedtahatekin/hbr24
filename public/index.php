<!DOCTYPE html>
<html lang="tr">

<head>
    <?php
    $title = "Ana Sayfa";
    require_once 'partials/_head.php';
    ?>
</head>

<body class="bg-gray-50 text-gray-800 antialiased">
    <!-- ...existing code... -->
    <header class="bg-white border-b shadow-sm">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <button class="lg:hidden p-2 rounded-md focus:outline-none focus:ring">
                    <!-- hamburger -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <a href="#" class="flex items-end gap-3">
                    <div class="text-2xl font-extrabold tracking-wide text-sky-600">HBR24</div>
                    <div class="text-xs text-gray-500 -mb-0.5">haber &güncel</div>
                </a>
            </div>

            <div class="hidden md:flex items-center gap-6">
                <div class="flex items-center gap-3 bg-gray-100 px-3 py-2 rounded-full">
                    <svg class="w-5 h-5 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6.76 4.84l-1.8-1.79L2.5 5.51l1.79 1.79 2.47-2.46zM1 13h3v-2H1v2zm10-9h2V1h-2v3zM20.49 5.51l-2.46-2.46-1.79 1.79 2.46 2.46 1.79-1.79zM17 11v2h3v-2h-3zM6.76 19.16L4.29 21l1.79 1.79 2.47-2.46-1.79-1.17zM12 20a4 4 0 100-8 4 4 0 000 8z" />
                    </svg>
                    <div class="text-sm">
                        <div class="font-medium">İstanbul</div>
                        <div class="text-xs text-gray-500">22° • Güneşli</div>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="relative">
                        <input type="search" placeholder="Haber ara..." class="w-48 md:w-64 bg-gray-100 rounded-full px-4 py-2 text-sm focus:outline-none focus:ring" />
                        <button class="absolute right-1 top-1.5 p-1.5 text-gray-500">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M21 21l-4.35-4.35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <circle cx="11" cy="11" r="6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>

                    <button class="p-2 rounded-full hover:bg-gray-100">
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
            <nav class="lg:col-span-2 bg-white rounded-lg border p-4 shadow-sm hidden lg:block">
                <h3 class="text-lg font-semibold mb-4">Haber Türleri</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="block px-3 py-2 rounded hover:bg-sky-50">Güncel</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded hover:bg-sky-50">Ekonomi</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded hover:bg-sky-50">Spor</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded hover:bg-sky-50">Teknoloji</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded hover:bg-sky-50">Kültür & Sanat</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded hover:bg-sky-50">Dünya</a></li>
                </ul>
            </nav>

            <!-- Main content -->
            <section class="lg:col-span-7 space-y-6">
                <!-- Büyük manşet kart -->
                <article class="bg-white rounded-lg border p-6 shadow-lg flex flex-col items-center justify-center text-center min-h-[220px]">
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-gray-800 mb-3">Günlük Haberler</h2>
                    <p class="text-gray-500 max-w-xl">Türkiye ve dünyadan seçkin başlıklar, doğrulanmış ve hızlı içeriklerle burada. Gündemi takip edin.</p>
                    <div class="mt-5">
                        <a href="#" class="inline-block bg-sky-600 hover:bg-sky-700 text-white px-6 py-2 rounded-full font-medium">Tümünü Gör</a>
                    </div>
                </article>

                <!-- İki-alt blok (genel haberler ve bize ulaşın) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg border p-6 shadow-sm">
                        <h3 class="text-2xl font-bold mb-3">Genel Haberler</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <div class="w-16 h-12 bg-gray-200 rounded-md flex-shrink-0"></div>
                                <div>
                                    <a href="#" class="font-medium hover:underline">Başlık örneği: Önemli gelişme...</a>
                                    <div class="text-xs text-gray-500">3 saat önce • Ekonomi</div>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-16 h-12 bg-gray-200 rounded-md flex-shrink-0"></div>
                                <div>
                                    <a href="#" class="font-medium hover:underline">Yeni teknoloji duyuruldu...</a>
                                    <div class="text-xs text-gray-500">5 saat önce • Teknoloji</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white rounded-lg border p-6 shadow-sm flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-bold mb-3">Bize Ulaşın</h3>
                            <p class="text-gray-500 mb-4">Haber önerileri, düzeltmeler veya reklam talepleri için bizimle iletişime geçin.</p>
                        </div>
                        <form class="space-y-3">
                            <input type="text" placeholder="Adınız" class="w-full border rounded px-3 py-2 text-sm focus:outline-none" />
                            <input type="email" placeholder="E-posta" class="w-full border rounded px-3 py-2 text-sm focus:outline-none" />
                            <textarea rows="3" placeholder="Mesajınız..." class="w-full border rounded px-3 py-2 text-sm focus:outline-none"></textarea>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-sky-600 text-white px-4 py-2 rounded">Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Küçük haber kartları (örnek liste) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white rounded-lg border p-4 shadow-sm">
                        <h4 class="font-semibold">Öne Çıkan</h4>
                        <p class="text-sm text-gray-500">Kısa özet ile anlık gelişmeler.</p>
                    </div>
                    <div class="bg-white rounded-lg border p-4 shadow-sm">
                        <h4 class="font-semibold">Derin Analiz</h4>
                        <p class="text-sm text-gray-500">Uzman yorumları ve analizler.</p>
                    </div>
                </div>
            </section>

            <!-- Right sidebar (hisse, döviz, altın vb) -->
            <aside class="lg:col-span-3">
                <div class="bg-white rounded-lg border p-4 mb-6 shadow-sm">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-semibold">Piyasa Özeti</h4>
                        <a href="#" class="text-xs text-sky-600">Detay</a>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-600">BIST</div>
                            <div class="font-medium text-green-600">+0.85%</div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-600">USD/TRY</div>
                            <div class="font-medium">38.45</div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-600">Gram Altın</div>
                            <div class="font-medium">1,450</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg border p-4 mb-6 shadow-sm">
                    <h4 class="font-semibold mb-3">Bildirimler</h4>
                    <div class="text-sm text-gray-500">Son dakika bildirimlerini açmak için hesabınıza giriş yapın.</div>
                    <div class="mt-3">
                        <a href="#" class="inline-block bg-sky-50 text-sky-600 px-3 py-2 rounded">Bildirimleri Aç</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg border p-4 shadow-sm">
                    <h4 class="font-semibold mb-3">Özel Bölüm</h4>
                    <p class="text-sm text-gray-500">Sponsorlu içerikler veya önemli duyurular buraya gelebilir.</p>
                </div>
            </aside>
        </div>
    </main>

    <footer class="bg-white border-t mt-8">
        <div class="container mx-auto px-4 py-6 text-sm text-gray-500">
            © <?= date('Y') ?> HBR24. Tüm hakları saklıdır.
        </div>
    </footer>
    <!-- ...existing code... -->
</body>

</html>