<?php 

require 'conn.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "select * from reg where uname='$email' and pass='$pass'";
$q = mysqli_query($conn, $sql);
if($r=mysqli_fetch_assoc($q)){
    $db_uname = $r['uname'];
    $db_sname = $r['sname'];
    $db_pass = $r['pass'];
    $db_image = $r['image'];
    session_start();
    $_SESSION['student'] = $db_uname;
    $_SESSION['img'] = $db_image;
    $_SESSION['sname'] = $db_sname;
    if($email==$db_uname and $pass==$db_pass){
        echo "<script>
        alert('Login Successfully!')
        window.location.href='Student.php'
        </script>";
    }
}
else{
    echo "<script>
        alert('Password or Username incorrect!')
        window.location.href='index.php'
        </script>";
}