@extends('layouts.master')
@section('content')
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="pagetitle">
                            <h1>Masukkan Matriks Keputusan</h1>
                        </div>
                    </div>
                    {{-- <div class="col-4">
                <div class="pagetitle text-end">
                    <a href="{{ route('alt.create') }}" class="btn btn-outline-primary"><i class="bi bi-plus-lg"></i></a>
                </div>
            </div> --}}
                </div>
            </div>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="card-body m-4">
                    <div class="table-responsive">
                        <form action="{{ route('matriks.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Alt</label>
                                <select class="form-control" name="Alt">
                                    @foreach ($alt as $alts)
                                        <option value="{{ $alts->Kode }}"> {{ $alts->Kode }} </option>
                                    @endforeach
                                </select>
                            </div>
                            @foreach ($kriteria as $k)
                                <div class="form-group">
                                    <label>{{ $k->Code }}</label>
                                    <input type="text" class="form-control" name="nilai[{{ $k->id }}]">
                                </div>
                            @endforeach

                            <div class="form-group">
                                <div class="d-flex justify-content-between my-4">
                                    <a href="{{ route('matriks.index') }}" class="btn bg-dark-light">Kembali</a>
                                    <button type="submit" class=" btn bg-primary-light">Simpan Matriks</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
