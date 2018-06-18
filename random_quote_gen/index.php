<?php
  $quotes = [
    [
      'author' => 'Gamby',
      'text' => 'Woof Woof Woof Woof Woof Woof Woof Woof Woof Woof Woof '
    ],
    [
      'author' => 'Kora',
      'text'=> 'Ruff Ruff Ruff Ruff Ruff Ruff Ruff '
    ]
    ];

  $quote = $quotes[rand(0, count($quotes) - 1)];
  $quoteText = $quote['text'];
  $quoteAuthor = $quote['author'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Random Quote Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
  </head>

  <body>
    <blockquote>
      <div id="quote-container">
        <h2 id="quote">
          "<?php echo $quoteText; ?>"
        </h2>

        <h3 id="author">
          - <?php echo $quoteAuthor ?>
        </h3>
      </div>
    </blockquote>
  </body>
</html>