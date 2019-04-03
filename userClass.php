<?php
class user{
private $server = "localhost";
private $username = "root";
private $Password = "Tordis13";
private $dbname = "dbHero";
private $conn;

public $personNam;
public $userPassword;
public $PathIm;



function __construct($_personNam = NULL, $_userPassword = NULL)
{
  $this->personNam = $_personNam;
  $this->userPassword = $_userPassword;
}

function connect()
{
  $this->conn = new mysqli($this->server, $this->username,
                         $this->Password, $this->dbname);

  if($this->conn->connect_error)
  {
    die("Connection is Dead".$conn->connect_error);
  }
}


function close()
{
  $this->conn->close();
}


function updatePath()
{
$sql = "CALL spUPath('".$this->personNam."', '".$this->PathIm."');";
$this->conn->query($sql);
}

function Login()
{
 $sql = "CALL spLogin('".$this->personNam. "', '".$this->userPassword."');";
 $result = $this->conn->query($sql);
 echo $result->num_rows . $this->personNam. $this->userPassword;

  if($result->num_rows > 0)
{
    // profile has photos
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['valid_user'] = $this->personNam;
    $_SESSION['PathIm'] = $row['PathIm'];
    header("Location:Home.php");
  }
}
}
?>
