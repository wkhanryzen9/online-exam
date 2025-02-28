<?php

session_start();
$admin = $_SESSION['name'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&family=Baloo+Bhaina+2:wght@800&display=swap" rel="stylesheet">
    <style>

        /* CSS RESET  */
        body{
            font-family: 'Baloo Bhai 2', cursive;
            margin: 0px;
            padding: 0px;
            background: url(Images/Student7.jpg);
            background-repeat:no-repeat ;
           background-size: 1550px 800px;  
           font-family: Baloo Bhai;  
           
        }

.input
{
width:400px;
height:35px;
border:2px solid grey;
font-size:16px;
margin-left:50px;
}
        .navbar
        {
         display: inline-block;
         /* border: 3px solid white; */
        margin-left: 2%;
         margin-top: 25px;
         border-radius: 5px;
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: white;
            font-size: 23px;
            padding: 13px 15px;
            text-decoration: none;
        }
        .navbar li a:hover{
           
           color: grey;
           font-size: 23px;
           padding: 13px 15px;
           text-decoration: none; 
       }


       .div{
        width:95%;
        height:480px;
        border:2px solid grey;
        overflow:auto;
        border-radius: 30px;
        box-shadow:0px 0px 1rem 1rem grey inset; 
        background-color:lightgrey;
        border: 5px solid grey;
        margin-left: auto;
        margin-right: auto;
       }

       table{
        margin-left: auto;
        margin-right: auto;
       }

       th{
        border-radius:5px;
        padding: 10px;
        background-color: #0652DD;
        color: white;
       }
       
       a{
        color: black;
        text-decoration: none;
        transition: all 0.2s linear;
       }
       a:hover{
        color: white;
        text-decoration: underline;
       }
     

    
    </style>
</head>
<body>
    <header>
<title>Student List</title>     
   <div class="navbar">
        <ul>
        <li><a href="StudentList.php">Student List</a> </li>
        <li><a href="AddQuestion.php">Add Question</a></li>
        <li> <a href="QuestionList.php">Question List</a></li>
        <li><a href="ExamResult.php">Result</a></li>
        <li><a href="Feedback.php">Feedback</a></li>
        <li><a href="ChangePassword.php">Account</a></li>
        <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </div><hr>
<div class="div">
<center><h1 style="color:green;"><u>Student List</u></h1></center>
<table width="95%" border="1" cellspacing="5" cellpadding="5">
<tr style="color:white !important;background-color:dodgerblue !important;"><th style="color:white !important;background-color:dodgerblue !important;">Email/User</th><th style="color:white !important;background-color:dodgerblue !important;">Student Name</th><th style="color:white !important;background-color:dodgerblue !important;">Qualification</th><th style="color:white !important;background-color:dodgerblue !important;">Date of Birdth</th><th style="color:white !important;background-color:dodgerblue !important;">Gender</th><th style="color:white !important;background-color:dodgerblue !important;">Address</th><th style="color:white !important;background-color:dodgerblue !important;">City</th><th style="color:white !important;background-color:dodgerblue !important;">State</th><th style="color:white !important;background-color:dodgerblue !important;">Pin Code</th><th style="color:white !important;background-color:dodgerblue !important;">Contact</th><th style="color:white !important;background-color:dodgerblue !important;">Image</th></tr>
<?php
require 'conn.php';
$sql = "select * from reg";
$q=mysqli_query($conn, $sql);
while($r=mysqli_fetch_assoc($q)){
    echo "<tr>";
    echo "<td>".$r['uname']."</td>";
    echo "<td>".$r['sname']."</td>";
    echo "<td>".$r['course']."</td>";
    echo "<td>".$r['dob']."</td>";
    echo "<td>".$r['gender']."</td>";
    echo "<td>".$r['address']."</td>";
    echo "<td>".$r['city']."</td>";
    echo "<td>".$r['state']."</td>";
    echo "<td>".$r['pin']."</td>";
    echo "<td>".$r['phone']."</td>";
    echo "<td><img style='object-fit: cover; object-position: center;' src='".$r['image']."' height=50 width=50></td>";
    echo "</tr>";
}
?>

</table>
</div>    
</header>
    
</body>
</html>