
<?php


class checklogin  {

 public function form() {
     return "<table width='300' border='0'  cellpadding='0' cellspacing='1' >
<tr>
<form name='login' method='post' action=''>
<td>
<table width='100%' border='0' >
<tr>
<td width='78'>Anv�ndarnamn</td>
<td width='6'>:</td>
<td width='294'><input name='username' type='text' id='username'></td>
</tr>
<tr>
<td>L�senord</td>
<td>:</td>
<td><input name='password' type='text' id='password'></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type='submit' name='Submit' value='Logga in'></td>
</tr>
</table>
</td>
</form>
</tr>
</table>";

            

    
}    
    


      
}

$username=$_POST['username']; 
$password=$_POST['password'];
$username2 = $username;
if ($username == "") {
    echo "Anv�ndarnamn saknas";   
}
if ($password == "" && $username != "") {
    echo "L�senord saknas";   
}
if ($username == "Admin" && $password != "Password" && $password != "") {
    echo "Felaktigt anv�ndarnamn och/eller l�senord";   
}
if ($username != "Admin" && $password == "Password" && $username != "") {
    echo "Felaktigt anv�ndarnamn och/eller l�senord";   
}
if ($username == "Admin" && $password == "Password") {
    session_register("username");
    session_register("password"); 
    header("location:loginsuccess.php");
      
}

    ?>
