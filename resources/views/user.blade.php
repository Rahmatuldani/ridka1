<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cardout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/title.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>SI ALING</title>

</head>
<style type="text/css">
    body {
        background-image: url("{{ asset('uploads/hh.jpeg') }}");
        background-position: center;
        background-size: cover;
        background-attachment: fixed;

    }

    .jumbotron {
        opacity: .7;
        background-color: black;
        width: 100%;
        height: 100%;
    }

    label {
        color: white;
        font-weight: bold;
    }

    img {
        width: 200px;
        height: 200px;
    }

</style>
<body>
<div class="jumbotron">
    <div class="text">
        <h1 style="text-align: center;">ABSENSI PETUGAS</h1>
    </div>
    <div class="row" style="margin-left: 40%">
        <div class="col-md-4">
            <form method="post" action="{{ route('absen', $loc['id_location']) }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP" autofocus>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>



