<?php
require("header.php");
require("userClass.php");

if(isset($_POST['username'])&& isset($_POST['userPassword']))
{
  //the user tried to log in
  $user = new user();
  $user->connect();

    $user->personNam = $_POST['username'];
    $user->userPassword = $_POST['userPassword'];
    $remember = $_POST['remember'];
    if ($remember=='on')
    {
      setcookie('personNam', $user->personNam, time() + (86400*7), "/");
    }

  $user->Login();
  $user->close();

}

?>
<!doctype html>
<html>
<head>
  <title>Home Page </title>
  <style type="text/css">
  fieldset{
    width:50%;
    border: 2px solid;
    background-color: #f2f2f2;
  }
  legend{
    font-weight:bold;
    font-size:125%;
  }
  label{
    width:225px;
    float:left;
    color:
    text-align: center;
    font-weight:inherit;
    font-size: 30px;
  }
  input{
    width: 100%;
    padding:12px 20px;
    box-sizing:border-box;
    background-color:white;
  }
  form{

  }

  button{
    margin-top:12px;
  }

  .rememberMe{
    float: left;
    text-align: left;
    color:
    padding:20px 40px;
    font-size: 5px;
  }
  </style>
</head>
<body>

<?php
session_start();
 if (!isset($_SESSION['valid_user']))
  {
    echo '<p>Could not log you in.</p>';
  }
  //provide from to login
  echo '<form action="" method="post">';
  echo '<fieldset>';
  echo '<p><label for="username">Username:</label>';
  echo '<input type="text" name="username" id="username" size="30" value="'.$_COOKIE['personNam'].'"/></p>';
  echo '<p><label for="userPassword">Password:</label>';
  echo '<input type="password" name="userPassword" id="userPassword" size="30" value=""/></p>';
  echo '<div class="rememberMe">';
  echo '<input type="checkbox" id="remember" name="remember" />';
  echo '<label for="checkbox">Remember</label>';
  echo '</div>';
  echo '</fieldset>';
  echo '<button type="submit" name="login" >Login</button><br />';

  echo '</form>';

require("footer.php");
?>
</body>
</html>
