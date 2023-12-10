<?php

namespace App\Http\Controllers;

use App\Models\kriteria;
use App\Models\matriks;
use App\Models\alt;
use Illuminate\Http\Request;
use DB;

class HitungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $kriteria = kriteria::all();
    //     $alt = alt::all();
    //     $matriks = matriks::with(['alt', 'kriteria'])->get();
    //     $minMax = [];
    //     $max = []; //utk menyimpan nilai min
    //     $min = []; //utk menyimpan nilai max
    //     $hasil = []; //array utk menyimpan hasil normalisasi
    //     $V = []; //untuk menyimpan nilai elemen matriks tertimbang
    //     $G = [];
    //     $Q = [];
    //     $rank = [];


    //     $desiredDecimal = 3;

    //     foreach ($kriteria as $k) {
    //         $G[$k->id] = 1; // Inisialisasi nilai untuk setiap kriteria
    //         $Q[$k->id] = [];
    //         foreach ($matriks as $m) {
    //             if (is_numeric($k->id) && $k->id == $m->kriteria_id) {
    //                 $minMax[$k->id][] = $m->nilai;
    //             }
    //         }
    //         if (!empty($minMax[$k->id])) {
    //             $values = $minMax[$k->id];
    //             $max[$k->id] = max($values);
    //             $min[$k->id] = min($values);
    //             foreach ($values as $value) {
    //                 $total = 0;
    //                 // ->where('kriteria_id', $item->id)
    //                 // ->where('alt_id', $a->id)
    //                 // ->first();

    //                 //normalisasi
    //                 if ($k->Jenis == 'Benefit') {
    //                     $normalisasi = ($value - $min[$k->id]) / ($max[$k->id] - $min[$k->id]);
    //                 } else if ($k->Jenis == 'Cost') {
    //                     $normalisasi = ($value - $max[$k->id]) / ($min[$k->id] - $max[$k->id]);
    //                 }
    //                 $total = $normalisasi;
    //                 $hasil[$k->id][] = number_format($normalisasi, $desiredDecimal);

    //                 //elemen matriks tertimbang
    //                 $Vw = ($normalisasi * $k->Bobot) + $k->Bobot;
    //                 $V[$k->id][] = number_format($Vw, $desiredDecimal);

    //                 //inisialisasi G
    //                 $G[$k->id] *= $Vw;
    //             }
    //             $G[$k->id] = pow($G[$k->id], 1 / count($alt));
    //             // dd($G);

    //             //Jarak alternatif dari daerah perkiraan batas (Q)
    //             foreach ($V[$k->id] as $Qval) {
    //                 $Q[$k->id][] = number_format($Qval - $G[$k->id], $desiredDecimal);
    //             }


    //         }
    //     }

    //     //ranking
    //     $rank = [];
    //     foreach ($alt as $a) {
    //         $totalRank = 0;
    //         foreach ($kriteria as $k) {
    //             $totalRank += $Q[$k->id][$a->id - 1];
    //         }
    //         $rank[$a->id] = $totalRank;
    //     }
    //     arsort($rank);
    //     dd($rank);

    //     return view('admin.hitung.index', compact('alt', 'kriteria', 'matriks', 'total', 'hasil', 'V', 'G', 'Q'));
    // }

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
