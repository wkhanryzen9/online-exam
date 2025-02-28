<?php

session_start();
if ($_SESSION == null) {
    echo "<script>
        alert('First Login to the page!');
        window.location.href='index.php';
    </script>";
}

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
                stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
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
        $s2 = "SELECT * FROM result WHERE sid='$stu'";
        $q2 = mysqli_query($conn, $s2);
        if ($r1 = mysqli_fetch_assoc($q2)) { ?>
<div style="height: 86vh" class="w-full bg-slate-200 flex justify-center items-center">
    <h1 class="px-6 py-4 text-2xl text-white font-semibold rounded bg-slate-900"><i id="warning-sign"
            class="ri-error-warning-fill"></i> You have already given exam! For re-exam contact Admin.</h1>
</div>
<?php   }else
       {
            $q3 = "SELECT * FROM que_paper";
            $s3 = mysqli_query($conn, $q3);
            $count = 1;
?>

<div class="mt-2 mb-3">
    <h1 class="bg-slate-700 text-white text-left pl-6 py-2 text-xl font-bold">
        Question Paper
    </h1>
</div>
<div style="width: 100%;" class="flex justify-center px-6">
    <form action="examstart_submit.php" method="post" class="w-full">

        <table class="w-full border-collapse border border-gray-500">

            <?php          
            while ($r3 = mysqli_fetch_assoc($s3)) {
                $qid = $r3['qid'];
                $q = $r3['question'];
                $o1 = $r3['option1'];
                $o2 = $r3['option2'];
                $o3 = $r3['option3'];
                $o4 = $r3['option4'];
                ?>
            <tr style="color:blue;" class="bg-slate-300">
                <th colspan="2" class="border border-gray-300 px-4 py-2 text-left">
                    <span class="text-red-700">Question
                        <?php echo $count; ?>:
                    </span>
                    <?php echo $q; ?>
                </th>
            </tr>
            <tr>
                <th class="border border-gray-300 px-4 py-2 text-left">a) <input type="radio"
                        name="ans<?php echo $count; ?>" value="<?php echo $o1; ?>">
                    <?php echo $o1; ?>
                </th>
                <th class="border border-gray-300 px-4 py-2 text-left">b) <input type="radio"
                        name="ans<?php echo $count; ?>" value="<?php echo $o2; ?>">
                    <?php echo $o2; ?>
                </th>
            </tr>
            <tr>
                <th class="border border-gray-300 px-4 py-2 text-left">c) <input type="radio"
                        name="ans<?php echo $count; ?>" value="<?php echo $o3; ?>">
                    <?php echo $o3; ?>
                </th>
                <th class="border border-gray-300 px-4 py-2 text-left">d) <input type="radio"
                        name="ans<?php echo $count; ?>" value="<?php echo $o4; ?>">
                    <?php echo $o4; ?>
                </th>
            </tr>
            <?php
				$count++;
            }
            ?>
            <!-- <tr class="bg-slate-300 mt-5">
                <th colspan="2">
                    <input type="submit" name="submit" value="SUBMIT" class="bg-blue-700 text-lg text-white rounded px-3 py-2">
                    <input type="reset" value="CLEAR" class="bg-slate-700 text-lg text-white rounded px-3 py-2">
                </th>
            </tr> -->
        </table>
        <div class="w-full flex gap-3 py-3 px-2 mt-5">
            <input type="submit" name="submit" value="SUBMIT"
                class="bg-blue-700 text-md font-semibold text-white rounded px-3 py-1">
            <input type="reset" value="CLEAR" class="bg-slate-700 text-md font-semibold text-white rounded px-3 py-1">
        </div>
    </form>
</div>
<?php
        }
        ?>




<?php include('Components/footer.php'); ?>