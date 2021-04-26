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
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> --}}
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
                        <h3 class="panel-title" align="center">DATA LOKASI</h3>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                            <th><em class="fa fa-cog"></em></th>
                            <th>No</th>
                            <th>LOKASI</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($loc as $u)
                          <tr style="font-weight: bold;">
                            <td align="center">
                                <a href="#" data-toggle="modal" data-target="#loc{{ $u['id_location'] }}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                    <!-- MODAL UPDATE LOKASI -->
                                    <div class="modal" id="loc{{ $u['id_location'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Lokasi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                    <form action="{{ route('loc.update', $u['id_location']) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="lokasi">Lokasi</label>
                                                                <input type="lokasi" class="form-control" name="lokasi" value="{{ $u['name'] }}">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary" name="submit">Ubah</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                <form action="{{ route('hapus', $u['id_location']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><em class="fa fa-trash"></em></button>
                                </form>
                            </td>
                            <td>{{ $no }}</td>
                            <td>{{ $u['name'] }}</td>
                            </tr>
                            <?php $no = $no + 1; ?>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
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
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> --}}


</body>
</html>
