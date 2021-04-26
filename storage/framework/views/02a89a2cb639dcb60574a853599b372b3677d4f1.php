<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/cardout.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/title.css')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>SI ALING</title>

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
        width: 100%;
        height: 100%;
    }

    label {
        color: white;
        font-weight: bold;
    }

    img {
        width: 200px;
        height: 200px;
    }

</style>
<body>
<div class="jumbotron">
    <div class="text">
        <h1 style="text-align: center;">ABSENSI PETUGAS</h1>
    </div>
    <div class="row" style="margin-left: 40%">
        <div class="col-md-4">
            <form method="post" action="">
                <div class="form-group">
                    <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP" autofocus>
                </div>
            </form>
            
        </div>
    </div>
</div>

                    
                    

<!-- MODAL CARD OUTPUT -->
    <div class="modal fade" id="adminout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="card-container">
                        <span class="pro">PETUGAS</span>
                        <img class="round" src="" alt="user"/>
                        <h3></h3>
                        <p>Pos: </p>
                        <p>Waktu: </p>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                    <!-- <footer>
                        <p>
                            Created with <i class="fa fa-heart"></i> by
                            <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
                            - Read how I created this
                            <a target="_blank" href="https://florin-pop.com/blog/2019/04/profile-card-design">here</a>
                            - Design made by
                            <a target="_blank" href="https://dribbble.com/shots/6276930-Profile-Card-UI-Design">Ildiesign</a>
                        </p>
                    </footer> -->
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#adminout").modal("show")
    </script>
</body>
</html>



<?php /**PATH D:\Ridka\resources\views/user.blade.php ENDPATH**/ ?>