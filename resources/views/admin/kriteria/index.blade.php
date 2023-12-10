@extends('layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="pagetitle">
                            <h1>Kriteria</h1>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="pagetitle">
                            <a href="{{ route('kriteria.create') }}" class="btn bg-primary-light border-dark float-right"><i
                                    class="bi bi-plus-lg"></i></a>
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
                                            <th>Code</th>
                                            <th>Nama</th>
                                            <th>Bobot</th>
                                            <th>Jenis</th>
                                            <th width="150px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kriteria as $item)
                                            <tr>
                                                <td>{{ $item->Code }}</td>
                                                <td>{{ $item->Nama }}</td>
                                                <td>{{ $item->Bobot }}</td>
                                                <td>{{ $item->Jenis }}</td>
                                                <td>
                                                    <div class="container">
                                                        <a href="{{ route('kriteria.edit', $item->id) }}"
                                                            class="btn bg-gradient-success btn-sm text-black"><i
                                                                class="bi bi-pencil-square h4"></i></a>
                                                        <form action="{{ route('kriteria.destroy', $item->id) }}"
                                                            method="post" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn bg-gradient-danger btn-sm text-black"
                                                                onclick="return confirm('yakin mau dihapus?')"><i
                                                                    class="bi bi-trash h4"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="{{ route('matriks.index') }}" class="btn bg-primary-light border-dark float-end">Matriks Keputusan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
