<html>
  <!-- Part 1 -->

  <p>
    <?php
    // Get the length of your own name
    // and print it to the screen!
      $length = strlen("chris");
      print $length;
    ?>
  </p>
</html>

// String functions
<html>
  <p>
    <?php
    // Get a partial string from within your own name
    // and print it to the screen!
      $name = "Chris";
      $partial = substr($name, 0, 3);
      print $partial;
    ?>
  </p>
  
  <p>
    <?php
    // Make your name upper case and print it to the screen:
      print strtoupper($name);  
    ?>
  </p>

  <p>
    <?php
    // Make your name lower case and print it to the screen:
      print strtolower($name);
    ?>
  </p>
</html>

<html>
    <p>
    <?php
    // Print out the position of a letter that is in
    // your own name
      $name = "Chris";
      print strpos($name, "C");
    ?>
    </p>

    <p>
    <?php
    // Check for a false value of a letter that is not
    // in your own name and print out an error message
      if (!strpos($name, "boobs")) {
        print "It doesn't exist!";
      }
    ?>
    </p>
</html>

// Math functions
<html>
    <p>
    <?php
    // Try rounding a floating point number to an integer
    // and print it to the screen
      print round(M_PI);
    ?>
    </p>

    <p>
    <?php
    // Try rounding a floating point number to 3 decimal places
    // and print it to the screen
      print round(M_PI, 3);
    ?>
    </p>
</html>

<html>
    <p>
    <?php
    // Use rand() to print a random number to the screen
      print rand();
    ?>
    </p>

    <p>
    <?php
    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.
      $name = "Chris";
      $tmp = substr($name, 1, 4);
      $tmpLength = strlen($tmp);
      $randIdx = rand(0, $tmpLength);

      print $tmp[$randIdx];
    ?>
    </p>
</html>

// Array functions
<html>
    <p>
	<?php
	// Create an array and push 5 elements on to it, then 
    // print the number of elements in your array to the screen
    $food = array();
    array_push($food, "Cha siew");
    array_push($food, "Siew Yook");
    array_push($food, "Gong Sik Cha Siew Lo Mein");
    array_push($food, "Korean BBQ Ribs");
    array_push($food, "Salad");

    print count($food);
    
    foreach ($food as $leFood) {
      print "<p>$leFood</p>";
    }
	?>
	</p>
</html>

<html>
    <p>
    <?php
    // Create an array with several elements in it,
    // then sort it and print the joined elements to the screen
      $array = array(2, 1, 3);
      sort($array);

      print join(", ", $array);
    ?>
    </p>

    <p>
      <?php
      // Reverse sort your array and print the joined elements to the screen
        rsort($array);
        print join(", ", $array);
      ?>
    </p>
</html>

<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    $array = array();
    array_push($array, "Chris");
    array_push($array, "Lily");
    array_push($array, "Gamby");
    array_push($array, "Kora");
    
	// Sort the list
	sort($array);

	// Randomly select a winner!
    $length = count($array);
    $random_num = rand(0, $length - 1);
    $winner = $array[$random_num];
    
	// Print the winner's name in ALL CAPS
	print strtoupper($winner);
	?>
	</p>
</html>

// Functions 2
<html>
    <head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
          // Here we define the function...
          function helloWorld() {
            echo "Hello world!";
          }
          
          // ...and here we call it!
          helloWorld();
        ?>
      </p>
    </body>
</html>

<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
        // Write your function below!
        function displayName() {
          echo 'Chris';
        }

        displayName();
        ?>
      </p>
    </body>
</html>

<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
          function greetings($name) {
            echo "Greetings, $name!";
          } 

          greetings("Chris");
        ?>
      </p>
    </body>
</html>