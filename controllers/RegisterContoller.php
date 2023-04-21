<?php
//include('config/app.php');

class RegisterController{
    private $conn;

    public function __construct(){
        $db = new DBConnection;
        $this->conn = $db->conn;
    }

    public function registration($fname, $lname, $email, $password){
        
        $register_query="insert into users(fname, lname, email, password) values('$fname', '$lname', '$email', '$password')";
        $result = $this->conn->query($register_query);
        return $result;
    }



    public function isUserExisits($email){
        $checkUser = "select email from users where email ='$email'";
        $result = $this->conn->query($checkUser);
        if($result->num_rows > 0){
            return true;
        }
        else{
            return false;
        }
    }



    public function confirmPassword($password, $confirm_password){
        if ($password == $confirm_password) {
           return true;
        }
        else{
            return false;
        }
    }

}


?>