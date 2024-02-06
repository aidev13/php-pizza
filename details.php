<?php
include('./config/connect.php');
// check GET request id params
// https://www.w3schools.com/php/func_var_isset.asp

if(isset($_GET['id'])){

   $id = mysqli_real_escape_string($connection, $_GET['id']);

   // make sql
   $sql = "SELECT * FROM pizzas WHERE id = $id";

   // get the query result
   $result = mysqli_query($connection, $sql);

   // fetch the result in array format
   $pizza = mysqli_fetch_assoc($result);

   mysqli_free_result($result); // free the memory
   mysqli_close($connection); // close the connection

}

?>

<!DOCTYPE html>
<html>
   
   <?php include('templates/header.php'); ?>

<div class="container center">
   <?php if($pizza): ?>
      <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
      <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
      <p><?php echo date($pizza['created_at']); ?></p>
      <h5>Ingredients:</h5>
      <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>
      <?php  else: ?>
         <h2 id="oh-no">OH NO!</h2>
         <h5>Pizza is not available!</h5>
         <?php endif; ?>

</div>
<?php include('templates/footer.php'); ?>

</body>
</html>