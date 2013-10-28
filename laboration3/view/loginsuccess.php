<?php

namespace view;
ob_start();
require_once("../model/cookie.php");    
 require_once("../model/date.php");
    $cookie = new \model\cookie();
    $cookie->cookieandsessioncheck();

    

?>

<html>
 <head>
  <title>Login Success</title>
 </head>
 <body>
 <h1>Laborationskod sc222as</h1> 
 <h2>Admin är inloggad</h2>
     <?php
		echo "Inloggning Lyckades\n";
    ?>

    <p></p>
    <?php
    $date = new \model\date();
    $date->getdate();
    ?>
    <p></p>
<a href="../model/logout.php">Logout</a>

  </body>
</html>

