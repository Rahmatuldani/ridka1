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


</head>
<style type="text/css">
    body {
        background-image: url("<?php echo e(asset('uploads/hh.jpeg')); ?>");
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

<form class="form-inline my-2 my-lg-0" method="GET">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="x">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li><a href="logout.php" class="btn btn-dark">Logout</a></li>
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
              <a class="dropdown-item" href="add.php">Get Atlet's Profile</a>
              <a class="dropdown-item" href="addco.php">Get Coach's Profile</a>
                            <a class="dropdown-item" href="addf.php">Get Suporter's Profile</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="wrapper d-flex">
      <div class="sideMenu bg-mattBlackLight">
        <div class="sidebar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link px-2">
                <i class="material-icons icon">
                  dashboard
                </i>
                <span class="text">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="club.php" class="nav-link px-2">
                <i class="material-icons icon">
                  person
                </i>
                <span class="text">Input Petugas</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="azone.php" class="nav-link px-2">
                <i class="material-icons icon"> insert_chart </i
                ><span class="text">Input Lokasi</span></a
              >
            </li>
            <li class="nav-item">
              <a href="czone.php" class="nav-link px-2">
                <i class="material-icons icon">
                  settings
                </i>
                <span class="text">Data Petugas</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="stc.php" class="nav-link px-2">
                <i class="material-icons icon">
                  pages
                </i>
                <span class="text">Riwayat Absensi</span>
              </a>
            </li>
             <li class="nav-item">
              <a href="tc.php" class="nav-link px-2">
                <i class="material-icons icon">
                  pages
                </i>
                <span class="text">Cetak Barcode</span>
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
        <h1 style="text-align: center;">INPUT LOKASI</h1>
</div>
<div class="container " style="padding-top: 20pt">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="lokasi">Lokasi lain</label>
                    <textarea name="lokasi" placeholder="Masukkan lokasi baru" class="form-control" ></textarea>
                </div>

                <input class="btn btn-dark" type="submit" name="upload" value="Add">
                </div>



                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>



</body>
</html>
<?php /**PATH D:\Ridka\resources\views/location.blade.php ENDPATH**/ ?>