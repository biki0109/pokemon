<?php
include "includes/header.php";
?>

<div class="container">
  <br>
  <br>

  <div class="col-md-9">
    <div class="jumbotron">
      <?php
        $errors = [];
        if(isset($_POST['create'])) {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $pw1 = $_POST['password1'];
          $pw2 = $_POST['password2'];
          $user = new User;
          $user->verifyNewAccount($name, $email, $pw1, $pw2);
          $errors = $user->errors;
          if(!empty($errors)) {
            $err = '';
            foreach ($errors as $x) {
              $err.= $x . ", ";
            }
            $err = trim($err, ", ");
            echo "<div class='alert alert-danger'>There was a problem: {$err}!</div>";
          } else $user->createAccount();
        }

       ?>
      <h3>ALL FIELDS ARE REQUIRED!</h3>
      <form class="" enctype="multipart/form-data" action="create.php" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="">
          <p class="help-block"></p>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="" name="email">
          <p class="help-block"></p>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password1" id="password" class="form-control" id="" placeholder="">
          <p class="help-block"></p>
        </div>
        <div class="form-group">
          <label for="password">Retype Password</label>
          <input type="password" name="password2" id="password2" class="form-control" id="password2" placeholder="">
          <p class="help-block"></p>
        </div>
        <button type="submit" class="btn btn-success btn-block" name="create">Create Account</button>
      </form>

    </div>
    <div class="uu" style = "background: #616161;">
      <p>If you already have an account, please <a href = "login.php" style = "color: #03a9f4;">log in now</a>.</p>
    </div>
  </div>
  <div class="col-md-3" style = "background: burlywood; margin-left: -15px;">
    <img src="https://assets.pokemon.com/static2/_ui/img/account/create-account.png" alt="">
  </div>
</div>

<?php include "includes/footer.php" ?>
