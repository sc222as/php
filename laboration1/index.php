<!DOCTYPE HTML SYSTEM>
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <h1>Laborationskod sc222as</h1> 
 <h2>Ej Inloggad</h2>

<?php
require_once ("checklogin.php");
$check = new checklogin();
echo $check->form();

?>
<?php
setlocale(LC_ALL, 'sve');
echo strftime("%A, den %d %B �r %Y. Klockan �r [%X]");
?>
<p></p>
<a href="lab1.zip" target="_blank">K�llkod(Download)</a>


 
 </body>
</html>