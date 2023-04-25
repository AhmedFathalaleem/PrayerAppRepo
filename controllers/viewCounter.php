<?php


class viewCounter{



public function __construct(){




}


public function countViews(){
    isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;
}
















}
?>