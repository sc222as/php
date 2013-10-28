<?php
ob_start();
require_once("controller/run.php");




$startup = new \controller\run();
echo $startup->display();

echo $startup->dateTime();


$startup->login($_POST['username'],$_POST['password'],$_POST['rememberme']);

?>