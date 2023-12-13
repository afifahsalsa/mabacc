@extends('layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="pagetitle">
                            <h1>Matriks Keputusan</h1>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="pagetitle">
                            <a href="{{ route('kriteria.index') }}"
                                class="btn bg-primary-light border-dark float-right mx-2"><i
                                    class="bi bi-arrow-left"></i></a>
                            @if ($kriteria->count() > 0)
                                <a href="{{ route('matriks.create') }}"
                                    class="btn bg-primary-light float-end border-dark"><i class="bi bi-plus-lg"></i></a>
                            @else
                                <button class="btn bi bi-plus-lg bg-primary-light border-dark float-end"
                                    onclick="showAlert()""> </button>
                            @endif
                        </div>
                        <script>
                            function showAlert() {
                                alert('Isi kriteria atau alternatif dulu');
                            }
                        </script>
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
                                            @foreach ($kriteria as $item)
                                                <th>{{ $item->Code }}</th>
                                            @endforeach
                                            <th width="250px">Action</th>
                                        </tr>
                                    </thead>
                                    @if ($matriks->count() > 0)
                                        <tbody>
                                            @foreach ($alt as $a)
                                                <tr>
                                                    <td>{{ $a->Kode }}</td>
                                                    @foreach ($kriteria as $item)
                                                        @php
                                                            $matriksValue = $matriks
                                                                ->where('kriteria_id', $item->id)
                                                                ->where('alt_id', $a->id)
                                                                ->first();
                                                        @endphp
                                                        <td>{{ $matriksValue ? $matriksValue->nilai : null }}</td>
                                                    @endforeach
                                                    <td>
                                                        <div class="ml-4">
                                                            <form action="{{ route('matriks.destroy', $item->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <a href="{{ route('matriks.edit', $a->id) }}"
                                                                    class="btn bg-gradient-success btn-sm text-black"><i
                                                                        class="bi bi-pencil-square h4"></i></a>
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
                                    @else
                                        <a class="" onshow="showAlert()""></a>
                                    @endif
                                    <script>
                                        function showAlert(){
                                            alert('Isi kriteria atau alternatif dulu');
                                        }
                                    </script>
                                </table>
                                <a href="{{ route('hitung.index') }}"
                                    class="btn bg-blue float-end border-dark">Normalisasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
