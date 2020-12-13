<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If Statements</title>
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
  $isMale = false;
  $isTall = false;

  if ($isMale && $isTall) {
    print "You are male and tall";
  } else if ($isMale && !$isTall) {
    print "You are male and not tall";
  } else if (!$isMale && $isTall) {
    print "You are female and tall";
  } else {
    print("You are female and not tall");
  }

  ?>

  <br><br>

  <?php

  function getMax($num1, $num2, $num3)
  {
    if ($num1 >= $num2 && $num1 >= $num3) {
      print $num1;
    } else if ($num2 >= $num1 && $num2 >= $num3) {
      print $num2;
    } else {
      print $num3;
    }
  }

  getMax(-4, -4, -1)

  ?>

</body>

</html>