<?php
require("header.php");
require("checkvalid.php");
require ("userClass.php");

?>
<!DOCTYPE html>
<html>
<title> WJ FORSETI</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>


<!-- Grid -->
  <div class="w3-row w3-padding w3-border">


<!-- BIO -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h1>PROFILE</h1>
          <h5><span class="w3-opacity">THE SUPERHERO... THE LEGEND...</span>YOU</h5>
          <button type="button"
          onclick="document.getElementById('demo').innerHTML = new Date()">Date and Time.</button>

          <p id="demo"></p>

</div>
<div class="w3-justify">
  <p><strong> USERNAME: </strong></p>

  <?php
  echo '<input type="text" name="username" readonly value="'.
  $_SESSION['valid_user'] . '"/>';
   ?>
<br />
  <?php
  echo '<img src="./Photos/'.$_SESSION['PathIm'].'" style="width;100%; max-width:700px; margin-top:32px;"/>';
?>

</div>
        <div class="w3-justify">
          <p><strong>UPLOAD A FILE : </strong></p>
           <p><form action="upload.php" method="post" enctype="multipart/form-data">
             <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
             <input type="file" name="the_file" id ="the_file"/>
             <input type="submit" value="Profile pict."/>
           </form></p>
          <p class="w3-clear"></p>
          </div>
        </div>
      </div>
      <hr>
          <!--PROFILE -->
                <div class="w3-container w3-white w3-margin w3-padding-large">
                  <div class="w3-center"></div>
                  <div class="w3-justify">
                  </div>
                </div>
              </div>

              <!-- END About/Intro Menu -->
              </div>

            <!-- END GRID -->
            </div>

            <!--END MENU -->
          </div>

          <!-- Footer -->
          <?php
          require("footer.php");
          ?>
          </body>
          </html>
