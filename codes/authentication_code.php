<?php
//include('config/app.php');
include_once('controllers/RegisterContoller.php');
include_once('controllers/LoginController.php');


$auth = new LoginController;


if(isset($_POST['logout_btn'])){
    $checkedLoggedOut = $auth->logout();
    if($checkedLoggedOut){
        redirect("Logged out", "login.php");
    }
}


if(isset($_POST['login_btn'])){
    $email = validateInput($db->conn, $_POST['email']);
    $password = validateInput($db->conn, $_POST['password']);

    
    $checkLogin = $auth->userLogin($email, $password);
    if($checkLogin){
        if($_SESSION['auth_role'] == '1'){
            redirect("Logged in Successfully","adminTest.php");
        }
        else{
            redirect("Logged in Successfully","index.php");
        }
        
    }
    else{
        redirect("Invalid Email or Password", "login.php");
    }
}





//register page code
if(isset($_POST['register_btn'])){

    $fname = validateInput($db->conn, $_POST['fname']);
    $lname = validateInput($db->conn, $_POST['lname']);
    $email = validateInput($db->conn, $_POST['email']);
    $password = validateInput($db->conn, $_POST['password']);
    $confirm_password = validateInput($db->conn, $_POST['confirm_password']);
    
    $register = new RegisterController;
    $result_password = $register->confirmPassword($password, $confirm_password);
    if($result_password){

       $result_user = $register->isUserExisits($email);

       if($result_user){
        redirect("You are already registered.", "register.php");
       }
       else{

        $register_query = $register->registration($fname, $lname, $email, $password);
        if($register_query){
            redirect("Registered Successfully.", "login.php");
        }
        else{
            redirect("Something went wrong.", "register.php");
        }

       }

    }
    else{
        redirect("*The passwords don't match", "register.php");
    }

}


?>