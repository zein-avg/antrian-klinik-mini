<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin | Klinik Mini')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-blue-700 text-white hidden md:block">
        <div class="p-6 font-bold text-lg">
            Admin Klinik
        </div>
        <nav class="px-4 space-y-2 text-sm">
            <a href="/admin/dashboard" class="block px-3 py-2 rounded hover:bg-blue-600">Dashboard</a>
            <a href="/admin/poli" class="block px-3 py-2 rounded hover:bg-blue-600">Manajemen Poli</a>
            <a href="/admin/dokter" class="block px-3 py-2 rounded hover:bg-blue-600">Manajemen Dokter</a>
            <a href="/admin/antrian" class="block px-3 py-2 rounded hover:bg-blue-600">Data Antrian</a>
        </nav>
    </aside>

    <!-- Main -->
    <div class="flex-1 flex flex-col">
        <!-- Navbar -->
        <header class="bg-white shadow px-6 py-4 flex justify-between">
            <span class="font-semibold">Dashboard Admin</span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-sm text-red-600 hover:underline">
                    Logout
                </button>
            </form>
        </header>

        <!-- Content -->
        <main class="p-6">
            @yield('content')
        </main>
    </div>
</div>

</body>
</html>
