<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings</title>
  <style>
    body {
      font-family: Arial;
      line-height: 2.0em;

    }
  </style>
</head>

<body>
  <?php
  echo 'this is a string';
  ?>

  <br>

  <?php
  $phrase = 'Giraffe Academy - using a variable';
  echo $phrase;
  ?>

  <br>

  <?php
  $phrase = 'Giraffe Academy - to lower case';
  echo strtolower($phrase);
  ?>

  <br>

  <?php
  $phrase = 'Giraffe Academy - to upper case';
  echo strtoupper($phrase);
  ?>

  <br>

  <?php
  $phrase = 'Giraffe Academy - string length';
  echo strlen($phrase);
  ?>

  <br>

  <?php
  $phrase = 'Giraffe Academy - string character index';
  echo $phrase[0];
  ?>

  <br>

  <?php
  $phrase = 'Giraffe Academy - string character index';
  $phrase[0] = 'Hello';
  echo $phrase[0];
  ?>

  <br>

  <?php
  $phrase = 'Giraffe Academy - changing part of string with str_replace';

  echo str_replace('Giraffe', 'Panda', $phrase);
  ?>

  <br>

  <?php
  $phrase = 'Giraffe Academy - substring - grabbing part of string and then declaring how many chars';

  echo substr($phrase, 8, 100);
  ?>

</body>

</html>