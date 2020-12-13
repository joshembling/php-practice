<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
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

  <form action="calculator.php" method="GET">

    <input type="number" name="num1">
    <input type="number" name="num2">

    <input type="submit">

  </form>


  Answer: <?php
          echo $_GET['num1'] + $_GET['num2'];
          ?>


</body>

</html>