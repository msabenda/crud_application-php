<?php
include '../process/connection.php';

$sql = "SELECT * FROM upload";
$images = mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image | Form</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container w-50 mt-5">

            <div class="alert">
                <?php
                if(isset($_GET['error'])){

                echo "<p> . $_GET[error] . </p>";
                }?>
            </div>

        <form method="POST" action="../process/image_process.php" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <input class="form-control" type="file" name="image" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>

        <div class="mt-5 grid ">
            <div class="row">

            <?php foreach($images as $image) : ?>

            <div class="card col-lg-4 ">
                <div class="card-body">
                    <img src="../uploads/<?=$image['img_name']?>" width="100%" alt="">
                </div>
            </div>
            
            <?php endforeach ?>
            </div>
            
        </div>
    </div>
</body>
</html>
