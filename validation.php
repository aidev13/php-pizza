<?php


if (isset($_POST['submit'])) {

   // check email
   if (empty($_POST['email'])) {
      echo 'Error - Email Needed <br />';
   } else {
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         echo 'Error - provide a valide email address';
      }
   }

   // check title
   if (empty($_POST['title'])) {
      echo 'Error - Title Needed <br />';
   } else {
      $title = $_POST['title'];
      if(!preg_match('/^[a-zA-Z\s]+$/', $title)) {
         echo 'Error - Please enter a proper title';
      }
   }

   // check ingredients
   if (empty($_POST['ingredients'])) {
      echo 'Error - Ingredients Needed <br />';
   } else {
      $ingredients = $_POST['ingredients'];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
         echo 'Error - Please seperate your ingredients with a comma';
      }
   }
};
