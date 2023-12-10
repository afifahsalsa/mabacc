<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alt;

class AltController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alt = alt::orderby('Kode', 'asc')->get();
        return view('admin.alt.index', compact('alt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.alt.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Kode' => 'required',
            'Alt' => 'required',
        ]);

        $alt = alt::create([
            'Kode' => $request->Kode,
            'Alt' => $request->Alt,
        ]);

        return redirect()->back()->with('success','Data berhasil disimpan');
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
        $alt = alt::findorfail($id);
        return view('admin.alt.edit', compact('alt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'Kode' => 'required',
            'Alt' => 'required',
        ]);

        $alt = [
            'Kode' => $request->Kode,
            'Alt' => $request->Alt,
        ];
        alt::whereId($id)->update($alt);
        return redirect()->route('alt.index')->with('success','Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alt = alt::findOrFail($id);
        $alt->delete();

        return redirect()->route('alt.index')->with('success', 'Data berhasil dihapus.');
    }
}
