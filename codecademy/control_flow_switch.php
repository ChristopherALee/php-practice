<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
      $var = "Chris";

      if ($var == "Chris") {
        echo "True";
      } else if ($var == "Lily"){
        echo "False";
      } else {
        echo "False";
      }
      
    ?>
    </body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
    <?php
    $fruit = "Apple";
    
    switch ($fruit) {
        case 'Apple':
          echo "Yummy.";
          break;
        default:
          echo "default";
    }
    
    ?>
    </body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
    <?php
    $i = 5;
    
    // falling through switch case (meets the same criteria as the floor conditional)
    switch ($i) {
        case 0:
            echo '$i is 0.';
            break;
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo '$i is somewhere between 1 and 5.';
            break;
        case 6:
        case 7:
            echo '$i is either 6 or 7.';
            break;
        default:
            echo "I don't know how much \$i is.";
    }
    ?>
    </body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
    <?php
    $i = 5;
    
    // falling through switch case (meets the same criteria as the floor conditional)
    // alternative switch syntax
    switch ($i):
        case 0:
            echo '$i is 0.';
            break;
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo '$i is somewhere between 1 and 5.';
            break;
        case 6:
        case 7:
            echo '$i is either 6 or 7.';
            break;
        default:
            echo "I don't know how much \$i is.";
    endswitch;
    ?>
    </body>
</html>