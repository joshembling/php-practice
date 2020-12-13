<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Include PHP</title>

  <style>
    body {
      font-family: Arial;
      line-height: 2.0em;
      padding: 30px 100px 30px 100px;
    }

    input {
      display: block;
      margin-bottom: 5px;
    }
  </style>
</head>

<body>

  <?php

  $title = "My First Post";
  $author = "Josh Embling";
  $wordCount = 400;

  include "article-header.php";

  include "calculator-2.php"

  ?>

</body>

</html>