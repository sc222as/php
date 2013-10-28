<?php

namespace model;
class cookie
{
    public function cookieandsessioncheck(){
        session_start();
        if ($_COOKIE["password"] != 'dc647eb65e6711e155375218212b3964'){
	        header("location:../index.php");
            }
	        if(!isset($_COOKIE['username'])){
            header("location:../index.php");
		        }
                if($_SESSION["username"]!= "Admin"){
			        header("location:../index.php");
		        
	        }
        }
      
    }  
    

    ?>