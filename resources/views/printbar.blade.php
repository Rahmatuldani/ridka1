
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>SI ALING</title>
</head>
<body>
    <div class="d-flex justify-content-end mb-4">
        <a class="btn btn-primary" href="{{ URL::to('/pdf') }}">Export to PDF</a>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($data as $d)
                <div class="card m-2" style="width: 15rem;">
                    <div class="card-body">
                        <?= DNS2D::getBarcodeHTML($url.base64_encode($d['name']), 'QRCODE', 3,3); ?>
                        <h5 class="card-title" style="margin-top: 20px;">{{ $d['name'] }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
