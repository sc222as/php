<?php

namespace view;
class mainview
{
    public function frontpage(){
    
        return " <html>
    <head>
    <title> Inloggningsmodul </title>
    <meta http-equiv=\'content-type\' content=\'text/html; charset=utf8\'>
  </head>
  <body>
           <h1>Laborationskod sc222as</h1>     
           <table width='300' border='0'  cellpadding='0' cellspacing='1' >
                <tr>
                <form method='post' action=''>
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
                </table>
           
  </body>
</html>";

        }


    
}
