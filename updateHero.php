<?php
require("header.php");
require("heroClass.php");
require("checkvalid.php");
parse_str($_SERVER['QUERY_STRING']);
$hero = new hero();
$hero->heroID=$heroID;

$hero->connect();
$hero->loadUpdate();
$hero->close();

?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<form action="updateHeroB.php" method="post">
<table>
  <tr>
    <td>
       WHAT IS YOUR USERNAME?
    </td>
    <td>
      <input type="text" name="userName" readonly value="<?php echo $hero->userName?>"/>
    </td>
  </tr>
  <tr>
    <td>
       WHAT IS YOUR HERO ID?
    </td>
    <td>
      <input type="text" name="heroID" readonly value="<?php echo $hero->heroID?>"/>
    </td>
  </tr>
  <tr>
    <td>
       WHAT IS YOUR HERO NAME?
    </td>
    <td>
      <input type="text" name="heroName" value="<?php echo $hero->heroName?>"/>
    </td>
  </tr>
  <tr>
    <td>
    XX, OR XY?
    </td>
    <td>
    <?php
      if ($hero->heroGender == 'xx')
      {
        ?>
        <input type="radio"name="heroGender" value="xx" checked>XX
        <input type="radio" name="heroGender" value="xy">XY
        <?php

      } else
      {
        ?>
        <input type="radio"name="heroGender" value="xx">XX
        <input type="radio" name="heroGender" value="xy" checked>XY
        <?php
      }

     ?>
  </tr>
  <tr>
    <td>
    WHAT COLOR IS YOUR HERO?
    </td>
    <td>
      <input type="text" name="heroColor" value="<?php echo $hero->heroColor ?>"/>
   </td>
  </tr>
  <tr>
    <td>
    WHERE DOES YOUR HERO LIVE?
    </td>
    <td>
      <input type="text" name="heroWorld" value="<?php echo $hero->heroWorld ?>" />
   </td>
  </tr>
  <tr>
    <td>
    WHAT IS YOUR HERO AGE?
    </td>
    <td>
      <input type="text" name="heroAge" value="<?php echo $hero->heroAge ?>" />
   </td>
  </tr>
    </table>
  <input type="submit" value="update Hero"/>
</form>

<?php
require("footer.php");
?>
