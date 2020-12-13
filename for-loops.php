<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Loops</title>
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

  <?php

  $luckyNumbers = array(4, 15, 13, 10, 99);

  for ($i = 0; $i < count($luckyNumbers); $i++) {
    echo "$luckyNumbers[$i] <br>";
  }

  ?>


</body>

</html>