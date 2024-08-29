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
                            <h1>Masukkan Data Alternatif</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="card-body m-4">
                    <div class="table-responsive">
                        <form action="{{ route('alt.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Kode</label>
                                <select name="Kode" class="form-control">
                                    <option value="H1">H1</option>
                                    <option value="H2">H2</option>
                                    <option value="H3">H3</option>
                                    <option value="H4">H4</option>
                                    <option value="H5">H5</option>
                                    <option value="H6">H6</option>
                                    <option value="H7">H7</option>
                                    <option value="H8">H8</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alternatif</label>
                                <input type="text" name="Alt" class="form-control">
                                <div class="form-group">
                                    <div class="d-flex justify-content-between my-4">
                                        <a href="{{ route('alt.index') }}" class="btn bg-dark-light">Kembali</a>
                                        <button type="submit" class=" btn bg-primary-light">Simpan Alternatif</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
