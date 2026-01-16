@extends('layouts.user')
@section('title', 'Riwayat Antrian')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4 text-blue-600">Riwayat Antrian</h2>

    <table class="w-full border text-sm">
        <thead class="bg-blue-600 text-white">
            <tr>
                <th class="p-2">No</th>
                <th>Dokter</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border">
                <td class="p-2">1</td>
                <td>Dr. Andi</td>
                <td>2026-01-20</td>
                <td class="text-yellow-600 font-semibold">WAITING</td>
                <td>
                    <button class="bg-red-500 text-white px-3 py-1 rounded">
                        Cancel
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
