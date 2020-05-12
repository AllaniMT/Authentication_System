<?php 
   session_start(); 
   // forbid the access to the page while username don't exsti
   if (!isset($_SESSION['username'])) {
   	$_SESSION['msg'] = "You must log in first";
   	header('location: login.php');
   }
   //at loggout,  destroying the session and redirect our page to login page 
   if (isset($_GET['logout'])) {
   	session_destroy();
   	unset($_SESSION['username']);
   	header("location: login.php");
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
      <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
   </head>
   <body class="bg-gray-200">
      <div class="h-screen flex items-center justify-center ">
         <div class="max-w-xl  w-full bg-white p-24 shadow-lg rounded-lg leading-normal relative">
            <div class="text-4xl font-semibold  text-center font-light uppercase mb-8  ">
               <h2>Home Page</h2>
            </div>
            <!--showoing success message if the login successful -->
            <div class="content">
               <?php if (isset($_SESSION['success'])) : ?>
               <div class="error success" >
                  <h3>
                     <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                        ?>
                  </h3>
               </div>
               <?php endif ?>
               <div>
                  <img src="image/hand.png" alt="image">
               </div>
               <!--showing welcome + username if username exist  -->
               <?php  if (isset($_SESSION['username'])) : ?>
               <div class="text-center">
                  <p>Welcome <strong class="text-blue-700"><?php echo $_SESSION['username']; ?></strong></p>
               </div>
               <div class="">
                  <p class="text-red-400 text-bold text-xl absolute bottom-0 right-0 mr-6 mb-4 underline" > <a   href="home.php?logout='1'";">logout</a> </p>
               </div>
               <?php endif ?>
            </div>
         </div>
      </div>
   </body>
</html>