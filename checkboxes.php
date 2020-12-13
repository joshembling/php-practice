<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkboxes</title>
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

  <form action="checkboxes.php" method="POST">
    Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
    Bananas: <input type="checkbox" name="fruits[]" value="bananas"> <br>
    <input type="submit">
  </form>

  <?php
  $fruits = $_POST["fruits"];
  echo $fruits[1];
  ?>


</body>

</html>