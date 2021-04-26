<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css1/card1.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css1/title1.css')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>SI ALING</title>

</head>
    <style type="text/css">
        body {
            background-image: url("<?php echo e(asset('uploads/kk.jpeg')); ?>");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .jumbotron {
            opacity: .7;
            background-color: black;
            width: 100%;
            height: 100%;
        }


    </style>

<body>
    <div class="jumbotron">
      <div class="flux">SISTEM ADMINISTRASI KONTROL KELILING</div>
        <div class="container">
  

  <div class="card bg-secondary ">
    <img src="https://icon-library.com/images/system-administrator-icon/system-administrator-icon-1.jpg" alt="Person" class="card__image">
    <a href="#" data-toggle="modal" data-target="#admin"><button class="btn draw-border">ADMIN</button></a>
  </div>
</div>
</div>


<!-- MODAL LOGIN ADMIN -->
<div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADMIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="<?php echo e(route('admin.index')); ?>" method="GET">
            <?php echo csrf_field(); ?>
      <div class="modal-body">

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>

    </div>
    </form>

  </div>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</body>
</html>
<?php /**PATH D:\Ridka\resources\views/index.blade.php ENDPATH**/ ?>