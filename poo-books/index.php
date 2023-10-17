<?php

require_once 'classes/Book.php';
require_once 'classes/Author.php';
require_once 'functions/array.php';

$authors = [
  new Author("Webster", "Lola", "1950-05-07"),
  new Author("Barton", "Amy", "1950-05-07"),
  new Author("Morgan", "Warren", "1950-05-07"),
  new Author("Soto", "Maggie", "1950-05-07"),
  new Author("Holloway", "Carolyn", "1950-05-07"),
];

$books = [
  new Book("easier", 1872, 782, "397379892981", randomElement($authors)),
  new Book("pond", 1923, 565, "279718074119", randomElement($authors)),
  new Book("box", 1974, 565, "434354958745", randomElement($authors)),
  new Book("dinner", 1971, 597, "315363253466", randomElement($authors)),
  new Book("route", 1891, 874, "353497830737", randomElement($authors)),
  new Book("gradually", 1826, 535, "223693141092", randomElement($authors))
];

var_dump($books);
