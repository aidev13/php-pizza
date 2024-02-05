
<h4 class="center gray-text">Pizzas</h4>
<div class="container">
   <div class="row">

      <?php foreach ($pizzas as $pizza) { ?>
         <div class="col s6 md3">
            <div class="card z-depth-0">
               <div class="card-content center ">
                  <h5 class="orange-text"><?php echo htmlspecialchars($pizza['title']); ?></h5>
                  <p><i>
                     <ul>
                     <!-- https://www.w3schools.com/php/php_looping_foreach.asp -->
                     <?php foreach(explode(',', $pizza['ingredients']) as $ingredient) { ?> 
                     <li><?= $ingredient; ?></li>
                     <?php } ?>
                        
                     </ul>
                  </i></p>
                  <div class="card-action right-align">
                     <a href="#" class="brand-text">More Info</a>
                  </div>
               </div>
            </div>
         </div>
      <?php } ?>

   </div>
</div>