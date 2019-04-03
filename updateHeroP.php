<?php
require("header.php");
require("heroClass.php");
require("checkvalid.php");
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"
style="overflow-x:auto;">

<?php
$hero = new hero();

$hero->connect();
$hero->readAll();

$hero->close();

require("footer.php");
?>
