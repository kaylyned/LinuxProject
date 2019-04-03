<?php
require("header.php");

$userName = $_POST["userName"];
$heroName = $_POST["heroName"];
$heroAge = $_POST["heroAge"];
$heroGender = $_POST["heroGender"];
$heroWorld = $_POST["heroWorld"];
$heroColor = $_POST["heroColor"];


require("heroClass.php");
$hero = new hero();
$hero->connect();

$hero->userName = $userName;
$hero->heroName = $heroName;
$hero->heroAge = $heroAge;
$hero->heroGender = $heroGender;
$hero->heroWorld = $heroWorld;
$hero->heroColor = $heroColor;
$hero->create();

header("location:updateHeroP.php");

require("footer.php");
 ?>
