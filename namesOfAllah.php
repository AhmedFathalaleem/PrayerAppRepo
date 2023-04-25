<?php

include_once('config/app.php');
include_once('controllers/HadithOfTheDay.php');
include_once('codes/authentication_code.php');

include_once('includes/navbar.php');

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Names of Allah</title>
  <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }

    table {
      border-collapse: collapse;
      margin: 50px auto;
      width: 80%;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
      vertical-align: middle;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    th {
      background-color: #333;
      color: #fff;
    }
  </style>
</head>
<body>
	<center><h1>Names of Allah</h1></center>
	<table>
		<tr>
			<th>Name</th>
			<th>Translation</th>
		</tr>
		<tr>
			<td>Ar-Rahman</td>
			<td>The All-Compassionate</td>
		</tr>
		<tr>
			<td>Ar-Rahim</td>
			<td>The All-Merciful</td>
		</tr>
		<tr>
			<td>Al-Malik</td>
			<td>The Absolute Ruler</td>
		</tr>
		<tr>
			<td>Al-Quddus</td>
			<td>The Pure One</td>
		</tr>
		<tr>
			<td>As-Salam</td>
			<td>The Source of Peace</td>
		</tr>
		<tr>
			<td>Al-Mu'min</td>
			<td>The Inspirer of Faith</td>
		</tr>
		<tr>
			<td>Al-Muhaymin</td>
			<td>The Guardian</td>
		</tr>
		<tr>
			<td>Al-Aziz</td>
			<td>The Victorious</td>
		</tr>
		<tr>
			<td>Al-Jabbar</td>
			<td>The Compeller</td>
		</tr>
		<tr>
			<td>Al-Mutakabbir</td>
			<td>The Greatest</td>
		</tr>
		<tr>
			<td>Al-Khaliq</td>
			<td>The Creator</td>
		</tr>
		<tr>
			<td>Al-Bari'</td>
			<td>The Maker of Order</td>
		</tr>
		<tr>
			<td>Al-Musawwir</td>
			<td>The Shaper of Beauty</td>
		</tr>
		<tr>
			<td>Al-Ghaffar</td>
			<td>The Forgiving</td>
		</tr>
		<tr>
			<td>Al-Qahhar</td>
			<td>The Subduer</td>
		</tr>
		<tr>
			<td>Al-Wahhab</td>
			<td>The Giver of All</td>
		</tr>
		<tr>
			<td>Ar-Razzaq</td>
			<td>The Sustainer</td>
		</tr>
		<tr>
			<td>Al-Fattah</td>
			<td>The Opener</td>
		</tr>
		<tr>
			<td>Al-'Alim</td>
			<td>The Knower of All</td>
		</tr>
		<tr>
			<td>Al-Qabid</td>
			<td>The Constrictor</td>
		</tr>
		<tr>
			<td>Al-Basit</td>
			<td>The Reliever</td>
		</tr>
		<tr>
			<td>Al-Khafid</td>
			<td>The Abaser</td>
		</tr>
		<tr>
			<td>Ar-Rafi'</td>
			<td>The Exalter</td>
		</tr>
		<tr>
			<td>Al-Mu'izz</td>
			<td>The Bestower of Honors</td>
		</tr>
		<tr>
			<td>Al-Mudhill</td>
			<td>The Humiliator</td>
		</tr>
		<tr>
			<td>As-Sami'</td>
			<td>The Hearer of All</td>
		</tr>
		<tr>
			<td>Al-Basir</td>
			<td>The Seer of All</td>
		</tr>
		<tr>
			<td>Al-Hakam</td>
			<td>The Judge</td>
		</tr>
		<tr>
			<td>Al-'Adl</td>
			<td>The Just</td>
		</tr>
<tr>
			<td>Al-Latif</td>
			<td>The Subtle One</td>
		</tr>
		<tr>
			<td>Al-Khabir</td>
			<td>The All-Aware</td>
		</tr>
		<tr>
			<td>Al-Halim</td>
			<td>The Forbearing</td>
		</tr>
		<tr>
			<td>Al-'Azim</td>
			<td>The Magnificent</td>
		</tr>
		<tr>
			<td>Al-Ghafur</td>
			<td>The Forgiver and Hider of Faults</td>
		</tr>
		<tr>
			<td>Ash-Shakur</td>
			<td>The Rewarder of Thankfulness</td>
		</tr>
		<tr>
			<td>Al-'Ali</td>
			<td>The Highest</td>
		</tr>
		<tr>
			<td>Al-Kabir</td>
			<td>The Greatest</td>
		</tr>
		<tr>
			<td>Al-Hafiz</td>
			<td>The Preserver</td>
		</tr>
		<tr>
			<td>Al-Muqit</td>
			<td>The Nourisher</td>
		</tr>
		<tr>
			<td>Al-Hasib</td>
			<td>The Accounter</td>
		</tr>
		<tr>
			<td>Al-Jalil</td>
			<td>The Mighty</td>
		</tr>
		<tr>
			<td>Al-Karim</td>
			<td>The Generous</td>
		</tr>
		<tr>
			<td>Ar-Raqib</td>
			<td>The Watchful One</td>
		</tr>
		<tr>
			<td>Al-Mujib</td>
			<td>The Responder to Prayer</td>
		</tr>
		<tr>
			<td>Al-Wasi'</td>
			<td>The All-Comprehending</td>
		</tr>
		<tr>
			<td>Al-Hakim</td>
			<td>The Perfectly Wise</td>
		</tr>
		<tr>
			<td>Al-Wadud</td>
			<td>The Loving One</td>
		</tr>
		<tr>
			<td>Al-Majid</td>
			<td>The Majestic One</td>
		</tr>
		<tr>
			<td>Al-Ba'ith</td>
			<td>The Resurrector</td>
		</tr>
		<tr>
			<td>Ash-Shahid</td>
			<td>The Witness</td>
		</tr>
		<tr>
			<td>Al-Haqq</td>
			<td>The Truth</td>
		</tr>
		<tr>
			<td>Al-Wakil</td>
			<td>The Trustee</td>
		</tr>
		<tr>
			<td>Al-Qawiyy</td>
			<td>The Possessor of All Strength</td>
		</tr>
		<tr>
			<td>Al-Matin</td>
			<td>The Forceful One</td>
		</tr>
		<tr>
			<td>Al-Waliyy</td>
			<td>The Governor</td>
		</tr>
		<tr>
			<td>Al-Hamid</td>
			<td>The Praised One</td>
		</tr>
		<tr>
			<td>Al-Muhsi</td>
			<td>The Appraiser</td>
		</tr>
		<tr>
			<td>Al-Mubdi'</td>
			<td>The Originator</td>
		</tr>
		<tr>
			<td>Al-Mu'id</td>
			<td>The Restorer</td>
		</tr>
		<tr>
			<td>Al-Muhyi</td>
			<td>The Giver of Life</td>
		</tr>
		<tr>
			<td>Al-Mumit</td>
			<td>The Taker of Life</td>
		</tr>
		<tr>
			<td>Al-Hayy</td>
			<td>The Ever-Living One</td>
		</tr>
		<tr>
			<td>Al-Qayyum</td>
			<td>The Self-Existing One</td>
		</tr>

		<script src="assets/js/jQuery.min.js"></script>
<script src="assets/js/bootstrap5.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
	</body>
    </html>