<h4 class="center gray-text">Pizzas</h4>
<div class="container">
  <div class="row">

    <?php foreach ($pizzas as $pizza): ?>
      <div class="col s4 md6">
        <div class="card z-depth-0">
          <div class="card-content center ">
            <h5 class="orange-text"><?php echo htmlspecialchars($pizza['title']); ?></h5>
            <p><i>
                <ul>
                  <!-- https://www.w3schools.com/php/php_looping_foreach.asp -->
                  <?php foreach (explode(',', $pizza['ingredients']) as $ingredient): ?>
                    <li><?= htmlspecialchars($ingredient); ?></li>
                  <?php endforeach; ?>

                </ul>
              </i></p>
            <div class="card-action right-align">
              <a href="details.php?id=<?php echo $pizza['id']; ?>" class="brand-text">More Info</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</div>