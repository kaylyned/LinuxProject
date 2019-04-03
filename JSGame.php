<?php
require("checkvalid.php");
require("header.php");
?>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#container {
  width: 400px;
  height: 400px;
  position: sticky;
  background: blue;
}
#animate {
  width: 50px;
  height: 50px;
  position: absolute;
  background-color: orange;
}
</style>
<body>
  <div>
<p>
<strong>THIS GAME IS SO MUCH FUN!</strong> <br/>
<button onclick="MOVE()">CLICK HERE</button>
</p>
<div id ="container"><div id ="animate"></div></div>

<script>
function MOVE()
{
  var elem = document.getElementById("animate");
  var pos = 0;
  var id = setInterval(frame, 5);
  function frame()
  {
    if (pos == 350)
    {
      clearInterval(id);
    }
    else
    {
      pos++;
      elem.style.top = pos + 'px';
      elem.style.left = pos + 'px';
    }
  }
}
</script>
</div>
<div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
      $("#topsy").click(function(){
          var div = $("#animate");
          div.animate({height: '100px', opacity: '0.6'}, "slow");
          div.animate({width: '100px', opacity: '1.0'}, "slow");
          div.animate({height: '50px', opacity: '0.6'}, "slow");
          div.animate({width: '50px', opacity: '1.0'}, "slow");
      });
  });
  </script>
<button type="button" id="topsy">CLICK HERE TOO</button>
<h3><blockquote>THERE IS ONLY ONE LAME GAME... LOOSERS. </blockquote></h3>
</div>


</body>
</html>

<?php
require("footer.php");
?>
