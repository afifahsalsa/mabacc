<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;
use App\Models\alt;
use App\Models\matriks;

class MatriksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriteria = kriteria::orderby('id', 'asc')->get();
        $alt = alt::orderby('id', 'asc')->get();
        $matriks = matriks::with('kriteria', 'alt')->get();
        // $displayedCodes = [];

        return view('admin.matriks.index', compact('matriks', 'kriteria', 'alt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alt = alt::orderBy('Kode', 'asc')->get();
        $kriteria = kriteria::orderBy('Code', 'asc')->get();
        return view('admin.matriks.create', compact('alt', 'kriteria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Alt' => 'required',
            'nilai' => 'required|array',
        ]);
        $alt_id = alt::where('Kode', $request->Alt)->value('id');

        foreach ($request->nilai as $kriteria_id => $nilai) {
            matriks::create([
                'kriteria_id' => $kriteria_id,
                'alt_id' => $alt_id,
                'nilai' => $nilai,
            ]);
        }

        return redirect()->back()->with('success', 'Data berhasil disimpan');
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
    public function edit(string $id)
    {
        $matriks = matriks::findorfail($id);
        $alt = alt::orderBy('Kode', 'asc')->get();
        $kriteria = kriteria::orderBy('Code', 'asc')->get();
        return view('admin.matriks.edit', compact('matriks', 'alt', 'kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'alt' => 'required',
            'nilai' => 'required|array',
        ]);
        $alt_id = alt::where('id', $request->alt)->value('id');

        foreach ($request->nilai as $kriteria_id => $nilai) {
            $matriks = [
                'kriteria_id' => $kriteria_id,
                'alt_id' => $alt_id,
                'nilai' => $nilai,
            ];
        matriks::whereId($id)->update($matriks);
        }
        return redirect()->route('matriks.index')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $matriks = matriks::findOrFail($id);
        $matriks->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
