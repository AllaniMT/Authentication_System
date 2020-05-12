<?php include('server.php') ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Registration system PHP and MySQL</title>
      <!--<link rel="stylesheet" type="text/css" href="style.css">-->
      <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
   </head>
   <body class="bg-gray-200">
      <div class=" h-screen flex items-center justify-center ">
         <div class="max-w-md  w-full bg-white p-10 shadow-lg rounded-lg leading-normal">
            <div class ="text-4xl font-light uppercase text-center my-4">Login</div>
            <form method="post" action="login.php">
               <?php include('errors.php'); ?>
               <div class="mb-5">
                  <label  class="text-sm mb-2 block text-gray-500">Username</label>
                  <input placeholder="Your Username" class="border p-4 rounded w-full focus:border-blue-500 focus:outline-none" type="text" name="username" >
               </div>
               <div class="mb-5">
                  <label class="text-sm mb-2 block text-gray-500">Password</label>
                  <input class="border p-4 rounded w-full focus:border-blue-500 focus:outline-none" placeholder="******" type="password" name="password">
               </div>
               <button type="submit" class="bg-blue-400 py-4 px-8 text-white rounded hover:bg-blue-800" name="login_user">Login</button>
               <p>
                  Not yet a member? <a class="inline-block align-baseline font-bold text-sm text-gray-600 hover:text-blue-800" href="register.php">Sign up</a>
               </p>
            </form>
         </div>
      </div>
   </body>
</html>