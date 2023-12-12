@extends('layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="pagetitle">
                            <h1>Normalisasi</h1>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="pagetitle">
                            <a href="{{ route('matriks.index') }}" class="btn bg-primary-light border-dark float-right"><i
                                    class="bi bi-arrow-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered my-3" id="example" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            @foreach ($kriteria as $k)
                                                <th>{{ $k->Code }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alt as $a)
                                            <tr>
                                                <td>{{ $a->Alt }}</td>
                                                @foreach ($kriteria as $k)
                                                    @php
                                                        $matriksforcriteria = $matriks
                                                            ->where('alt_id', $a->id)
                                                            ->where('kriteria_id', $k->id)
                                                            ->first();
                                                    @endphp
                                                    <td>{{ $hasil[$k->id][$a->id - 1] ?? 'N/A' }}
                                                    </td>
                                                    {{-- <td>{{ number_format($tij[$k->id][$a->id], $desired) }}</td> --}}
                                                    {{-- <td>{{ number_format($normalisasi[$k->Code][$alt->Alt], 2) }}</td> --}}
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="card-header py-3">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="pagetitle">
                            <h1>Elemen Matriks Tertimbang (V)</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered my-3" id="example" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            @foreach ($kriteria as $k)
                                                <th>{{ $k->Code }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alt as $a)
                                            <tr>
                                                <td>{{ $a->Alt }}</td>
                                                @foreach ($kriteria as $k)
                                                    @php
                                                        $matriksforcriteria = $matriks
                                                            ->where('alt_id', $a->id)
                                                            ->where('kriteria_id', $k->id)
                                                            ->first();
                                                    @endphp
                                                    <td>{{ $V[$k->id][$a->id - 1] ?? 'N/A' }}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="card-header py-3">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="pagetitle">
                            <h1>Matriks Area Perkiraan Batas (G)</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered my-3" id="example" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            @foreach ($kriteria as $k)
                                                <th>{{ $k->Code }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>G</td>
                                            @foreach ($kriteria as $k)
                                                @php
                                                    $matriksforcriteria = $matriks
                                                        ->where('alt_id', $a->id)
                                                        ->where('kriteria_id', $k->id)
                                                        ->first();
                                                @endphp
                                                <td>{{ $G[$k->id] ?? 'N/A' }}</td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="card-header py-3">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="pagetitle">
                            <h1>Jarak Alternatif dari Daerah Perkiraan Perbatasan (Q)</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered my-3" id="example" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            @foreach ($kriteria as $k)
                                                <th>{{ $k->Code }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alt as $a)
                                            <tr>
                                                <td>{{ $a->Alt }}</td>
                                                @foreach ($kriteria as $k)
                                                    @php
                                                        $matriksforcriteria = $matriks
                                                            ->where('alt_id', $a->id)
                                                            ->where('kriteria_id', $k->id)
                                                            ->first();
                                                    @endphp
                                                    <td>{{ $Q[$k->id][$a->id - 1] ?? 'N/A' }}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="card-header py-3">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="pagetitle">
                            <h1>Ranking</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered my-3" id="example" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            <th>Value</th>
                                            <th>Ranking</th>
                                            {{-- @foreach ($kriteria as $k)
                                                <th>{{ $k->Code }}</th>
                                            @endforeach --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $ranking = 1;
                                        @endphp
                                        @foreach ($alt as $a)
                                            <tr>
                                                <td>{{ $a->Alt }}</td>
                                                <td>{{ $rank[$a->id] }}</td>
                                                <td>{{ array_search($a->id, array_keys($rank)) + 1 }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
