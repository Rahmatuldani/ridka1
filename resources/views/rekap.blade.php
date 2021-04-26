<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
<!--     <link rel="stylesheet" type="text/css" href="title.css">
 -->    <title>SI ALING</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


    <link
      rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous"/>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <link
      rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous"/>
    <link
      rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY="
      crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css" />
    <!-- Favicons -->
    <link href="https://lh3.googleusercontent.com/tOJG63X9vVSUxroufE9Jp_EbiPHzTMG0ll6G3U03_vYSUAHxA5uVpJv-VsoRtkOzxg" rel="icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


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
    .gbr img {
          width: 5%;
          height: 5%;
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
    <nav
    class="navbar navbar-expand-lg navbar-dark bg-mattBlackLight fixed-top"
  >
    <button class="navbar-toggler sideMenuToggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="#">ADMIN</a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="gbr">
        <img src="https://th.bing.com/th/id/Rf97c8371e8efb8d0da81e7c8f74b7360?rik=KQYJUzX11EG10w&riu=http%3a%2f%2f1.bp.blogspot.com%2f-Yct4GVmcmGg%2fU3GQ52rZIZI%2fAAAAAAAAB-E%2f2Nmf5RaW3Zo%2fs1600%2fLogo%2bBaru%2bKemenkumham.png&ehk=mDumOtjChkctXRQ%2bMtX%2f0syHmMSb2ltgX8rWZh0T%2bWc%3d&risl=&pid=ImgRaw" alt="">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Logo_Lapas.png" alt="">
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li><a href="{{ route('logout') }}" class="btn btn-dark">Logout</a></li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle p-0"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i class="material-icons icon">
              person
            </i>
            <span class="text">Account</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="https://www.youtube.com/channel/UC20MIrqo_yFloOVyjh6CfHg" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a>
            <a class="dropdown-item" href="https://www.instagram.com/lpkajogja/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
            <a class="dropdown-item" href="https://www.facebook.com/search/top?q=lpka%20jogja" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="wrapper d-flex">
    <div class="sideMenu bg-mattBlackLight" style="margin-top: 5%">
      <div class="sidebar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{ route('admin.index') }}" class="nav-link px-2">
              <i class="material-icons icon">
                dashboard
              </i>
              <span class="text">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('loc.index') }}" class="nav-link px-2">
              <i class="material-icons icon"> insert_chart </i
              ><span class="text">Input Lokasi</span></a>
          </li>
          <li class="nav-item">
            <a href="{{ route('outkar') }}" class="nav-link px-2">
              <i class="material-icons icon">
                settings
              </i>
              <span class="text">Data Petugas</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('outloc') }}" class="nav-link px-2">
              <i class="material-icons icon">
                settings
              </i>
              <span class="text">Data Lokasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('riwayat') }}" class="nav-link px-2">
              <i class="material-icons icon">
                pages
              </i>
              <span class="text">Riwayat Absensi</span>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{ route('barcode') }}" class="nav-link px-2">
              <i class="material-icons icon">
                pages
              </i>
              <span class="text">Cetak Barcode</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/rekap') }}" class="nav-link px-2">
              <i class="material-icons icon">
                pages
              </i>
              <span class="text">Rekap Karyawan</span>
            </a>
          </li>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>


<div class="jumbotron">
    <div class="text">
        <h1 style="text-align: center;">Data Rekapitulasi Karyawan</h1>
</div>
<div class="container " style="padding-top: 20pt">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
            <form action="{{ route('rekap') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="lokasi">Masukan rentang tanggal</label>
                    <input type="date" name="fdate" id="date" required>
                    <input type="date" name="ldate" id="date" required>
                </div>

                <input class="btn btn-dark" type="submit" name="upload" value="Cari">
                </div>



                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>



</body>
</html>
