<?php

require 'conn.php';
session_start();
if($_SESSION==null){
    echo "<script>
    alert('First Login to the page!')
    window.location.href='index.php'
    </script>";
}
$stu = $_SESSION['student'];

if(isset($_POST['update'])){
    $sname = $_POST['sname'];
    $course = $_POST['course'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];
    $img_name = $_FILES['file']['name'];
    $img_temp = $_FILES['file']['tmp_name'];
    $old_img = $_POST['old_image'];
    $old_filename = substr($old_img, 12);

    // $check = ($old_img==$img_name) ? 'true' : 'false';

    $folder = 'UploadImage/'.$img_name;

    $query1 = "UPDATE reg SET sname='$sname', course='$course', dob='$dob', contact='$contact', `address`='$address', city='$city', `state`='$state', `image`='$folder' WHERE uname='$stu'";

    $query2 = "UPDATE reg SET sname='$sname', course='$course', dob='$dob', contact='$contact', `address`='$address', city='$city', `state`='$state' WHERE uname='$stu'";

    if($img_name!='' and $img_name!==$old_filename){
        mysqli_query($conn, $query1);
        move_uploaded_file($img_temp, $folder);
        unlink($old_img);
        echo 'Image Updated!';
    }
    elseif($img_name==$old_img){
        echo 'Image already exist!';
    }
    else{
        mysqli_query($conn, $query2);
        echo 'Image not updated!';
    }
    
    header('Location: stu_profile.php');
    // if($old_img==$folder){
    //     echo 'true';
    // }else{
    //     echo 'false';
    // }
}