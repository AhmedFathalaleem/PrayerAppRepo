<?php

include_once('controllers/AuthenticationController.php');

$data = $authenticated->authDetail();

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
    <link rel="stylesheet" href="assets/css/custome.css">
</head>
<body>


<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <?php include('message.php') ?>
                <h3>Profile Page</h3>
                <?php ?>
            </div>
        </div>
    </div>
</div>







<script src="assets/js/jQuery.min.js"></script>
<script src="assets/js/bootstrap5.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>