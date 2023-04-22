<?php
include_once('config/app.php');
include('controllers/HadithOfTheDay.php');
$hadith = new HadithOfTheDay();


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
        
            <div class="hadithContainerTitle">
                <h3 style="color: white;">أحاديث الرسول ﷺ</h3>
            </div>
            <div class="container hadith-container">
            <h6><?php $hadith->printHadith();?></h6>
            </div>

    </div>
    

    
</section>










<script src="assets/js/jQuery.min.js"></script>
<script src="assets/js/bootstrap5.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>