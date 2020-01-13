<?php include "includes/header.php" ?>

<div class="jumbotron">
  <div class="container">
    <h2>Hello, welcome to the Pokémon Trainer Club!</h3>
  </div>
  <div class="container" id = "account">
    <div class="col-md-6">
      <br>
      <br>
      <br>
      <h3>Login to existing account</h3>
      <?php
      if(isset($_POST['signin'])) {
        $name = $_POST['name'];
        $pw = $_POST['password'];
        $user = new User;
        $user->verifyLogin($name, $pw);
        $errors = $user->errors;

        if(!empty($errors)) {
          echo "<div class='alert alert-danger'>Wrong username or password!</div>";
        }
      }
       ?>
      <form class="" action="login.php" method="post">
        <div class="form-group">
          <label for="name">User Name</label>
          <input type="text" name="name" class="form-control" id="" placeholder="">
          <p class="help-block help-name"></p>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="" placeholder="">
          <p class="help-block password_error_message"></p>
        </div>
        <button type="submit" name="signin" class="btn btn-primary btn-block">Login</button>
      </form>
    </div>
    <div class="col-md-6">
      <br>
      <h3>Join the Pokémon Trainer Club!</h3>
      <p>Create a Pokémon Trainer Club account today! With a Pokémon Trainer Club account, you can manage your Pokemon.com profile, have fun on the Pokémon Global Link and much more!</p>
      <a href = "create.php"><button type="button" name="button" class = "btn btn-info" >Create an Account!</button></a>
      <img src="https://assets.pokemon.com/static2/_ui/img/account/sign-up.png" alt="">
    </div>
  </div>

</div>

<?php include "includes/footer.php" ?>
