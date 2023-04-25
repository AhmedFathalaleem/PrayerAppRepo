<?php

include_once('config/app.php');
include_once('controllers/HadithOfTheDay.php');
include_once('codes/authentication_code.php');

include_once('includes/navbar.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Makkah TV Live</title>
  <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #000;
    }

    iframe {
      width: 100%;
      height: 100vh;
      border: none;
    }
  </style>
</head>
<body>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/3loPeQnJKk4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <script src="assets/js/jQuery.min.js"></script>
<script src="assets/js/bootstrap5.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>