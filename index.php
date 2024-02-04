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

<h4 class="center gray-text">Pizzas</h4>
<div class="container">
  <div class="row">

    <?php foreach ($pizzas as $pizza) { ?>
      <div class="col s6 md3">
        <div class="card">
          <div class="card-content center">
            <h5 class="orange-text"><?php echo htmlspecialchars($pizza['title']); ?></h5>
            <p><i><?php echo htmlspecialchars($pizza['ingredients']); ?></i></p>
            <div class="card-action right-align">
              <a href="#" class="brand-text">More Info</a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

  </div>
</div>
<?php include('templates/header.php'); ?>
<?php include('templates/footer.php'); ?>

</html>