<?php
include "includes/header.php"; ?>


<div class="container" style="margin-top:70px;">
  <?php
  if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $pkm = new Pokemon;
    $pkm->detail($name);
  } else echo 12345;

  ?>
</div>





<?php include "includes/footer.php"; ?>
