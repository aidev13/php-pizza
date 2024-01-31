<?php


if (isset($_POST['submit'])) {

   // check email
   if (empty($_POST['email'])) {
      echo 'Error - Email Needed <br />';
   } else {
      echo htmlspecialchars($_POST['email']);
   }
   // check title
   if (empty($_POST['title'])) {
      echo 'Error - Title Needed <br />';
   } else {
      echo htmlspecialchars($_POST['title']);
   }
   // check ingredients
   if (empty($_POST['ingredients'])) {
      echo 'Error - Ingredients Needed <br />';
   } else {
      echo htmlspecialchars($_POST['ingredients']);
   }
};
