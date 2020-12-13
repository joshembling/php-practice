<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Getters & Setters</title>

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

  class Movie
  {
    public $title;
    private $rating;

    function __construct($title, $rating)
    {
      $this->title = $title;
      $this->setRating($rating);
    }

    function getRating()
    {
      return $this->rating;
    }

    function setRating($rating)
    {
      if ($rating == "U" || $rating == "PG" || $rating == "12A" || $rating == 12 || $rating == 15 || $rating == 18) {
        return $this->rating = $rating;
      } else {
        return $this->rating = "Error";
      }
    }
  }

  $avengers = new Movie("Avengers", "PG");


  print $avengers->getRating();


  ?>

</body>

</html>