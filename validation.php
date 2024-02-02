<?php


/* The errors var_ array is to create an array of key-value pairs known as an associated array. basically we are setting the values of each key to an empty string to aviod errors and if there is an error it will display in the php in he html. 

the key-value pairs looks like:
$errors['email'];
$errors['title'];
$errors['ingredients'];

these are all set to an empty string and are echoed in the html.

we have set each value in an empty string to avoid script errors showing in the input
*/
$email = '';
$title = '';
$ingredients = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');

if (isset($_POST['submit'])) {

   /* the first check is for and empty input useing the built-in php empty() function. the second check is to see if the input is a valid input.


   */

   // check email
   if (empty($_POST['email'])) {
      $errors['email'] = 'Error - Email Needed <br />';
   } else {
      $email = $_POST['email'];
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $errors['email'] = 'Error - provide a valide email address';
      }
   }

   // check title
   if (empty($_POST['title'])) {
      $errors['title'] = 'Error - Title Needed <br />';
   } else {
      $title = $_POST['title'];
      if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
         $errors['title'] = 'Error - Please enter a proper title';
      }
   }

   // check ingredients
   if (empty($_POST['ingredients'])) {
      $errors['ingredients'] = 'Error - Ingredients Needed <br />';
   } else {
      $ingredients = $_POST['ingredients'];
      if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
         $errors['ingredients'] = 'Error - Please seperate your ingredients with a comma';
      }
   }

   if(array_filter($errors)) {
    // do nothing LOL
   } else {
      header('Location: index.php');
   }
};
