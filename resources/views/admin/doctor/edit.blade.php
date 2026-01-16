@extends('layouts.admin')

@section('content')
<h1 class="text-xl font-bold mb-4">Edit Dokter</h1>

<form class="bg-white p-6 rounded shadow w-full md:w-1/2">
    <label class="block mb-2 text-sm">Nama Dokter</label>
    <input class="w-full border p-2 rounded mb-4"
           value="Dr. Andi">

    <label class="block mb-2 text-sm">Poli</label>
    <select class="w-full border p-2 rounded mb-4">
        <option selected>Poli Umum</option>
        <option>Poli Anak</option>
    </select>

    <label class="block mb-2 text-sm">Jadwal</label>
    <input class="w-full border p-2 rounded mb-4"
           value="Senin 08:00 - 12:00">

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Update
    </button>
</form>
@endsection
