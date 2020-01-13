<?php
class User {
  protected $user_name;
  protected $user_pw;
  protected $user_email;
  protected $user_role;
  private $user_hash;
  public $errors;
  public $conn;

  public function __construct() {
      $this->conn = new DB;
      //echo "New User";
      if (Session::get('isLoggedIn') == false) {
          $this->user_name = "";
          $this->user_hash = "";
          $this->user_pw = "";
      } else {
        $this->user_name = Session::get('name');
        $this->user_role = Session::get('role');

      }
      $this->errors = [];
  }

  public function verifyNewAccount($name, $email, $pw1, $pw2) {
    $this->user_name = $name;
    if($this->finduser() >= 1 || Validator::checkLen($name,3,20) == false) {
      $this->errors [] = "Username is taken or is too short";
    }
    if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
      $this->errors [] = "Invalid email";
    }
    if($pw1 != $pw2 || $pw1 != "" || $pw1 != " ") {
      $this->errors [] = "Passwords do not match or empty!";
    }
    if(empty($this->errors)) {
      $this->user_email = $email;
      $this->user_pw = $pw1;
      $this->user_role = 3;
      $this->createAccount();
    } else {
      var_dump($this->errors);
    }

  }

  public function finduser() {
    $sql = "SELECT * FROM users WHERE user_name = '$this->user_name'";
    $this->user_info = $this->conn->run($sql);
    return $this->user_info->num_rows;
  }

  public function createAccount() {
    $this->user_hash = password_hash($this->user_pw, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users VALUES(default, '$this->user_name','$this->user_email','$this->user_hash', 3, default, default)";
    $result = $this->conn->run($sql);
    echo "<div class = 'alert alert-success'>Account created!</div>";
  }

  public function verifyLogin($name, $pw) {
    $this->user_name = $name;
    $this->user_pw = $pw;
    $this->finduser();
    if($this->user_info->num_rows == 0) {
      $this->errors[] = "Username not found";
    } else {
      $this->user_info = $this->user_info->fetch_assoc();
      $this->user_hash = $this->user_info['user_hash'];
      $this->user_email = $this->user_info['user_email'];
      if(Validator::hash($this->user_pw,$this->user_hash)) {
        $this->user_id = $this->user_info['user_id'];
        $this->user_role = $this->user_info['user_role'];
        $this->login();
      } else {
        $this->errors [] = "Wrong password";
      }
    }
  }

  public function login() {
    echo "you are logged in";
    Session::set('name', $this->user_name);
    Session::set('email',$this->user_email);
    Session::set('user_id', $this->user_id);
    Session::set('role', $this->user_role);
    Session::set('isLoggedIn',true);
    header("Location: index.php");
  }
}
?>
