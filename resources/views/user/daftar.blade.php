@extends('layouts.user')

@section('title', 'Daftar Antrian')

@section('content')
<div class="bg-white p-6 rounded-lg shadow max-w-xl mx-auto">

    <h2 class="text-2xl font-bold text-blue-600 mb-6 text-center">
        Pendaftaran Antrian
    </h2>

    <form>
        <div class="mb-4">
            <label class="block mb-1 font-medium">Pilih Poli</label>
            <select class="w-full border rounded p-2">
                <option>Poli Umum</option>
                <option>Poli Anak</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Pilih Dokter</label>
            <select class="w-full border rounded p-2">
                <option>Dr. Andi</option>
                <option>Dr. Budi</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Tanggal Kunjungan</label>
            <input type="date" class="w-full border rounded p-2">
        </div>

        <div class="mb-6">
            <label class="block mb-1 font-medium">Keluhan</label>
            <textarea class="w-full border rounded p-2" rows="3"
                      placeholder="Masukkan keluhan singkat"></textarea>
        </div>

        <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded
                       hover:bg-blue-700 transition">
            Daftar Antrian
        </button>
    </form>

</div>
@endsection
