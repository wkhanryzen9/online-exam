<?php

session_start();
if($_SESSION==null){
    echo "<script>
    alert('First Login to the page!')
    window.location.href='Adminlogin.php'
    </script>";
}
$admin = $_SESSION['name'];
require 'conn.php';
$id = $_GET['id'];
$data = "select * from que_paper where qid='$id'";
$data_result = mysqli_query($conn, $data);
if($r=mysqli_fetch_assoc($data_result)){

}


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
     

    
    </style>
</head>
<body>
    <header>
        <div class="navbar">
        <ul>
        <li><a href="StudentList.php">Student List</a> </li>
        <li><a href="AddQuestion.php">Add Question</a></li>
        <li><a href="UpdateQuestion.php">Update Question</a></li>
        <li> <a href="QuestionList.php">Question List</a></li>
        <li><a href="ExamResult.php">Result</a></li>
        <li><a href="Feedback.php">Feedback</a></li>
        <li><a href="ChangePassword.php">Account</a></li>
        <li><a href="logout.php">Logout</a></li>
        </ul>
    </div><hr>
<div style="width:500px;height:400px; background-color:white; border:3px solid grey; margin-left:350px;">
<form method="post">
<table width="500" height="400" border="0">
<tr><th style="font-size:22px;"><u>Add Question</u></th></tr>
<tr><td><input type="text" name="question" class="input" placeholder="Question" value="<?php echo $r['question'] ?>" required></td></tr>
<tr><td><input type="text" name="option1" class="input" placeholder="Option1" value="<?php echo $r['option1'] ?>" required></td></tr>
<tr><td><input type="text" name="option2" class="input" placeholder="Option2" value="<?php echo $r['option2'] ?>" required></td></tr>
<tr><td><input type="text" name="option3" class="input" placeholder="Option3" value="<?php echo $r['option3'] ?>" required></td></tr>
<tr><td><input type="text" name="option4" class="input" placeholder="Option4" value="<?php echo $r['option4'] ?>" required></td></tr>
<tr><td><input type="text" name="answer" class="input" placeholder="Answer" value="<?php echo $r['answer'] ?>" required></td></tr>
<tr><th><input type=submit name=submit value=Submit><input type=reset value=Reset></th></tr>
</table>
</form>
</div>    
</header>

</body>
</html>

<?php

if(isset($_POST['submit'])){
    $que = $_POST['question'];
    $opt1 = $_POST['option1'];
    $opt2 = $_POST['option2'];
    $opt3 = $_POST['option3'];
    $opt4 = $_POST['option4'];
    $ans = $_POST['answer'];
    $sql = "update que_paper set question='$que', option1='$opt1', option2='$opt2', option3='$opt3', option4='$opt4', answer='$ans' where qid='$id'";
    // require 'conn.php';
    mysqli_query($conn, $sql);
    header('location: QuestionList.php');
}

?>

