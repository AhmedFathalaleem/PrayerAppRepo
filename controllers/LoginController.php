<?php

class LoginController{
    private $conn;


public function __construct(){
    $db = new DBConnection;
    $this->conn = $db->conn;
}


public function userLogin($email, $password){
    $checkLogin = "select * from users where email = '$email' AND password = '$password' LIMIT 1";
    $result = $this->conn->query($checkLogin);
    if($result->num_rows > 0){

        $data = $result->fetch_assoc();
        $this->userAuthentication($data);
        return true;
    }
    else{
        return false;
    }
}


private function userAuthentication($data){
    $_SESSION['authenticated'] = true;
    $_SESSION['auth_user'] = [
        'user_id' => $data['id'],
        'user_fname' => $data['fname'],
        'user_lname' => $data['lname'],
        'user_email' => $data['email']
    ];
}





public function isLoggedIn(){
    if(isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === TRUE){
        redirect('Already logged in.', 'index.php');
    }
    else{
        return false;
    }
}


public function logout(){
    if(isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === TRUE){

        unset($_SESSION['authenticated']);
        unset($_SESSION['auth_user']);
            return true;
            
    }
    else{
        return false;
    }

    
}






}
?>