<?php 

include_once('config/app.php');
include_once('controllers/HadithOfTheDay.php');

include_once('includes/navbar.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Islamic Rosary Sebha</title>
  <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
  <link rel="stylesheet" href="Ayman.css">
 
</head>
<body>



  <header>
    <h1>Islamic Rosary Sebha</h1>
  </header>
  <main>
    <div class="container">
      <div class="sebha">
        <h2>SubhanAllah</h2>
        <p id="subhanAllahCount">0</p>
        <button onclick="addCount('subhanAllahCount')">+</button>
        <button onclick="resetCount('subhanAllahCount')">Reset</button>
      </div>
      <div class="sebha">
        <h2>Alhamdulillah</h2>
        <p id="alhamdulillahCount">0</p>
        <button onclick="addCount('alhamdulillahCount')">+</button>
        <button onclick="resetCount('alhamdulillahCount')">Reset</button>
      </div>
      <div class="sebha">
        <h2>Allahu Akbar</h2>
        <p id="allahuAkbarCount">0</p>
        <button onclick="addCount('allahuAkbarCount')">+</button>
        <button onclick="resetCount('allahuAkbarCount')">Reset</button>
      </div>
    </div>
  </main>
  <script src="assets/js/jQuery.min.js"></script>
<script src="assets/js/bootstrap5.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
  <script src="script.js"></script>
  <script src="assets/js/Aymanjs.js"></script>
</body>
</html>