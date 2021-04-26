<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI ALING</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        body {
          background-image: url("{{ asset('uploads/hh.jpeg') }}");
          background-position: center;
          background-size: cover;
          background-attachment: fixed;
        }
    </style>

</head>

<body>

    <div class="container my-5">
        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Begin Page Content -->
                    <div class="container-fluid m-3">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800" align="center">Data Rekap Karyawan</h1>
                        <h1 class="h3 mb-4 text-gray-800" align="center">{{ $date }}</h1>

                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"></h6>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Tanggal dan Jam</th>
                                            <th scope="col">Lokasi</th>
                                            <th scope="col">Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data as $d)
                                      <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $d['nama'] }}</td>
                                        <td>{{ $d['time'] }}</td>
                                        <td>{{ $d['name'] }}</td>
                                        <td>
                                            <img src="{{ asset('/images/'.$d['foto']) }}" alt="foto" width="100">
                                        </td>
                                      </tr>
                                      <?php $no = $no + 1; ?>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sbadmin2/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
