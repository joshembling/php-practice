<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Return Statements</title>
  <style>
    body {
      font-family: Arial;
      line-height: 2.0em;
      padding: 30px 0 0 100px;
    }

    input {
      margin-bottom: 5px;
    }
  </style>
</head>

<body>

  <?php
  function cube($num)
  {
    return $num * $num * $num;
  }

  echo cube(8);

  ?>

</body>

</html>