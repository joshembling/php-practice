<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get User Data</title>
  <style>
    body {
      font-family: Arial;
      line-height: 2.0em;
      padding-left: 100px;
    }

    input {
      display: block;
      margin-bottom: 5px;
    }
  </style>
</head>


<body>

  <form action="get-user-input.php" method="get">
    <label for="">Name:</label>
    <input type="text" name="name">
    <label for="">Age:</label>
    <input type="number" name="age">
    <input type="submit">
  </form>

  <br>

  Your name is <?php echo $_GET['name']; ?> <br>
  Your age is <?php echo $_GET['age']; ?>

</body>

</html>