<?php

namespace controller;


require_once("view/mainview.php");
require_once("model/date.php");
require_once("model/loginvalidator.php");



class run
{ 

    public function dateTime() {
    $date = new \model\date();
    $date->getdate();

    }
    public function display() {  

    $mainview = new \view\mainview();    
    return $mainview->frontpage();    

    }

    public function login($username, $password, $rememberme) {

    $loginvalidator = new \model\loginvalidator();
    $loginvalidation = $loginvalidator->validator($username, $password, $rememberme);  
    if ($loginvalidation == true) {
           session_start();
           
           $_SESSION["username"]=$username;           

        header("location:view/loginsuccess.php");

        echo 'Inloggning Lyckades';
        
    }
    }
    
    }


      