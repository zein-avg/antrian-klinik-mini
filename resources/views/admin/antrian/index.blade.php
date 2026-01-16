@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Manajemen Antrian</h1>

<table class="w-full bg-white rounded shadow text-sm">
    <thead class="bg-blue-600 text-white">
        <tr>
            <th class="p-3">No</th>
            <th class="p-3 text-left">No Antrian</th>
            <th class="p-3 text-left">Nama Pasien</th>
            <th class="p-3 text-left">Poli</th>
            <th class="p-3 text-left">Dokter</th>
            <th class="p-3 text-left">Status</th>
            <th class="p-3">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr class="border-t">
            <td class="p-3 text-center">1</td>
            <td class="p-3">A-001</td>
            <td class="p-3">Budi</td>
            <td class="p-3">Poli Umum</td>
            <td class="p-3">Dr. Andi</td>
            <td class="p-3">
                <span class="bg-yellow-400 text-white px-2 py-1 rounded text-xs">
                    WAITING
                </span>
            </td>
            <td class="p-3 space-x-2 text-center">
                <button class="bg-blue-600 text-white px-2 py-1 rounded text-xs">
                    CALL
                </button>
                <button class="bg-green-600 text-white px-2 py-1 rounded text-xs">
                    DONE
                </button>
            </td>
        </tr>
    </tbody>
</table>
@endsection
