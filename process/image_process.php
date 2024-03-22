<?php

include 'connection.php';

if(isset($_FILES['image'])) {
    // echo "<pre>";
    // print_r($_FILES['image']);

    $img_name = $_FILES['image']['name'];
    $img_size =$_FILES['image']['size'];
    $img_tmp =$_FILES['image']['tmp_name'];
    $img_type=$_FILES['image']['type'];

    $extensions = array("jpeg","jpg","png");

    $img_extension = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));

    if( in_array($img_extension, $extensions) ) {

        if($img_size > 2097152) {
            header('location: ../views/image_upload.php?error=IMage is too large');    
            exit();
        }else {

            $new_img_name = "IMG-" . uniqid() . "." . $img_extension;
            $new_img_path = "../uploads/" . $new_img_name;
            $img_path = move_uploaded_file($img_tmp, $new_img_path);
            
            $date = date('Y-m-d H:i:sa');
            $img_query = "INSERT INTO upload(img_name, uploaded_at) 
                          VALUES('$new_img_name', '$date')";
            $result = mysqli_query($conn, $img_query); 

            if($result) {
                header('location: ../views/image_upload.php');
            }

        }


    }else {
        header('location: ../views/image_upload.php?error=Extension not allowed');    


}
}