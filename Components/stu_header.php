
<header class="text-gray-600 body-font bg-blue-900">
  <div class="container mx-auto flex flex-wrap p-5 flex-col gap-3 md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl"><?php echo $stu; ?></span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 text-white hover:text-blue-500 active:text-yello-500 active" href="Student.php">Home</a>
      <a class="mr-5 text-white hover:text-blue-500 active:text-yello-500" href="stu_profile.php">Profile</a>
      <a class="mr-5 text-white hover:text-blue-500 active:text-yello-500" href="examstart.php">Exam</a>
      <a class="mr-5 text-white hover:text-blue-500 active:text-yello-500" href="Result.php">Result</a>
      <a class="mr-5 text-white hover:text-blue-500 active:text-yello-500" href="stu_feedback.php">Feedback</a>
      <a class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" href="logout.php">Logout <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg></a>
    </nav>
    <img style="object-fit: cover; object-position: top;" title="Profile Pic" class="inline-block size-10 rounded-full ring-2 ring-white" src="<?php echo $img; ?>" alt="">
  </div>
</header>