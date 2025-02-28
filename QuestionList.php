<?php

session_start();
if($_SESSION==null){
    echo "<script>
    alert('First Login to the page!')
    window.location.href='Adminlogin.php'
    </script>";
}
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
        width:96%;
        height:84vh;
        border:2px solid grey;
        margin-left:auto;
        margin-right:auto;
        overflow:auto;
        box-shadow:0px 15px 20px grey;
        background-color:lightgrey;
       } 

       a{
        margin: 10px;
        font-size: 16pt;
        color: #0984e3;
        text-decoration: none;
       }

       a:hover{
            color: blue;
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
        <li><a href="ExamResult.php">Result</a></li>
        <li><a href="Feedback.php">Feedback</a></li>
        <li><a href="ChangePassword.php">Account</a></li>
        <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </div><hr>
<div class="div">
<center><h1 style="color:brown;"><u>Question List</u></h1></center>
<table width="98%" border="1" cellspacing="0" cellpadding="3" style="margin-left:auto;margin-right:auto;">
<tr style="color:white;background-color:red;"><th>S.NO</th><th>Ques ID</th><th>Question</th><th>Option1</th><th>Option2</th><th>Option3</th><th>Option4</th><th>Answer</th><th colspan="2">Operation</th></tr>
<?php

$sql = "select * from que_paper";
require 'conn.php';
$q=mysqli_query($conn, $sql);
$count = 1;
while($r=mysqli_fetch_assoc($q)){
    echo "<tr>";
    echo "<td>$count</td>";
    echo "<td>".$r['qid']."</td>";
    echo "<td>".$r['question']."</td>";
    echo "<td>".$r['option1']."</td>";
    echo "<td>".$r['option2']."</td>";
    echo "<td>".$r['option3']."</td>";
    echo "<td>".$r['option4']."</td>";
    echo "<td>".$r['answer']."</td>";
    echo "<td><a href='que_edit.php?id=".$r['qid']."'>Edit</a><a href='que_delete.php?id=".$r['qid']."'>Delete</a></td>";
    echo "</tr>";
    $count++;
}

?>


</table>
</div>    
</header>
    
</body>
</html>

