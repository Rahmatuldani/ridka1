<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Document</title>

	<!-- Custom fonts for this template-->
	<link href="{{ asset('css1/all.min.css')}}" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="{{ asset('css1/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Postingan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Pos</th>
                                <th>Photo</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Post</th>
                                <th>Photo</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($user as $u)
                                <tr>
                                    <td>{{ $u['nip'] }}</td>
                                    <td>{{ $u['nama'] }}</td>
                                    <td>{{ $u['id_location'] }}</td>
                                    <td>{{ $u['foto'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


<!-- Bootstrap core JavaScript-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{ asset('datatables/jquery.dataTables.min.js')}} "></script>
<script src="{{ asset('datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('js/datatables-demo.js')}}"></script>

</body>

</html>
