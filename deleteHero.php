<?php
require("heroClass.php");
parse_str ($_SERVER['QUERY_STRING']);

$hero = new hero();
$hero->heroID=$heroID;
$hero->connect();
$hero->delete();

$hero->close();
header("location:updateHeroP.php");

?>
