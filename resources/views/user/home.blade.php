@extends('layouts.user')

@section('title', 'Home | Klinik Mini')

@section('content')
<div class="bg-white rounded-lg shadow p-8 text-center">

    <h2 class="text-3xl font-bold text-blue-600 mb-4">
        Sistem Antrian Klinik Mini
    </h2>

    <p class="text-gray-600 mb-8">
        Aplikasi pendaftaran dan pengelolaan antrian pasien
        untuk pelayanan klinik yang lebih tertib, cepat,
        dan efisien.
    </p>

    <div class="flex flex-col sm:flex-row justify-center gap-4">
        <!-- Daftar Antrian -->
        <a href="/antrian/daftar"
           class="bg-blue-600 text-white px-6 py-3 rounded-lg
                  hover:bg-blue-700 transition font-semibold">
            Daftar Antrian
        </a>

        <!-- Riwayat Antrian -->
        <a href="/antrian/riwayat"
           class="bg-gray-200 text-gray-800 px-6 py-3 rounded-lg
                  hover:bg-gray-300 transition font-semibold">
            Riwayat Antrian
        </a>
    </div>

</div>
@endsection
<div class="mt-8">
    <a href="/admin/login"
       class="text-sm text-blue-600 hover:underline font-semibold">
        Login sebagai Admin
    </a>
</div>
