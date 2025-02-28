<?php

session_start();
if ($_SESSION == null) {
    echo "<script>
        alert('First Login to the page!');
        window.location.href='index.php';
    </script>";
}

$img = $_SESSION['img'];
$name = $_SESSION['sname'];
$stu = $_SESSION['student'];

require 'conn.php';

// Fetch student name
$s1 = "SELECT * FROM reg WHERE uname='$stu'";
$q = mysqli_query($conn, $s1);
if ($r = mysqli_fetch_assoc($q)) {
    $sname = $r['sname'];
}

?>

<?php include('Components/head.php'); ?>

<header class="text-gray-600 body-font bg-blue-900">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-700 rounded-full"
                viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl"></span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"
                href="Student.php">Back<svg fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg></a>
        </nav>
    </div>
</header>
<?php
        require 'conn.php';

        $s2 = "SELECT * FROM result WHERE sid='$stu'";

        $q2 = mysqli_query($conn, $s2);
        ?>

<?php if($r1 = mysqli_fetch_assoc($q2)) { ?>
<?php 
        $s = "select * from result where sid='$stu'";
        $q=mysqli_query($conn, $s);
        if($r=mysqli_fetch_assoc($q)){
        $p=$r['om']/$r['mm']*100;
        if($p==100){
            $p=99;
        }
        } ?>
<div style="height: 86.5vh;" class="w-full bg-slate-500 flex justify-center items-center">
    <div style="border: 1px solid crimson;" class="w-1/3 px-2 py-4 rounded-xl bg-red-200">
        <h1 class="mb-4 text-center text-2xl font-bold">EXAM RESULT</h1>
        <p>Student Name: <?php echo $name; ?></p>
        <p>Username: <?php echo $stu; ?></p>
        <div class="w-full">
            <div class="w-full flex px-6 justify-between">
                <h1 class="text-md font-semibold">Student name</h1><h1 class="text-xl font-bold text-slate-700"><?php echo $name; ?></h1>
            </div>
            <div class="w-full flex px-6 justify-between">
                <h1 class="text-md font-semibold">Username</h1><h1 class="text-xl font-bold text-slate-700"><?php echo $stu; ?></h1>
            </div>
            <div class="w-full flex justify-between px-6">
                <h1 class="text-md font-semibold">Marks</h1><h1 class="text-xl font-bold text-slate-700"><?php echo $r['om']; ?>/<?php echo $r['mm']; ?></h1>
            </div>
            <div class="w-full flex px-6 justify-between">
                <h1 class="text-md font-semibold">Percentage</h1><h1 class="text-xl font-bold text-slate-700"><?php echo $p.'%'; ?></h1>
            </div>               
            <!-- <div class="flex justify-between mb-1 px-6">
                <span class="text-base font-medium text-slate-700">Percentage</span>
                <span class="text-xl font-bold text-slate-700"><?php echo $p.'%'; ?></span>
            </div> -->
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                <div class="bg-blue-600 h-2.5 rounded-full" style="width: <?php echo $p.'%'; ?>"></div>
            </div>
        </div>
        <p class="text-center text-slate-700">Keep practicing to improve your score!</p>
    </div>
</div>

<?php }else{
            // header('Location: StuResult.php');
            echo "<script>
            window.location.href='StuResult.php'
            </script>";
        }
        ?>


<?php include('Components/footer.php'); ?>