<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QueueController extends Controller
{
    // Form daftar antrian
    public function create()
    {
        $doctors = Doctor::with('poli')->get();
        return view('user.antrian.create', compact('doctors'));
    }

    // Simpan antrian
    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required',
            'visit_date' => 'required|date',
            'complaint' => 'nullable|string'
        ]);

        // Hitung nomor antrian
        $lastQueue = Queue::where('doctor_id', $request->doctor_id)
            ->where('visit_date', $request->visit_date)
            ->max('queue_number');

        Queue::create([
            'user_id' => Auth::id(),
            'doctor_id' => $request->doctor_id,
            'visit_date' => $request->visit_date,
            'queue_number' => $lastQueue ? $lastQueue + 1 : 1,
            'complaint' => $request->complaint,
            'status' => 'WAITING'
        ]);

        return redirect('/riwayat')->with('success', 'Antrian berhasil didaftarkan');
    }

    // Riwayat antrian user
    public function index()
    {
        $queues = Queue::where('user_id', Auth::id())
            ->with('doctor.poli')
            ->orderByDesc('created_at')
            ->get();

        return view('user.antrian.index', compact('queues'));
    }

    // Cancel antrian
    public function cancel(Queue $queue)
    {
        if ($queue->status === 'WAITING') {
            $queue->update(['status' => 'CANCELED']);
        }

        return back();
    }
}
