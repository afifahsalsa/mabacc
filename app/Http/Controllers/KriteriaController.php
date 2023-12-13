<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;
use App\Models\alt;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriteria = kriteria::orderby('Code', 'asc')->get();
        $alt = alt::orderby('id', 'asc')->get();
        return view('admin.kriteria.index', compact('kriteria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Code' => 'required',
            'Nama' => 'required',
            'Bobot' => 'required',
            'Jenis' => 'required',
        ]);

        $kriteria = kriteria::create([
            'Code' => $request->Code,
            'Nama' => $request->Nama,
            'Bobot' => $request->Bobot,
            'Jenis' => $request->Jenis,
        ]);

        return redirect()->back()->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kriteria = kriteria::findorfail($id);
        return view('admin.kriteria.edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'Code' => 'required',
            'Nama' => 'required',
            'Bobot' => 'required',
            'Jenis' => 'required',
        ]);

        $kriteria = [
            'Code' => $request->Code,
            'Nama' => $request->Nama,
            'Bobot' => $request->Bobot,
            'Jenis' => $request->Jenis,
        ];
        kriteria::whereId($id)->update($kriteria);
        return redirect()->route('kriteria.index')->with('success','Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $kriteria = Kriteria::findOrFail($id);
    $kriteria->delete();

    return redirect()->route('kriteria.index')->with('success', 'Data berhasil dihapus.');
    }
}
