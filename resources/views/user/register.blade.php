@extends('layouts.user')
@section('title', 'Daftar Antrian')

@section('content')
<div class="bg-white p-6 rounded shadow max-w-lg mx-auto">
    <h2 class="text-xl font-bold mb-4 text-blue-600">Pendaftaran Antrian</h2>

    <form class="space-y-4">
        <div>
            <label class="block text-sm">Pilih Dokter</label>
            <select class="w-full border rounded p-2">
                <option>Dr. Andi - Poli Umum</option>
                <option>Dr. Siti - Poli Gigi</option>
            </select>
        </div>

        <div>
            <label class="block text-sm">Tanggal Kunjungan</label>
            <input type="date" class="w-full border rounded p-2">
        </div>

        <div>
            <label class="block text-sm">Keluhan Singkat</label>
            <textarea class="w-full border rounded p-2" rows="3"></textarea>
        </div>

        <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Daftar
        </button>
    </form>
</div>
@endsection
