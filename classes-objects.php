<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classes, Objects & Constructors</title>

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

  class Book
  {
    // var $title;
    // var $author;
    // var $pages;

    function __construct($aTitle, $aAuthor, $aPages)
    {
      $this->title = $aTitle;
      $this->author = $aAuthor;
      $this->pages = $aPages;
    }
  }

  $book1 = new Book("Harry Potter", "JK Rowling", 450);
  $book2 = new Book("Lord of the Rings", "JRR Tolkien", 700);

  echo $book1->title;

  ?>

</body>

</html>