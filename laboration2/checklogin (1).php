
<?php


class checklogin  {

 public function form() {
     return "<table width='300' border='0'  cellpadding='0' cellspacing='1' >
<tr>
<form name='login' method='post' action=''>
<td>
<table width='100%' border='0' >
<tr>
<td width='78'>Användarnamn</td>
<td width='6'>:</td>
<td width='294'><input name='username' type='text' id='username'></td>
</tr>
<tr>
<td>Lösenord</td>
<td>:</td>
<td><input name='password' type='text' id='password'></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>Remember Me: <input type='checkbox' name='rememberme' value='1'></td>
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
    echo "Användarnamn saknas";   
}
if ($password == "" && $username != "") {
    echo "Lösenord saknas";   
}
if ($username == "Admin" && $password != "Password" && $password != "") {
    echo "Felaktigt användarnamn och/eller lösenord";   
}
if ($username != "Admin" && $password == "Password" && $username != "") {
    echo "Felaktigt användarnamn och/eller lösenord";   
}
if ($username == "Admin" && $password == "Password") {
    if (isset($_POST['rememberme'])) {
        setcookie('username', $_POST['username'], time()+60);
        setcookie('password', md5($_POST['password']), time()+60);
        setcookie('timecheck', 'timecheck', time()+60);
    }
    session_register("username");
    session_register("password"); 
    header("location:loginsuccess.php");
      
}

    ?>
