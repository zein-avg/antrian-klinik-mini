<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistem Antrian Klinik Mini')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind CDN (aman untuk frontend UAS) --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-lg font-bold">Klinik Mini</h1>

            <div class="space-x-4 text-sm">
                <a href="/" class="hover:underline">Home</a>

                <a href="/antrian/daftar" class="hover:underline">
                    Daftar Antrian
                </a>

                <a href="/antrian/riwayat" class="hover:underline">
                    Riwayat
                </a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="max-w-7xl mx-auto px-4 py-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-center py-4 mt-10">
        <p class="text-sm">
            © {{ date('Y') }} Klinik Mini — Sistem Antrian
        </p>
    </footer>

</body>
</html>
