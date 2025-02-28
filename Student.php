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
    
<div style="height: 86.5vh;" class="w-full p-4 bg-slate-500">
    <div class="container w-1/3 h-52 bg-slate-300 flex justify-center items-center rounded-lg">
        <h1 class="text-2xl font-bold">Welcome <span class="text-purple-600"><?php echo $name; ?></span>!</h1>
    </div>
</div>

<?php include 'Components/footer.php'; ?>