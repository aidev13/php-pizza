<?php

$connection = mysqli_connect('localhost', 'root', '', 'php_pizza');
if (!$connection) {
   echo 'Connection Error: ' . mysqli_connect_error();
}

?>