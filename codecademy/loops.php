<html>
  <head>
    <title>For Loops</title>
  </head>
  <body>
    <p>
      <?php
        // Echoes the first five even numbers
        for ($i = 2; $i < 11; $i = $i + 2) {
          echo $i;
        }
      ?>
    </p>
  </body>
</html>

<html>
  <head>
    <link rel="stylesheet" href="stylesheet.css" />
    <title>Codecademy Languages</title>
  </head>
  <body>
    <h1>Languages you can learn on Codecademy:</h1>
    <div class="wrapper">
      <ul>
        <?php
          $langs = array("JavaScript",
          "HTML/CSS", "PHP",
          "Python", "Ruby");
        
          // foreach loop
          foreach ($langs as $lang) {
              echo "<li>$lang</li>";
          }
        
          unset($lang);
        ?>
      </ul>
    </div>
  </body>
</html>