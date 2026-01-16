@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Manajemen Dokter</h1>

<a href="/admin/dokter/create"
   class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">
   + Tambah Dokter
</a>

<table class="w-full bg-white rounded shadow text-sm">
    <thead class="bg-blue-600 text-white">
        <tr>
            <th class="p-3">No</th>
            <th class="p-3 text-left">Nama Dokter</th>
            <th class="p-3 text-left">Poli</th>
            <th class="p-3 text-left">Jadwal</th>
            <th class="p-3">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr class="border-t">
            <td class="p-3 text-center">1</td>
            <td class="p-3">Dr. Andi</td>
            <td class="p-3">Poli Umum</td>
            <td class="p-3">Senin 08:00 - 12:00</td>
            <td class="p-3 text-center space-x-2">
                <a href="/admin/dokter/edit" class="text-blue-600">Edit</a>
                <button class="text-red-600">Hapus</button>
            </td>
        </tr>
    </tbody>
</table>
@endsection
