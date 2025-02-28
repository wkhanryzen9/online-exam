
<?php include 'Components/head.php'; ?>

<?php include 'Components/header.php'; ?>

<div style="height: 90vh;" id="section1" class="w-full flex"> 

<div id="banner-container" class="w-1/2 pl-5 h-full flex flex-col gap-8 justify-center items-left bg-cover">
    <!-- <img class="w-full h-full object-cover object-center" src="img/banner.jpg" alt=""> -->
     <!-- <h1 class="w-3/4 font-extrabold opacity-80 text-6xl text-white leading-tight">Transforming Education Through Online Excellence.</h1> -->
     <h1 style="line-height: 1.2;" id="main-heading" class="w-9/12 font-black opacity-80 text-6xl text-gray-800 ">Your Path to Success Starts Here – Learn, Test, Excel!</h1>
     <a id="explore-btn" class="w-1/3 text-white bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-lg px-5 py-5 text-center me-2 mb-2 dark:focus:ring-yellow-900 shadow-md shadow-slate-500" href="Course.php">Explore Courses</a>
</div>

<div class="w-1/2 h-full flex justify-center pt-8">

    <form class="w-1/2 h-2/3 bg-white flex flex-col justify-center items-center mt-16 px-2 py-4 rounded-lg border border-gray shadow-gray-400 shadow-lg" action="login.php" method="post">

        <h1 class="text-4xl font-semibold mb-2 text-slate-600">LOGIN</h1>
        <div class="flex flex-col px-2 py-4 gap-3 container p-2">
            <input class="py-2 px-4 border border-black rounded-sm focus:outline-0" type="text" name="email" required placeholder="Enter Your Email">
            <input class="py-2 px-4 border border-black rounded-sm focus:outline-0" type="password" name="password" required placeholder="Enter Password">
            <div class="mt-4 flex flex-col gap-1 w-full">
                <input class="bg-blue-900 text-white font-semibold py-1.5 rounded" type="submit" name="submit" class="btn" value="Login">
                <p class="mt-2 text-sm">Don't have an account? <a class="font-semibold text-blue-900" href="Registration.php">Signup now!</a></p>
                <!-- <input class="bg-blue-600 text-white font-semibold py-1.5 rounded w-1/2" type="reset" class="btn" value="Signup"> -->
            </div>
        </div>

    </form>

    </div>

</div>

<?php include 'Components/footer.php'; ?>