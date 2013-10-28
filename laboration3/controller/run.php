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

    $foo = new \view\mainview();    
    return $foo->frontpage();    

    }

    public function login($username, $password, $rememberme) {

    $foo = new \model\loginvalidator();
    $foo2 = $foo->validator($username, $password, $rememberme);  
    if ($foo2 == true) {
           session_start();
           
           $_SESSION["username"]=$username;           

        header("location:view/loginsuccess.php");

        echo 'Inloggning Lyckades';
        
    }
    }
    
    }


      