<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    

    <title>SI ALING</title>
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Custom fonts for this template-->
	<link href="<?php echo e(asset('css1/all.min.css')); ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="<?php echo e(asset('css1/sb-admin-2.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
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
                    <a href="<?php echo e(route('admin.index')); ?>" class="btn btn-primary">KEMBALI</a>
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col col-xs-6">
                        <h3 class="panel-title" align="center">RIWAYAT ABSENSI PETUGAS</h3>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                            <th><em class="fa fa-cog"></em></th>
                            <th class="hidden-xs">NIP</th>
                            <th>Nama</th>
                            <th>Lokasi</th>
                            <th>Foto</th>
                            <th>Waktu</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php $__currentLoopData = $riwayat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr style="font-weight: bold;">
                                <td align="center">
                                <form action="<?php echo e(route('loc.destroy', $r['id_riwayat'])); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger"><em class="fa fa-trash"></em></button>
                                </form>
                                </td>
                                <td><?php echo e($r['id_riwayat']); ?></td>
                                <td><?php echo e($r['nama']); ?></td>
                                <td><?php echo e($r['name']); ?></td>
                                <td>
                                    <img src="<?php echo e(asset('/images/'.$r['foto'])); ?>" alt="foto" width="100">
                                </td>
                                <td><?php echo e($r['time']); ?></td>
                            </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo e(asset('js/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo e(asset('datatables/jquery.dataTables.min.js')); ?> "></script>
<script src="<?php echo e(asset('datatables/dataTables.bootstrap4.min.js')); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo e(asset('js/datatables-demo.js')); ?>"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

</body>
</html>
<?php /**PATH E:\Ridka\resources\views/riwayat.blade.php ENDPATH**/ ?>