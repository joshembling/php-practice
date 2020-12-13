<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mad Libs</title>
  <style>
    body {
      font-family: Arial;
      line-height: 2.0em;
      padding: 30px 0 0 100px;
    }

    input {
      display: block;
      margin-bottom: 5px;
    }
  </style>
</head>


<body>

  <form action="mad-libs.php" method="GET">

    Color: <input type="text" name="color">
    Plural noun: <input type="text" name="pluralNoun">
    Person: <input type="text" name="person">

    <input type="submit">

  </form>

  <?php

  $color = $_GET["color"];
  $pluralNoun = $_GET["pluralNoun"];
  $person = $_GET["person"];

  echo "Roses are $color <br>";
  echo "$pluralNoun are blue <br>";
  echo "I love $person <br>";

  ?>


</body>

</html>