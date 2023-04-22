<?php
include_once('config/app.php');

$auth->isLoggedIn();

include_once('includes/navbar.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
    <link rel="stylesheet" href="assets/css/custome.css">
</head>
<body>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php include('message.php') ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                        <div class="mb-3">
                            <label for="">First Name</label>
                            <input type="text" name = "fname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Last Name</label>
                            <input type="text" name = "lname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name = "email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="text" name = "password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Confirm Password</label>
                            <input type="text" name = "confirm_password" class="form-control"required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="register_btn" class="btn btn-dark">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<script src="assets/js/jQuery.min.js"></script>
<script src="assets/js/bootstrap5.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>