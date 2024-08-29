@extends('layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="pagetitle">
                            <h1>Alternatif</h1>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="pagetitle">
                            <a href="{{ route('alt.create') }}" class="btn bg-primary-light float-end border-dark" ><i class="bi bi-plus-lg"></i></a>
                             {{-- @include('admin.alt.create') --}}
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
                                            <th>Kode</th>
                                            <th>Alternatif</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alt as $item)
                                            <tr>
                                                <td>{{ $item->Kode }}</td>
                                                <td>{{ $item->Alt }}</td>
                                                <td>
                                                    <a href="{{ route('alt.edit', $item->id) }}" class="btn btn-link">
                                                        <i class="bi bi-pencil-square h4"></i>
                                                    </a>
                                                    <form action="{{ route('alt.destroy', $item->id) }}" method="post"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-link"
                                                            onclick="return confirm('yakin mau dihapus?')">
                                                            <i class="bi bi-trash h4"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="{{ route('kriteria.index') }}"
                                    class="btn bg-blue float-end border-dark">Input Kriteria</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
