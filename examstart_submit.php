<?php

//session_start();
//if ($_SESSION == null) {
    //echo "<script>
        //alert('First Login to the page!');
        //window.location.href='index.php';
    //</script>";
//}

// $stu = $_SESSION['student'];
// $count = 1;
// $ans[1] = $_POST['ans1'];
// $qid[1] = "not submitted!";
// $ans[2] = $_POST['ans2'];
// $qid[2] = "not submitted!";
// $ans[3] = $_POST['ans3'];
// $qid[3] = "not submitted!";
// $ans[4] = $_POST['ans4'];
// $ans[4] = "not submitted!";
// $ans[5] = $_POST['ans5'];
// $ans[5] = "not submitted!";

session_start();
if($_SESSION==null){
   echo "<script>
alert('first login !')
    window.location.href='index.php'
    </script>";

}

$stu=$_SESSION['student'];
require 'conn.php';
$sql = "select * from que_paper";
$q = mysqli_query($conn, $sql);
while($rq=mysqli_fetch_assoc($q)){

}
$ans[1]="not submited";
$qid[1]= 1;
$ans[2]="not submited";
$qid[2]= 2;
$ans[3]="not submited";
$qid[3]= 3;
$ans[4]="not submited";
$qid[4]= 4;
$ans[5]="not submited";
$qid[5]= 5;



if(isset($_REQUEST['ans1'])){
$ans[1]=$_REQUEST['ans1'];
}
if(isset($_REQUEST['ans2'])){
    $ans[2]=$_REQUEST['ans2'];    
}
if(isset($_REQUEST['ans3'])){
    $ans[3]=$_REQUEST['ans3'];        
}
if(isset($_REQUEST['ans4'])){
    $ans[4]=$_REQUEST['ans4'];        
}
if(isset($_REQUEST['ans5'])){
    $ans[5]=$_REQUEST['ans5'];        
}

echo $ans[1];
echo $qid[1];
echo $ans[2];
echo $qid[2];
echo $ans[3];
echo $qid[3];
echo $ans[4];
echo $qid[4];
echo $ans[5];
echo $qid[5];

for($i=1; $i<=5; $i++){
    $s1="insert into result_master values('$stu','$qid[$i]','$ans[$i]')";

    mysqli_query($conn,$s1);

    $s2= "select result_master.qid from result_master, que_paper where result_master.qid = que_paper.qid and result_master.ans = que_paper.answer and result_master.sid='$stu'";

    $q2=mysqli_query($conn,$s2);

    $marks=null;

    $d=date('d-m-y');

    while($r=mysqli_fetch_array($q2)){

    $marks=$marks+5;

    }

}

$s3="insert into result(sid, mm, om) values('$stu','25',$marks)";
    mysqli_query($conn,$s3);    
    echo "<script>
    alert('Your exam submitted')
    window.location.href='Result.php'
    </script>";
