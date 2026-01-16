@extends('layouts.user')

@section('title', 'Daftar Antrian')

@section('content')
<div class="max-w-xl mx-auto bg-white shadow rounded-lg p-6">
    <h2 class="text-2xl font-bold text-blue-600 mb-6 text-center">
        Form Pendaftaran Antrian
    </h2>

    {{-- pesan sukses --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    {{-- error validasi --}}
    @if($errors->any())
        <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/antrian" method="POST" class="space-y-4">
        @csrf

        {{-- Pilih Dokter --}}
        <div>
            <label class="block text-sm font-medium mb-1">Pilih Dokter</label>
            <select name="doctor_id" class="w-full border rounded px-3 py-2" required>
                <option value="">-- Pilih Dokter --</option>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">
                        {{ $doctor->name }} - Poli {{ $doctor->poli->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Tanggal Kunjungan --}}
        <div>
            <label class="block text-sm font-medium mb-1">Tanggal Kunjungan</label>
            <input
                type="date"
                name="visit_date"
                class="w-full border rounded px-3 py-2"
                required
            >
        </div>

        {{-- Keluhan --}}
        <div>
            <label class="block text-sm font-medium mb-1">Keluhan</label>
            <textarea
                name="complaint"
                rows="3"
                class="w-full border rounded px-3 py-2"
                placeholder="Tuliskan keluhan singkat (opsional)"
            ></textarea>
        </div>

        <div class="flex justify-end gap-2">
            <a href="/" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">
                Batal
            </a>
            <button
                type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
            >
                Daftar Antrian
            </button>
        </div>
    </form>
</div>
@endsection
