<?php include "includes/init.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+HK&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <?php
    $nav = array("Home","Equipments","Services","About");
    ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Pikachuwu</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class = "nav navbar-nav">
            <?php
              $nav = array("Home","Pokedex");
              $class = array("fa fa-home","fa fa-book");
              $color = array("#080808","#d01717");
              if ($_SESSION['isLoggedIn'] == true) {
                array_push($nav,"Profile");
                array_push($class,"fa fa-address-book");
                array_push($color,"#5bc0de");
              }
              include "func.php";
              menuuu($nav,$class,$color);
            ?>
          </ul>

          <ul class="nav navbar-nav navbar-right" method="post">
            <?php
            if ($_SESSION['isLoggedIn'] == true)
              echo '<p class="navbar-text navbar-right" ><a href="user.php"  id = "user" ><i class="fa fa-user"></i>  '.$_SESSION['name'] . '</a> | <a href="logout.php" class="navbar-link" style = "color: #8bc34a;">Log Out</a></p>';
            else {
              echo '<a href = "login.php" ><button type="button" class="btn btn-success"style = "margin-top:8px;">Sign in</button></a>';
              echo "<div id = 'ask'><a href = 'create.php' style = 'text-decoration: none;'>Join Us</a></div>";
            }
            ?>

          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="left-icon-bar">
      <ul>
        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
      </ul>
    </div>
