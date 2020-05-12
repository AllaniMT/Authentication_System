<?php  // here we loop through the errors and show it in the Corresponding page
   if (count($errors) > 0) : 
   ?>
<div class="error">
   <?php foreach ($errors as $error) : ?>
   <p><?php echo $error ?></p>
   <?php endforeach ?>
</div>
<?php  endif ?>