<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <title>SI ALING</title>
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <!-- Custom fonts for this template-->
	
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
                    <a href="<?php echo e(route('admin.index')); ?>" class="btn btn-primary btn-lg">KEMBALI</a>
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
                          <?php $__currentLoopData = $loc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr style="font-weight: bold;">
                            <td align="center">
                                <a href="#" data-toggle="modal" data-target="#loc<?php echo e($u['id_location']); ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                    <!-- MODAL UPDATE LOKASI -->
                                    <div class="modal" id="loc<?php echo e($u['id_location']); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Lokasi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                    <form action="<?php echo e(route('loc.update', $u['id_location'])); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="lokasi">Lokasi</label>
                                                                <input type="lokasi" class="form-control" name="lokasi" value="<?php echo e($u['name']); ?>">
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
                                <form action="<?php echo e(route('hapus', $u['id_location'])); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger"><em class="fa fa-trash"></em></button>
                                </form>
                            </td>
                            <td><?php echo e($no); ?></td>
                            <td><?php echo e($u['name']); ?></td>
                            </tr>
                            <?php $no = $no + 1; ?>
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
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>




</body>
</html>
<?php /**PATH E:\Ridka\resources\views/outloc.blade.php ENDPATH**/ ?>