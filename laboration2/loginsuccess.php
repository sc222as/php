<?php
session_start();
if(!isset($_COOKIE['timecheck'])){	
	setcookie ("password", "", time( ) - 1);
	}
if ($_COOKIE["password"] != 'dc647eb65e6711e155375218212b3964'){
	header("location:index.php");
	if(!isset($_COOKIE['username'])){
		if(!session_is_registered(username)){
			header("location:index.php");
		}
	}
}
?>
<html>
 <head>
  <title>Login Success</title>
 </head>
 <body>
 <h1>Laborationskod sc222as</h1> 
 <h2>Admin är inloggad</h2>
     <?php
     echo "Inloggning Lyckades";	 
    ?>
    <p></p>
 <a href="logout.php">Logout</a>
 <p></p>
 <?php
setlocale(LC_ALL, 'sve');
echo strftime("%A, den %d %B år %Y. Klockan är [%X]");
?>
  </body>
</html>