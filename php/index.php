<?php include('server.php') ?>
<!DOCTYPE html>
<html>
   <head>
      <!--<link rel="stylesheet" type="text/css" href="style.css">-->
      <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
   </head>
   <body class="bg-gray-200">
      <div class="h-screen flex items-center justify-center ">
         <div class="max-w-md py-1 w-full bg-white p-24 shadow-lg rounded-lg leading-normal">
            <div class="pt-2 text-4xl text-center font-light uppercase my-4">
               <h2>Register</h2>
            </div>
            <form method="post" action="index.php">
               <?php include('errors.php'); ?>
               <div class="mb-5">
                  <label class="text-sm mb-2 block text-gray-500">Username</label>
                  <input class="border p-4 rounded w-full focus:border-blue-500 focus:outline-none" placeholder="Your Username" type="text" name="username" value="<?php echo $username; ?>">
               </div>
               <div class="mb-5">
                  <label class="text-sm mb-2 block text-gray-500">Email</label>
                  <input class="border p-4 rounded w-full focus:border-blue-500 focus:outline-none" placeholder="Email" type="email" name="email" value="<?php echo $email; ?>">
               </div>
               <div class="mb-5">
                  <label class="text-sm mb-2 block text-gray-500">Password</label>
                  <input placeholder="******" class="border p-4 rounded w-full focus:border-blue-500 focus:outline-none" type="password" name="password1">
               </div>
               <div class="input-group">
                  <label class="text-sm mb-2 block text-gray-500">Confirm password</label>
                  <input placeholder="******" class="border p-4 rounded w-full focus:border-blue-500 focus:outline-none" type="password" name="password2">
               </div>
               <button class="my-4 bg-blue-400 py-2 px-8 text-white rounded hover:bg-blue-800" type="submit" class="btn" name="reg_user">Register</button>
               <p>
                  Already a member? <a class="pb-2 inline-block align-baseline font-bold text-sm text-gray-600 hover:text-blue-800" href="login.php">Sign in</a>
               </p>
            </form>
         </div>
      </div>
   </body>
</html>