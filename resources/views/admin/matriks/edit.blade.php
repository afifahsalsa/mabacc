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
                            <h1>Edit Data Matriks Keputusan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="card-body m-4">
                    <div class="table-responsive">
                        <div class="card-body">
                            <form action="{{ route('matriks.update', $matriks->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label>Alt</label>
                                    <select class="form-control" name="alt">
                                        @foreach ($alt as $alts)
                                            <option value="{{ $alts->id }}"> {{ $alts->Kode }} </option>
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
                                    <button class="btn btn-primary btn-block">Update Matriks</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
