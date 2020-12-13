<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
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
  function sayHi($name, $age)
  {
    echo "Hello $name, you are $age <br>";
  }

  sayHi('Andy', 40);
  sayHi('George', 99);
  sayHi('Josh', 27);
  sayHi('Jess', 26);
  ?>

</body>

</html>