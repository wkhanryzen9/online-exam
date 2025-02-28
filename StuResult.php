<?php

session_start();
if($_SESSION==null){
    echo "<script>
    alert('First Login to the page!')
    window.location.href='index.php'
    </script>";
}
$img = $_SESSION['img'];
$name = $_SESSION['sname'];
$stu = $_SESSION['student'];


?>

<?php include 'Components/head.php'; ?>

<?php include 'Components/stu_header.php'; ?>

    
<div style="height: 86vh" class="w-full bg-slate-200 flex justify-center items-center">
    <h1 class="px-6 py-4 text-2xl text-white font-semibold rounded bg-slate-900"><i id="warning-sign"
            class="ri-error-warning-fill"></i> To Show Result Please Give Exam.</h1>
</div>     


<?php include 'Components/footer.php'; ?>