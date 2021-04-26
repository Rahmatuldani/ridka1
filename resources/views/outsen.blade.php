

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css1/cardout.css') }}">

        <title>SI ALING</title>

    </head>
    <style type="text/css">
        body {
            background-image:  url("{{ asset('uploads/hh.jpeg') }}");
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
        <div class="alert alert-primary" role="alert">
            Anda telah absen
          </div>
        <div class="card-container">
                            <span class="pro">PETUGAS</span>
                            <img class="round" src="{{ asset('/images/'.$data['foto']) }}" alt="user"/>
                            <h3>{{ $data['nama'] }}</h3>
                            <p>Pos: {{ $loc['name'] }}</p>
                            <p>Waktu: {{ $time }}</p>

                        </div>
            </div>
                        <!-- <footer>
                            <p>
                                Created with <i class="fa fa-heart"></i> by
                                <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
                                - Read how I created this
                                <a target="_blank" href="https://florin-pop.com/blog/2019/04/profile-card-design">here</a>
                                - Design made by
                                <a target="_blank" href="https://dribbble.com/shots/6276930-Profile-Card-UI-Design">Ildiesign</a>
                            </p>
                        </footer> -->

                        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


    </body>
    </html>



