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
    
    <div class="w-1/2 bg-slate-400">
        <h2>STUDENT PROFILE</h2>
        <?php
        require 'conn.php';
        $sql = "select * from reg where uname='$stu'";
        $q = mysqli_query($conn, $sql);
        if($r=mysqli_fetch_assoc($q)){

        }
        $img = $r['image'];
        ?>
        

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <h1 class="text-3xl text-slate-700 font-bold">Profile Details</h1>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <!-- <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
            </tr>
        </thead> -->
        <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                    White
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
            </tr>
        </tbody>
    </table>
</div>

        <table border='1'>
            <tr>
                <td>Username</td>
                <th><?php echo $stu ?></th>
            </tr>
            <tr>
                <td>Name</td>
                <th><?php echo $r['sname'] ?></th>
            </tr>
            <tr>
                <td>Phone</td>
                <th><?php echo $r['phone'] ?></th>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <th><?php echo $r['dob'] ?></th>
            </tr>
            <tr>
                <td>Course</td>
                <th><?php echo $r['course'] ?></th>
            </tr>
            <tr>
                <td>City</td>
                <th><?php echo $r['city'] ?></th>
            </tr>
            <tr>
                <td>State</th>
                <th><?php echo $r['state'] ?></th>
            </tr>
            <tr>
                <td>Image</td>
                <th><?php echo "<img src='$img' height='100'>" ?></th>
            </tr>
            <tr>
                <td>For Edit your Profile</td>
                <th><a href="edit_stu.php" style="color:white; text-decoration: none;">Click Here</a></th>
            </tr>
        </table>
    </div>

<?php require 'Components/footer.php'; ?>