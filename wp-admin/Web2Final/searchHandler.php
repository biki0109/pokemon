<?php
include "includes/init.php";
echo "AJAX !!!";
$pokesearch = new Pokemon;
if (isset($_POST)) {
  echo "You requested: ".$_POST['request'];
  echo $_POST['request'];
  $search = $pokesearch->searchOutput($_POST['request']);
  //$blogsearch->outputBlogs();
} else echo "nooo";
?>
