@extends('layouts.user')
@section('title', 'Pendaftaran Antrian')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold text-blue-600 mb-4">
        Pendaftaran Antrian Pasien
    </h2>

    <form class="space-y-4">
        <div>
            <label class="block text-sm">Dokter</label>
            <select class="w-full border rounded p-2">
                <option>Dr. Andi – Poli Umum</option>
                <option>Dr. Siti – Poli Gigi</option>
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
            Simpan Antrian
        </button>
    </form>
</div>
@endsection
