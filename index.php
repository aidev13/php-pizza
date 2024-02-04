<?php
// MySQLi or POD

$connection = mysqli_connect('localhost', 'root', '', 'php_pizza');

// checking the connection
if (!$connection) {
  echo 'Connection Error: ' . mysqli_connect_error();
}
// write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';
// make query and get results
$result = mysqli_query($connection, $sql);
// fetch the resulting roows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// these next steps are good practice but not nessceary

// free up memory from PC after getting the result
mysqli_free_result($result);
// closing the query connection
mysqli_close($connection);

// print_r($pizzas);
?>

<!DOCTYPE html>

<html lang="en">

<?php include('templates/header.php'); ?>
<?php include('templates/pizza-list.php'); ?>
<?php include('templates/footer.php'); ?>

</html>