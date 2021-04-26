<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <title>SI ALING</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
    <style type="text/css">
        body {
        background-image: url("<?php echo e(asset('uploads/hh.jpeg')); ?>");
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }
    .jumbotron {
            opacity: .7;
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
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col col-xs-6">
                        <h3 class="panel-title" align="center">DATA PETUGAS KONTROL KELILING</h3>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
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
                              <tr>
                                <td align="center">
                                  <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                  <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                </td>
                                <td class="hidden-xs">1</td>
                                <td>Leo</td>
                                <td>leo@example.com</td>
                              </tr>

                        </tbody>
                    </table>
                  </div>
                  <div class="panel-footer">
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
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</body>
</html>
<?php /**PATH D:\Ridka\resources\views/outkar.blade.php ENDPATH**/ ?>