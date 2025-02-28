<?php 

require 'conn.php';

$uname = $_POST['user'];
$sname = $_POST['sname'];
$course = $_POST['Course'];
$dob = $_POST['dob'];
$addr = $_POST['addr'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$state = $_POST['state'];
$pass = $_POST['pswd'];
$cpass = $_POST['cpswd'];
$pin = $_POST['pin'];
$contact = $_POST['contact'];
$img_name = $_FILES['file']['name'];
$img_temp = $_FILES['file']['tmp_name'];
$folder = 'UploadImage/'.$img_name;
move_uploaded_file($img_temp, $folder);
$s = "select * from reg where uname='$uname'";
$q = mysqli_query($conn, $s);
if($r=mysqli_fetch_assoc($q)){
    @$db_uname = $r['uname'];
}
if($uname==@$db_uname){
    echo "<script>
    alert('Email already registered!')
    window.location.href ='Registration.php'
    </script>";
    exit();
}
$date = date("Y-m-d");
$sql = "insert into reg values('$uname', '$sname', '$course', '$dob', '$gender', '$addr', '$city', '$state', '$pass', '$cpass', '$pin', '$contact', '$folder', '$date')";

// echo $img_name."<br>";
// echo $uname, $sname, $course, $dob, $addr, $gender, $city, $state, $pass, $cpass, $pin, $contact, $folder;

if(mysqli_query($conn, $sql)){
    header('Location: index.php');
}



