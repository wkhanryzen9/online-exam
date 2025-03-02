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

    <h2 class="text-2xl ml-3 my-2 text-blue-700 font-bold">STUDENT PROFILE</h2>
    <?php
        require 'conn.php';
        $sql = "select * from reg where uname='$stu'";
        $q = mysqli_query($conn, $sql);
        if($r=mysqli_fetch_assoc($q)){

        }
        $img = $r['image'];
        ?>

<div class="bg-white rounded-xl mx-2 overflow-hidden shadow rounded-lg border">
    <div class="px-4 py-5 sm:px-6">
    <div class="px-2 w-full flex justify-between items-center">
            <div>
                <h3 class="text-xl leading-6 font-medium text-gray-900">
                <?php echo $r['sname'] ?>
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                <?php echo $r['dob'] ?>
                </p>
            </div>
            <div style="width: 100px; height: 100px; border-radius: 50%;" class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 flex justify-center items-center">
                <img style="border-radius: 50%; width: 92%; height: 92%; object-fit: cover; object-position: top;" src="<?php echo $img; ?>" alt="">
            </div>
        </div>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Username
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <?php echo $stu ?>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Course
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <?php echo $r['course'] ?>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Phone number
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <?php echo $r['contact'] ?>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Address
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <?php echo $r['address'] ?><br>
                <?php echo $r['city'] ?>, <?php echo $r['state'] ?> <?php echo $r['pin'] ?>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Edit Information
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <a class="text-slate-200 text-md font-semibold px-4 py-1 bg-slate-700 rounded-lg" href="edit_stu.php">Click Here</a>
                </dd>
            </div>
        </dl>
    </div>
</div>

<?php require 'Components/footer.php'; ?>