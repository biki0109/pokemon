<?php
include 'includes/header.php';

?>

<div class="container">

<div class="jumbotron" style="margin-top: 45px;">
<?php
  if(Session::get('isLoggedIn')) {

    if(!empty($errors)) {
      foreach ($errors as $e) echo "<div class='alert alert-danger'>{$e}</div>";
    }
    include 'includes/addform.php';
  } else {
    echo ("<script LANGUAGE='JavaScript'>
          window.alert('You must login to add a Pokemon');
          window.location.href='login.php';
       </script>");
  }
  if (isset($_POST['add-pkm'])) {
    echo "1234";
    if ( 0 < $_FILES['file']['error'] ) {
            //echo 'Error: ' . $_FILES['file']['error'] . '<br>';
            echo "<div class = 'alert alert-danger'>No file uploaded</div>";
        }
        else {
            $pkm = new Pokemon;
            $name = $_POST['name'];

            $img = $_FILES['file'];
            $data = Validator::imgCheck($img);
            $error = $data[1];
            $filename = $data[0];
            $ext = $data[2];
            //if ($pkm->checkName($name) == 1); $error[] = "Name already exists!";
            $id = Session::get('user_id');
            //echo $id;
            if (Validator::checkLen($name,1,30) == false) $error[] = "Name cannot be empty!";
            //var_dump($error);
            if(!empty($error)) {
              $err = '';
              foreach ($error as $x)
              echo "<div class='alert alert-danger'>{$x}</div>";
            } else {

              $pkm->conn->run("INSERT into pokemons VALUES(default,'$name','$filename','$ext',$id,default,default)");
            }
        }
  }


 ?>
</div>
</div>
<?php
include 'includes/footer.php';
 ?>
