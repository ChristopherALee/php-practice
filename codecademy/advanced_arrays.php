<html>
  <head>
    <title>Making the Connection</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices.
        // Add 'BMW' as the last element in the array!
        $car = array(2012, 'blue', 5, 'BMW');

        // This is an associative array.
        // Add the make => 'BMW' key/value pair!
        $assocCar = array('year' => 2012,
                   'colour' => 'blue',
                   'doors' => 5,
                   'make' => 'BMW');
            
        // This code should output "BMW"...
        echo $car[3];
        echo '<br />';
            
        // ...and so should this!
        echo $assocCar['make'];
      ?>
    </p>
  </body>
</html>



// iterating through array maps
<html>
  <head>
    <title>Iteration Nation</title>
  </head>
  <body>
    <p>
      <?php    
        $food = array('pizza', 'salad', 'burger');
        $salad = array('lettuce' => 'with',
                   'tomato' => 'without',
                   'onions' => 'with');
    
      // Looping through an array using "for".
      // First, let's get the length of the array!
      $length = count($food);
    
      // Remember, arrays in PHP are zero-based:
      for ($i = 0; $i < $length; $i++) {
        echo $food[$i] . '<br />';
      }
    
      echo '<br /><br />I want my salad:<br />';
    
      // Loop through an associative array using "foreach":
      foreach ($salad as $ingredient=>$include) {
        echo $include . ' ' . $ingredient . '<br />';
      }
    
      echo '<br /><br />';
    
      // Create your own array here and loop
      // through it using foreach!
      $pets = array(
        'Gamby' => 'Dog', 
        'Kora' => 'Dog', 
        'Tyga' => 'Cat', 
        'Silver' => 'Fish',
        'Nacho' => 'Dog'
      );

      foreach ($pet as $petName=>$petType) {
        echo $petName . ' is a ' . $petType . '!' . '<br />';
      }

      ?>
    </p>
  </body>
</html>



<html>
  <head>
    <title>I am the King of Arrays!</title>
  </head>
  <body>
    <p>
      <?php
      // On the line below, create your own associative array:
        $cars = array(
          "Chris" => "Nissan 370z",
          "Dad" => "Porsche 911",
          "Mom" => "Subaru Outback",
          "Sister" => "Subaru Crosstrek"
        );

      // On the line below, output one of the values to the page:
        echo $cars["Chris"] . "<br />";
          
      // On the line below, loop through the array and output
      // *all* of the values to the page:
        foreach ($cars as $owner => $car) {
          echo $owner . " owns a " . $car . "." . "<br />";
        }
     
      ?>
    </p>
  </body>
</html>