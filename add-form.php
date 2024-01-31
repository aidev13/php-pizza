<?php

   if(isset($_GET['submit'])){
      echo $_GET['email'];
      echo $_GET['title'];
      echo $_GET['ingredients'];
   };

?>

<!DOCTYPE html>

<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text">
   <h4 class="center">Add Pizza</h4>
   <form class="white" action="add-form.php" method="GET">
      <label>Your Email</label>
      <input type="text" name="email">
      <label>Pizza Title</label>
      <input type="text" name="title">
      <label>Ingredients (comma seperated)</label>
      <input type="text" name="ingredients">
      <div class="center">
         <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
      </div>
   </form>
</section>

<?php include('templates/footer.php'); ?>

</html>