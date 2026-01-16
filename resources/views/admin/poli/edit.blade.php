@extends('layouts.admin')

@section('content')
<h1 class="text-xl font-bold mb-4">Edit Poli</h1>

<form class="bg-white p-6 rounded shadow w-full md:w-1/2">
    <label class="block mb-2 text-sm">Nama Poli</label>
    <input type="text"
           class="w-full border p-2 rounded mb-4"
           value="Poli Umum">

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Update
    </button>
</form>
@endsection
