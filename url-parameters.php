<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>URL parameters</title>
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

  <form action="url-parameters.php" method="GET">

    Name: <input type="text" name="name">

    <input type="submit">

  </form>

  <?php

  echo $_GET['name']

  ?>


</body>

</html>