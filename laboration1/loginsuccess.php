<?php
session_start();
if(!session_is_registered(username)){
    header("location:index.php");
}
?>
<html>
 <head>
  <title>Login Success</title>
 </head>
 <body>
 <h1>Laborationskod sc222as</h1> 
 <h2>Admin �r inloggad</h2>
     <?php
     echo "Inloggning Lyckades";
    ?>
    <p></p>
 <a href="logout.php">Logout</a>
 <p></p>
 <?php
setlocale(LC_ALL, 'sve');
echo strftime("%A, den %d %B �r %Y. Klockan �r [%X]");
?>
  </body>
</html>