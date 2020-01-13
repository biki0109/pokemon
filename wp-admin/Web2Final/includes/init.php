<?php
session_start();
include "classes/User.php";
include "classes/DB.php";
include "classes/Pokemon.php";
include "classes/Validator.php";
include "classes/Session.php";
if(!isset($_SESSION['isLoggedIn']) || empty($_SESSION)) {
  ## set Session isLoggedIn to = false;
  $_SESSION['isLoggedIn'] = false;
}
 ?>
