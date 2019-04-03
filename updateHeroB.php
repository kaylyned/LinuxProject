<?php

$userName = $_POST ['userName'];
$heroID = $_POST['heroID'];
$heroName = $_POST['heroName'];
$heroGender = $_POST['heroGender'];
$heroWorld = $_POST['heroWorld'];
$heroColor = $_POST['heroColor'];
$heroAge = $_POST['heroAge'];

require("heroClass.php");
$hero = new hero();

$hero->connect();
$hero->userName = $userName;
$hero->heroID = $heroID;
$hero->heroName = $heroName;
$hero->heroGender = $heroGender;
$hero->heroWorld = $heroWorld;
$hero->heroColor = $heroColor;
$hero->heroAge = $heroAge;
$hero->update();
$hero->close();

echo $heroName;

header("location:updateHeroP.php");

?>
