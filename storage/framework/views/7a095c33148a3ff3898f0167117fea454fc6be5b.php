<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="title">
            <?php
echo DNS2D::getBarcodeHTML('4445645656', 'QRCODE');
echo DNS2D::getBarcodePNGPath('4445645656', 'PDF417');
echo DNS2D::getBarcodeSVG('4445645656', 'DATAMATRIX');
echo '<img src="data:image/png;base64,' . DNS2D::getBarcodePNG('4', 'PDF417') . '" alt="barcode"   />';

?>
        </div>
    </div>


</body>
</html>
<?php /**PATH D:\Ridka\resources\views/test.blade.php ENDPATH**/ ?>