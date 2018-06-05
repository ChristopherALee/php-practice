<!DOCTYPE html>
<html>
    <head>
		<title>Your First PHP while loop!</title>
	</head>
	<body>
    <?php
	$loopCond = true;
	while ($loopCond) {
		//Echo your message that the loop is running below
		echo "<p>The loop is running.</p>";
		$loopCond = false;
	}
	echo "<p>And now it's done.</p>";
    ?>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
		<title>Your First PHP while loop!</title>
	</head>
	<body>
    <?php
  $loopCond = true;
  
  // syntactic sugar for while loops
	while ($loopCond);
		//Echo your message that the loop is running below
		echo "<p>The loop is running.</p>";
		$loopCond = false;
  endwhile;
  
	echo "<p>And now it's done.</p>";
    ?>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='style.css'/>
		<title>More Coin Flips</title>
	</head>
	<body>
	<p>We will keep flipping a coin as long as the result is heads!</p>
	<?php
  $flipCount = 0;
  
	do {
		$flip = rand(0,1);
		$flipCount ++;
		if ($flip){
			echo "<div class=\"coin\">H</div>";
		}
		else {
			echo "<div class=\"coin\">T</div>";
		}
  } while ($flip);
  
	$verb = "were";
	$last = "flips";
	if ($flipCount == 1) {
		$verb = "was";
		$last = "flip";
	}
	echo "<p>There {$verb} {$flipCount} {$last}!</p>";
	?>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
		<title>Much a do-while</title>
	</head>
	<body>
    <?php
		$loopCond = false;
		do {
			echo "<p>The loop ran even though the loop condition is false.</p>";
		} while ($loopCond);
		
		
		echo "<p>Now the loop is done running.</p>";
    ?>
    </body>
</html>