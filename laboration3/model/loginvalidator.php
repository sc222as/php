<?php
namespace model;

class loginvalidator
{
    public function validator($username, $password, $rememberme) {

    $username2 = $username;
    $password2= $password;
    $rememberme2 = $rememberme;
    if ($username == "") {
        echo "<h2> Anv�ndarnamn saknas <h2>";
        

    }
    if ($password == "" && $username != "") {
        echo "<h2> L�senord saknas <h2>";
        
      
    }
    if ($username == "Admin" && $password != "Password" && $password != "") {
        echo "<h2> Felaktigt anv�ndarnamn och/eller l�senord <h2>";
    }
    if ($username != "Admin" && $password == "Password" && $username != "") {
        echo "<h2> Felaktigt anv�ndarnamn och/eller l�senord <h2>";
    }
    if ($username == "Admin" && $password == "Password") {
        
        if (isset($rememberme)) {
            setcookie('username', $_POST['username'], time()+60);
            setcookie('password', md5($_POST['password']), time()+60);
            setcookie('timecheck', 'timecheck', time()+60);
            

           
        }
         return true;
      
    }
    }
}