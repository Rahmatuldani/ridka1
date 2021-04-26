
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('css1/title.css') }}">
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

    label {
        color: white;
        font-weight: bold;
    }

    img {
        width: 200px;
        height: 200px;
    }
    .jumbotron {
        opacity: .7;
        background-color: black;
        margin-left: 20%;
        margin-right: 20%;
        margin-top: 10%;
        margin-bottom: 10%;


    }

</style>
<body>

<div class="jumbotron">
    <div class="text">
        <h1 style="text-align: center;">EDIT DATA PETUGAS</h1>
</div>
<div class="container " style="padding-top: 20pt">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{ route('riwayat.update') }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control" name="nip" id="nip" value="{{ $user['nip'] }}"
                           placeholder="NIP Petugas">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ $user['nama'] }}"
                           placeholder="Nama Petugas">
                </div>
                <div class="form-group">
                    <label for="pos">Pos Paviliun</label>
                    <select class="form-control" name="pos" id="pos">
                        <option value="{{ $user['id_location'] }}" selected>{{ $user['name'] }}</option>
                        @foreach ($loc as $l)
                            <option value="{{ $l['id_location']}}">{{ $l['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <input class="btn btn-danger" type="submit" name="submit" value="Submit">
                </div>

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
