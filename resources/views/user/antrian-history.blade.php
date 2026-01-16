@extends('layouts.user')
@section('title', 'Riwayat Antrian')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold text-blue-600 mb-4">
        Riwayat Antrian
    </h2>

    <table class="w-full text-sm border">
        <thead class="bg-blue-600 text-white">
            <tr>
                <th>No</th>
                <th>Dokter</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border">
                <td>1</td>
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
