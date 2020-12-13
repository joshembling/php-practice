<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch Statements</title>
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

  <form action="switch-statements.php" method="POST">
    What was your grade?
    <input type="text" name="grade">

    <input type="submit">

  </form>

  <?php

  $grade = $_POST['grade'];

  switch ($grade) {
    case "A":
      echo "$grade - You did very well!";
      break;
    case "B":
      echo "$grade - You did well!";
      break;
    case "C":
      echo "$grade - Good effort.";
      break;
    case "D":
      echo "$grade - Try harder.";
      break;
    case "F":
      echo "$grade - See me after class.";
      break;
    default:
      echo "Invalid entry";
  }
  ?>


</body>

</html>