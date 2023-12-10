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
                            <h1>Edit Data Alternatif</h1>
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
                            <form action="{{ route('alt.update', $alt->id) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label>Kode</label>
                                    <input type="text" class="form-control my-2" name="Kode"
                                        value="{{ $alt->Kode }}">
                                </div>
                                <div class="form-group">
                                    <label>Alternatif</label>
                                    <input type="text" class="form-control my-2" name="Alt"
                                        value="{{ $alt->Alt }}">
                                </div>

                                <div class="form-group">
                                    <button class="btn bg-primary-light float-end border-dark my-2 float-end">Update Alternatif</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
