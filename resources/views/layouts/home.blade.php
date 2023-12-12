@extends('layouts.master')

@section('content')
    <!DOCTYPE html>
    <html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Tautan ke file CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Tautan ke PDF.js dan Viewer melalui CDN -->
        <script type="text/javascript" src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    </head>

    <body>


        <!-- Your HTML content here -->

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Jurnal Sistem Pendukung Keputusan</h2>
                        </div>
                        <div class="card-body">
                            <!-- Tambahkan tag iframe dengan sumber PDF.js Viewer -->
                            <iframe src="https://ejurnal.seminar-id.com/index.php/josh/article/view/2415/1452" width="100%" height="600px" style="border: none;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tautan ke file JavaScript Bootstrap dan jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>

    </html>
@endsection
