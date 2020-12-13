<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator 2</title>
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

  <form action="calculator-2.php" method="POST">

    First Num: <input type="number" step="0.1" name="num1">
    OP: <input type="text" name="op">
    Second Num: <input type="number" step="0.01" name="num2">

    <input type="submit">

  </form>

  <?php

  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $op = $_POST['op'];

  if ($op == '+') {
    echo $num1 + $num2;
  } else if ($op == '-') {
    echo $num1 - $num2;
  } else if ($op == 'x') {
    echo $num1 * $num2;
  } else if ($op == '/') {
    echo $num1 / $num2;
  } else {
    print "Fill in numbers";
  }

  ?>


</body>

</html>