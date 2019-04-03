<?php
require("header.php");
require("checkvalid.php");
?>
<form action="CH.php" method="post">
<table>
  <tr>
    <td>
       WHAT IS YOUR USERNAME?
    </td>
    <td>
      <input type="text" name="userName" required/>
    </td>
  </tr>
  <tr>
    <td>
       WHAT IS YOUR HERO NAME?
    </td>
    <td>
      <input type="text" name="heroName" required/>
    </td>
  </tr>
      <tr>
        <td>
      HOW OLD IS YOUR HERO?
        </td>
        <td>
          <input type="text" name="heroAge" required/>
        </td>
      </tr>
            <td>
            XX, OR XY?
            </td>
            <td>
              <input type="radio"name="heroGender" value="xx">XX
              <input type="radio" name="heroGender" value="xy">XY<br>
           </td>
          </tr>
          <tr>
            <td>
            WHAT COLOR IS YOUR HERO?
            </td>
            <td>
              <input type="text"name="heroColor" required/>
           </td>
          </tr>
          <tr>
            <td>
            WHERE DOES YOUR HERO LIVE?
            </td>
            <td>
              <input type="text"name="heroWorld"required/>
           </td>
          </tr>
    </table>
    <input type="submit" value="Create Hero"/>
</form>

<?php
require("footer.php");
?>
