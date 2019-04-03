<?php
?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>WJ FORSETI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      /* Remove the navbar's default rounded borders and increase the bottom margin */
      .navbar {
        margin-bottom: 50px;
        border-radius: 0;
      }

      /* Remove the jumbotron's default bottom margin */
       .jumbotron {
        margin-bottom: 0;
      }
      table {
        margin:auto;
        border-color:blue;
        border-width:thick;
        border-style: groove;
      }
      th,td{
        width:75PX;
        text-align: center;
      }

      /* Add a orange background color and some padding to the header */
      header {
        background-color:black;
        padding: 27px;
      }
      .container {
          position: relative;
          text-align: center;
          color: black;
      }

      .bottom-left {
        position: absolute
          bottom: 8px;
          left: 16px;
      }

      .top-left {
          position: absolute;
          top: 10px;
          left: 18px;
      }

      .top-right {
          position: absolute;
          top: 10px;
          right: 18px;
      }

      .bottom-right {
          position: absolute;
          bottom: 10px;
          right: 18px;
      }

      .centered {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
      }
      </style>

      <div class="w3-content" style="max-width:1600px">
  </div>

  <div class="jumbotron">
    <div class="container">
      <img src="superhero2.jpg" alt="" style="width:100%;">
      <div class="centered"><h1 class="w3-xxxlarge"><b>WJ FORSETI</b></h1>>
    <h4>BUILD, CREATE AND SHARE <span class="w3-tag">YOUR SUPERHERO!</span></h4>
    </div>
  </div>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="Home.php">Home</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="createHero.php">Create Hero</a></li>
          <li><a href="updateHeroP.php">Update Hero</a></li>
          <li><a href="JSGame.php">GAMES!</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Your Profile</a></li>
          <li><a href="Login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-send"></span> Logout</a></li>
        </ul>

      </div>
    </div>
  </nav>
</head>
<body>
