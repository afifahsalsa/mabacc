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
                            <h1>Masukkan Data Kriteria</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="card-body m-4">
                    <div class="table-responsive">
                        <form action="{{ route('kriteria.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Kode</label>
                                <select name="Code" class="form-control">
                                    <option value="C1">C1</option>
                                    <option value="C2">C2</option>
                                    <option value="C3">C3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="Nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Bobot</label>
                                <input type="text" name="Bobot" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Jenis</label>
                                <select name="Jenis" class="form-control">
                                    <option value="Cost">Cost</option>
                                    <option value="Benefit">Benefit</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between my-4">
                                    <a href="{{ route('kriteria.index') }}" class="btn bg-dark-light">Kembali</a>
                                    <button type="submit" class=" btn bg-primary-light">Simpan Kriteria</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
