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
            <img style="width: 100%; object-fit: cover; object-position: top;" src="<?php echo $img; ?>" alt="">
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
        <div class="bg-white rounded-xl mx-2 overflow-hidden shadow rounded-lg border">
    <div class="px-4 py-5 sm:px-6">
        <div class="px-4 w-full flex justify-between items-center">
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    User Profile
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    This is some information about the user.
                </p>
            </div>
            <div style="width: 100px; height: 100px; border-radius: 50%;" class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 flex justify-center items-center">
                <img style="border-radius: 50%; width: 92%; height: 92%; object-fit: cover; object-position: top;" src="<?php echo $img; ?>" alt="">
            </div>
        </div>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
    <form action="edit_stu_config.php" method="post" enctype="multipart/form-data">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Username
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <?php echo $stu ?>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                <dt class="text-sm font-medium text-gray-500">
                    Full name
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" id="sname" name="sname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="<?php echo $r['sname']; ?>"/>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                <dt class="text-sm font-medium text-gray-500">
                    Date of Birth
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" id="dob" name="dob" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="<?php echo $r['dob']; ?>"/>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                <dt class="text-sm font-medium text-gray-500">
                    Course
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" id="course" name="course" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="<?php echo $r['course']; ?>"/>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                <dt class="text-sm font-medium text-gray-500">
                    Phone number
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" id="contact" name="contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="<?php echo $r['contact']; ?>"/>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                <dt class="text-sm font-medium text-gray-500">
                    Address
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="<?php echo $r['address']; ?>"/>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                <dt class="text-sm font-medium text-gray-500">
                    City
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" id="city" name="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="<?php echo $r['city']; ?>"/>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                <dt class="text-sm font-medium text-gray-500">
                    State
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" id="state" name="state" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="<?php echo $r['state']; ?>"/>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                <dt class="text-sm font-medium text-gray-500">
                    PINCODE
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" id="pin" name="pin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="<?php echo $r['pin']; ?>"/>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                <dt class="text-sm font-medium text-gray-500">
                    Update Image
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="file" id="image" name="file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                    <input type="hidden" id="old_image" name="old_image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?php echo $img; ?>"/>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <button name="update" value="update" class="text-slate-200 text-md font-semibold px-4 py-1 bg-slate-700 rounded-lg">Update</button>
                </dd>
            </div>
        </dl>
        </form>
    </div>
</div>

<?php include('Components/footer.php'); ?>