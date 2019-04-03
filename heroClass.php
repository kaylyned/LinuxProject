<?php
class hero{
private $server = "localhost";
private $username = "root";
private $Password = "Tordis13";
private $dbname = "dbHero";
private $conn;

public $userName;
public $heroID;
public $heroName;
public $heroGender;
public $heroColor;
public $heroWorld;
public $heroAge;


function __construct($_userName = NULL, $_heroID = NULL, $_heroName = NULL,
                  $_heroGender = NULL,$_heroColor = NULL, $_heroWorld = NULL,
                  $_heroAge = NULL)

{
  $this->userName = $_userName;
  $this->heroID = $_heroID;
  $this->heroName = $_heroName;
  $this->heroGender = $_heroGender;
  $this->heroColor = $_heroColor;
  $this->heroWorld = $_heroWorld;
  $this->heroAge = $_heroAge;
}

function readAll()
{
  $sql="CALL spReadAllH();";
  $result=$this->conn->query($sql);
  echo '<form action= "" method="post">';
  if($result->num_rows > 0)
  {
    echo '<table><tr><th></th><th></th><th>USERNAME</th><th>ID</th> <th>NAME</th> <th>GENDER</th> <th>WORLD</th>  <th>COLOR</th> <th>AGE</th> </tr>';
    while($row=$result->fetch_assoc())
    {
      echo '<tr>'.
               '<td><input type="submit" value="delete" formaction="deleteHero.php?'.
               'heroID='. $row["heroID"].'"></td>'.
               '<td><input type="submit" value="update" formaction="updateHero.php?'.
               'heroID='. $row["heroID"].'"></td>'.
            '<td>'.
            $row["userName"].'</td><td>'.
            $row["heroID"].'</td><td>'.
            $row["heroName"].'</td><td>'.
            $row["heroGender"].'</td><td>'.
            $row["heroWorld"].'</td><td>'.
            $row["heroColor"].'</td><td>'.
            $row["heroAge"].'</td></tr>';
    }
  }
    echo '</table></form>';
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


  function create()
  {
    $sql="CALL spCreateHero('".$this->heroAge."', '".$this->heroName."', ' ".
    $this->heroWorld."', '".$this->heroColor."', '". $this->heroGender."' , '".$this->userName."');";
echo $sql;
    $this->conn->query($sql);

  }

  function delete()
  {
    $sql="CALL spDeleteHero(" . $this->heroID .");";
    echo $sql;
    $this->conn->query($sql);
  }

  function update()
  {
    $sql="CALL spUpdateHero('".$this->heroID. "', '".$this->heroName."', '".
    $this->heroAge."', '".$this->heroGender."', '".$this->heroColor."', '". $this->heroWorld."');";
    $this->conn->query($sql);
    echo $sql;

  }

  function loadUpdate()
  {
  $sql="CALL spReadHero(".$this->heroID.");";

  $result=$this->conn->query($sql);
  echo $sql;

  if($result->num_rows > 0)
  {
    $row = $result->fetch_assoc();
    $this->userName = $row["userName"];
    $this->heroID = $row["heroID"];
    $this->heroName = $row["heroName"];
    $this->heroGender = $row["heroGender"];
    $this->heroColor = $row["heroColor"];
    $this->heroWorld = $row["heroWorld"];
    $this->heroAge = $row["heroAge"];
  }
  else
  {
    echo "Error";
  }
}

}
  ?>
