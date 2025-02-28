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

<?php include('Components/head.php'); ?>

<?php include('Components/stu_header.php'); ?>

    <?php
        require 'conn.php';
        $sql = "select * from reg where uname='$stu'";
        $q = mysqli_query($conn, $sql);
        if($r=mysqli_fetch_assoc($q)){

        }
        $img = $r['image'];
        ?>
        <div style="width: 100px; height: 100px; overflow: hidden;">
            <img style="width: 100%; object-fit: cover;" src="<?php echo $img; ?>" alt="">
        </div>
        <form method="post">
        <table border='1'>
            <tr>
                <td>Username</td>
                <th><?php echo $stu ?></th>
            </tr>
            <tr>
                <td>Name</td>
                <th><input type="text" name="sname" value="<?php echo $r['sname']; ?>"></th>
            </tr>
            <tr>
                <td>Phone</td>
                <th><input type="text" name="phone" value="<?php echo $r['phone']; ?>"></th>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <th><input type="text" name="dob" value="<?php echo $r['dob']; ?>"></th>
            </tr>
            <tr>
                <td>Course</td>
                <th><input type="text" name="course" value="<?php echo $r['course']; ?>"></th>
            </tr>
            <tr>
                <td>City</td>
                <th><input type="text" name="city" value="<?php echo $r['city']; ?>"></th>
            </tr>
            <tr>
                <td>State</th>
                <th><input type="text" name="state" value="<?php echo $r['state'] ?>"></th>
            </tr>
            <tr>
                <td>Image</td>
                <th><input type="file" name="file"></tr>
            </tr>
            <tr>
                <td>For Edit your Profile</td>
                <th><a href="edit_stu.php" style="color:white; text-decoration: none;">Click Here</a></th>
            </tr>
        </table>
        </form>

<?php include('Components/footer.php'); ?>