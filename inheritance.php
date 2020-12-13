<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inheritance</title>

  <style>
    body {
      font-family: Arial;
      line-height: 2.0em;
      padding: 30px 100px 30px 100px;
    }

    input {
      display: block;
      margin-bottom: 5px;
    }
  </style>
</head>

<body>

  <?php

  class Chef
  {
    function makeChicken()
    {
      echo "The chef makes chicken <br>";
    }
    function makeSalad()
    {
      echo "The chef makes salad <br>";
    }
    function makeSpecialDish()
    {
      echo "The chef makes bbq ribs <br>";
    }
  }

  class ItalianChef extends Chef
  {
    function makePasta()
    {
      echo "The chef makes pasta <br>";
    }
    function makeSpecialDish()
    {
      echo "The chef makes ribs <br>";
    }
  }

  $chef = new Chef();
  $chef->makeSpecialDish();

  $italianChef = new ItalianChef();
  $italianChef->makeSpecialDish();


  ?>

</body>

</html>