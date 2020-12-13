<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Numbers</title>
  <style>
    body {
      font-family: Arial;
      line-height: 2.0em;

    }
  </style>
</head>


<body>

  <?php
  echo 45440 . ' ' . '- printing integer';
  ?>

  <br>

  <?php
  echo 45.440 . ' ' . '- printing decimal number';
  ?>

  <br>

  <?php
  echo 5 + 9 . ' ' . 'sum 5 + 9';
  ?>

  <br>

  <?php
  echo 100 % 6 . ' ' . 'modulus operator - what the remainder is (100 / 6)';
  ?>

  <br>

  <?php
  echo 100 % 6 . ' ' . 'modualus operator - what the remainder is (100 / 6)';
  ?>

  <br>

  <?php
  $num = 10;
  echo $num . ' ' . '- printing integer as variable';
  ?>

  <br>

  <?php
  $num = 10;
  $num++;
  echo $num . ' ' . '- printing integer as variable with increment operator ++ and (--)';
  ?>

  <br>

  <?php
  $num = 10;
  $num = $num + 25;
  echo $num . ' ' . '- printing integer as variable with sum';
  ?>

  <br>

  <?php
  $num = 10;
  $num += 25;
  echo $num . ' ' . '- printing integer as variable with += (same as above)';
  ?>

  <br>

  <?php
  echo abs(100) . ' ' . '- absolute value';
  ?>

  <br>

  <?php
  echo pow(2, 4) . ' ' . '- to the power of';
  ?>

  <br>

  <?php
  echo sqrt(144) . ' ' . '- square root';
  ?>

  <br>

  <?php
  echo max(3, 8) . ' ' . '- which is larger number?';
  ?>

  <br>

  <?php
  echo min(3, 8) . ' ' . '- which is smaller number?';
  ?>

  <br>

  <?php
  echo round(3.95) . ' ' . '- rounding';
  ?>

  <br>

  <?php
  echo ceil(3.95) . ' ' . '- rounding up (ceil)';
  ?>

  <br>

  <?php
  echo floor(3.95) . ' ' . '- rounding up (floor)';
  ?>

</body>

</html>