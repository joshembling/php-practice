<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post v Get</title>
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

  <form action="post-v-get.php" method="POST">
    Password: <input type="password" name="password">
    <input type="submit">
  </form>

  <?php echo $_POST['password'] ?>


</body>

</html>