<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePoliRequest;
use App\Http\Requests\UpdatePoliRequest;
use App\Models\Poli;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PoliController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin');
    }

    public function index(): View
    {
        $polis = Poli::withCount('doctors')->latest()->get();
        return view('admin.polis.index', compact('polis'));
    }

    public function create(): View
    {
        return view('admin.polis.create');
    }

    public function store(StorePoliRequest $request): RedirectResponse
    {
        Poli::create($request->validated());

        return redirect()->route('admin.polis.index')
            ->with('success', 'Poli berhasil ditambahkan.');
    }

    public function edit(Poli $poli): View
    {
        return view('admin.polis.edit', compact('poli'));
    }

    public function update(UpdatePoliRequest $request, Poli $poli): RedirectResponse
    {
        $poli->update($request->validated());

        return redirect()->route('admin.polis.index')
            ->with('success', 'Poli berhasil diperbarui.');
    }

    public function destroy(Poli $poli): RedirectResponse
    {
        $poli->delete();

        return redirect()->route('admin.polis.index')
            ->with('success', 'Poli berhasil dihapus.');
    }
}
