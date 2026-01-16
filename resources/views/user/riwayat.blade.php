@extends('layouts.user')

@section('title', 'Riwayat Antrian')

@section('content')
<div class="bg-white p-6 rounded-lg shadow max-w-4xl mx-auto">

    <h2 class="text-2xl font-bold text-blue-600 mb-6 text-center">
        Riwayat Antrian
    </h2>

    <table class="w-full text-sm border">
        <thead class="bg-blue-600 text-white">
            <tr>
                <th class="p-3">No</th>
                <th class="p-3">No Antrian</th>
                <th class="p-3">Poli</th>
                <th class="p-3">Dokter</th>
                <th class="p-3">Tanggal</th>
                <th class="p-3">Status</th>
                <th class="p-3">Aksi</th>
            </tr>
        </thead>

        <tbody id="antrianBody">
            <!-- DATA 1 -->
            <tr class="border-t">
                <td class="p-3 text-center">1</td>
                <td class="p-3">A-001</td>
                <td class="p-3">Poli Umum</td>
                <td class="p-3">Dr. Andi</td>
                <td class="p-3">2026-01-16</td>
                <td class="p-3 status">
                    <span class="bg-yellow-400 text-white px-2 py-1 rounded text-xs">
                        WAITING
                    </span>
                </td>
                <td class="p-3 text-center">
                    <button onclick="cancelAntrian(this)"
                        class="bg-red-600 text-white px-2 py-1 rounded text-xs">
                        Cancel
                    </button>
                </td>
            </tr>

            <!-- DATA 2 -->
            <tr class="border-t">
                <td class="p-3 text-center">2</td>
                <td class="p-3">A-002</td>
                <td class="p-3">Poli Anak</td>
                <td class="p-3">Dr. Budi</td>
                <td class="p-3">2026-01-15</td>
                <td class="p-3">
                    <span class="bg-green-600 text-white px-2 py-1 rounded text-xs">
                        DONE
                    </span>
                </td>
                <td class="p-3 text-center">-</td>
            </tr>
        </tbody>
    </table>

</div>

<script>
function cancelAntrian(button) {
    const row = button.closest('tr');
    const statusCell = row.querySelector('.status');

    statusCell.innerHTML =
        '<span class="bg-red-600 text-white px-2 py-1 rounded text-xs">CANCELED</span>';

    button.remove();
}
</script>
@endsection
