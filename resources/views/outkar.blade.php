<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="stylesheet" type="text/css" href="title.css"> --}}

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>SI ALING</title>
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Custom fonts for this template-->
	{{-- <link href="{{ asset('css1/all.min.css')}}" rel="stylesheet" type="text/css"> --}}
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="{{ asset('css1/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">


</head>
    <style type="text/css">
        body {
        background-image: url("{{ asset('uploads/hh.jpeg') }}");
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }
    .jumbotron {
            background-color: black;
        }
        .card-body p{
            background-color: orange;
            font-weight: bold;
        }
        .card {
            margin-top: 5%;
        }
        input .submit {
            margin-top: 5%;
        }

    </style>
<body>
    <div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">
                    <a href="{{ route('admin.index') }}" class="btn btn-primary btn-lg">KEMBALI</a>
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col col-xs-6">
                        <h3 class="panel-title" align="center">DATA PETUGAS KONTROL KELILING</h3>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                            <th><em class="fa fa-cog"></em></th>
                            <th class="hidden-xs">NIP</th>
                            <th>NAMA</th>
                            <th>LOKASI</th>
                            <th>FOTO</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $u)
                            <tr style="font-weight: bold;">
                                <td align="center">
                                    <form action="{{ route('user.show', $u['id']) }}" method="GET">
                                        <button type="submit" class="btn btn-primary"><em class="fa fa-pencil"></em></button>
                                    </form>
                                  <form action="{{ route('user.destroy', $u['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><em class="fa fa-trash"></em></button>
                                </form>
                                </td>
                                <td class="hidden-xs">{{ $u['nip'] }}</td>
                                <td>{{ $u['nama'] }}</td>
                                <td>{{ $u['name'] }}</td>
                                <td>
                                    <img src="{{ asset('/images/'.$u['foto']) }}" alt="foto" width="100">
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
                  {{-- <div class="panel-footer">
                    <div class="row">
                      <div class="col col-xs-4">Page 1 of 5
                      </div>
                      <div class="col col-xs-8">
                        <ul class="pagination hidden-xs pull-right">
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                        </ul>
                        <ul class="pagination visible-xs pull-right">
                            <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div> --}}
                </div>
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

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>


</body>
</html>
