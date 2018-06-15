<?php
  $name = $_POST['name'];

  if (empty(trim($name))) {
    header('Location: http://localhost:3000/');
  } else {
    echo "Hi there, $name";
  }

