<?php

namespace App\Http\Controllers;

use App\Models\BasisPengetahuan;
use App\Models\Gangguan;
use App\Models\Gejala;
use Illuminate\Http\Request;

class BasisPengetahuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $basis = BasisPengetahuan::with('gangguan', 'gejala')->orderBy('gangguan_id', 'ASC')->get();
        return view('admin.basis.index', compact('basis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BasisPengetahuan $basis)
    {
        $gangguans = Gangguan::all();
        $gejalas = Gejala::all();
        return view('admin.basis.edit', [
            'basisPengetahuan' => $basis,
            'gangguans' => $gangguans,
            'gejalas' => $gejalas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BasisPengetahuan $basis)
    {
        $request->validate([
            'cf_pakar' => 'required|numeric|min:0|max:1',
        ]);

        $basis->update($request->only('cf_pakar'));
        return redirect()->route('basis.index')->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
