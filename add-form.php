<?php
include('validation.php');
?>

<!DOCTYPE html>

<html lang="en">

<?php include('templates/header.php'); ?>

<!-- Comments and Notes:
htmlspecialchars(); this function turns any text into html text and keeps morons from inserting harmful code into the program.
https://www.w3schools.com/php/func_string_htmlspecialchars.asp

values have been added to the inputs via PHP to keep the users inputs in the form with being deleted after hitting submit.

the div with the class of red-text is in place via PHP if there is an error on the form it will display the error within the form and not elsewhere.

in the validation php file we have set each value to an empty string to avoid showing the input code in the input. code will be hown when a user first visits the page because we have not yet set the variabels - which are set when the user submits the form. this is why we need to set the values of the variables to an empty strign right away on page load to avoid the error and to set the values on page load.

-->

<section class="container orange-text">
   <h4 class="center">Fill out your pizza infomation!</h4>
   <form class="white" action="add-form.php" method="POST">
      <label>Your Email</label>
      <input type="text" name="email" value="<?= $email ?>">
      <div class="red-text"><?= htmlspecialchars($errors['email']); ?></div>
      <label>Pizza Title</label>
      <input type="text" name="title" value="<?= $title ?>">
      <div class="red-text"><?= htmlspecialchars($errors['title']); ?></div>
      <label>Ingredients (comma seperated)</label>
      <input type="text" name="ingredients" value="<?= $ingredients ?>">
      <div class="red-text"><?= htmlspecialchars($errors['ingredients']); ?></div>
      <div class="center">
         <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
      </div>
   </form>
</section>

<?php include('templates/footer.php'); ?>

</html>