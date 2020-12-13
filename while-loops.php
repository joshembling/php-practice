<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While Loops</title>
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

  $index = 1;

  while ($index <= 5) {
    print "$index <br>";
    $index++;
  }
  ?>

  <br>

  <?php

  $index = 6;

  do {
    print "$index <br>";
    $index++;
  } while ($index <= 5);
  ?>


</body>

</html>