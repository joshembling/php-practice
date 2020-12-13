<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Arrays</title>
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

  These are key value pairs <br>

  <form action="associative-arrays.php" method="POST">
    <input type="text" name="student">
    <input type="submit">

  </form>


  <?php
  $grades = array('Jim' => 'A+', 'Pam' => 'B', 'Oscar' => 'C');
  $grades['Jim'] = 'F';
  echo $grades[$_POST["student"]];


  ?>


</body>

</html>