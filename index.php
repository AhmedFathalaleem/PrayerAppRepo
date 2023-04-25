<?php
include_once('config/app.php');
include_once('controllers/HadithOfTheDay.php');
include_once('controllers/VerseOfTheDay.php');
include_once('controllers/inspirationalContent.php');
$hadith = new HadithOfTheDay();
$verse = new VerseOfTheDay();
$content = new inspirationalContent();


include_once('includes/navbar.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayer App</title>
    <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
    <link rel="stylesheet" href="custome.css">
</head>
<body>


<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

            <?php include('message.php') ?>

                
                <h3>Home Page</h3>
                



            </div>
        </div>
    </div>
</div>



<section id="prayerTime">
<div class="prayerTimesDiv">
<iframe id="iframe" title="prayerWidget" class="widget-m-top" style=" height: 358px; border: 1px solid #ddd;" scrolling="no" src="https://www.islamicfinder.org/prayer-widget/360630/shafi/2/0/19.5/17.5"> </iframe>
</div>


</section>


<section id="dailyHadithSection">
    
    <div class="container">  
      <h3 style="color: white;">The prophet's Hadeeth</h3>      
            <div class="container hadith-container">
            <h6><?php if (isset($hadith)){
                            $hadith->printhadith();}
                            else{
                              echo('Database Error');
                            } ?></h6>
            </div>
    </div> 
</section>



<section id="dailyPopularVerses">

  <div class="container">  
      <h3 style="color: #212529;">Verse from the Quran</h3>      
            <div class="container verse-container">
            <h6 class="verseText"><?php if (isset($verse)){
                            $verse->printVerse();}
                            else{
                              echo('Database Error');
                            } ?></h6>
            </div>
  </div>


</section>

<section id="dailyHadithSection">
    
    <div class="container">  
      <h3 style="color: white;">inspiration quotes</h3>      
            <div class="container hadith-container">
            <h6><?php if (isset($content)){
                            $content->printContent();}
                            else{
                              echo('Database Error');
                            } ?></h6>
            </div>
    </div> 
</section>


<section class="visitorCounter">



</section>







<script src="assets/js/jQuery.min.js"></script>
<script src="assets/js/bootstrap5.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>