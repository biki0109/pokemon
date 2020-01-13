<?php include "includes/header.php"; ?>

<div class="container" style="margin-top: 100px;">
  <div class="col-lg-4" style="text-align:center;">
    <img src="https://www.w3schools.com/howto/img_avatar.png" style="width:200px; border-radius: 50%;">
    <h2>@<?php echo Session::get('name'); ?></h2>
    <a href = "logout.php" ><button type="button" name="button" class = "btn btn-warning">SIGN OUT</button></a>
  </div>

  <div class="col-lg-8">
    <h3>My Profile</h3>
    <form class="" action="" method="post">
      <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" id="" value="<?php echo Session::get('name'); ?>">
      </div>

      <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="" value="<?php echo Session::get('email'); ?>">
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </form>
  </div>
</div>


<?php include "includes/footer.php"; ?>
