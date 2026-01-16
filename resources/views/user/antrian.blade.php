<!DOCTYPE html>
<html>
<head>
    <title>Ambil Antrian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-xl font-bold mb-4 text-center">Ambil Nomor Antrian</h1>

    <form>
        <label class="block mb-2 text-sm">Nama Pasien</label>
        <input class="w-full border p-2 rounded mb-4" placeholder="Nama lengkap">

        <label class="block mb-2 text-sm">Pilih Poli</label>
        <select class="w-full border p-2 rounded mb-4">
            <option>Poli Umum</option>
            <option>Poli Anak</option>
        </select>

        <label class="block mb-2 text-sm">Pilih Dokter</label>
        <select class="w-full border p-2 rounded mb-4">
            <option>Dr. Andi</option>
            <option>Dr. Budi</option>
        </select>

        <a href="/antrian/status"
           class="block text-center bg-blue-600 text-white py-2 rounded">
            Ambil Antrian
        </a>
    </form>
</div>

</body>
</html>
