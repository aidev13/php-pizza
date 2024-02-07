<?php
include('./config/connect.php');

// delete pizza from data
if(isset($_POST['delete_pizza'])) {
   $delete_id = mysqli_real_escape_string($connection, $_POST['id_to_delete']);
      
   $delete_sql = "DELETE FROM pizzas WHERE id = $delete_id";

   if(mysqli_query($connection, $delete_sql)){
      //success
      header('Location: index.php');
      } {
      echo 'Query Error: ' . mysqli_error($connection);
   }
}


// check GET request id params
// https://www.w3schools.com/php/func_var_isset.asp

if(isset($_GET['id'])){

   $id = mysqli_real_escape_string($connection, $_GET['id']);
   // https://www.w3schools.com/php/func_mysqli_real_escape_string.asp

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

         <form action="details.php" method="POST" class="z-depth-0">
            <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>" />
            <input type="submit" name="delete_pizza" value="Delete" class="btn brand" />
         </form>

</div>
<?php include('templates/footer.php'); ?>

</body>
</html>