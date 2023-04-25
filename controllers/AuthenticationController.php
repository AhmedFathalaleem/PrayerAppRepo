<?php
include_once('config/app.php');

class AuthenticationController{
    private $conn;
    

    public function __construct(){
        $db = new DBConnection;
        $this->conn = $db->conn;
        

    }


    private function checkIsLoggedIn(){
        if(!isset($_SESSION['authenticated'])){
            redirect("Login to Access the Page","login.php");
        }
    }
    
    


    public function authDetail(){
        $checkAuth = $this->checkIsLoggedIn();
        if($checkAuth){

            $user_id =$_SESSION['auth_user']['user_id'];
            
            $getUserData = "select * from users where id = '$user_id' limit 1";
            $result = $this->conn->query($getUserData);
            if($result->num_rows > 0){
                $data = $result->fetch_assoc();
                return $data;
            }
            else{
                redirect('Something went wrong', "login.php");
            }
        }
        else{
            return false;
        }
    }


    public function admin(){
        $user_email = $_SESSION['auth_user']['user_email'];
        $checkAdmin = "select id,role from users where email = '$user_email' AND role = '1' LIMIT 1;";
        $result = $this->conn->query($checkAdmin);
        if($result->num_rows == 1){
            return true;
        }
        else{
            redirect("Sorry, that's an admin only page.", "index.php");
        }
    }










}



?>