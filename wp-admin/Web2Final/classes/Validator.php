<?php
class Validator {
  private function __construct() {

  }

  public static function checkLen($str, $min, $max) {
    if(strlen($str) >= $min && strlen($str) <= $max) return true;
    else return false;
  }

  public static function imgCheck($img) {
    $dest = "";
    $img_errors = [];
    $file = $img;
    $filename = $file['name'];
    $ext = explode(".", $filename);
    $ext = end($ext);
    //echo $ext;
    //var_dump($file);
    $size = $file['size'];
    $error = $file['error'];
    $tmp = $file['tmp_name'];
    $newname = "";
    if($error == 0) {
      if($size < 10000000) {
        $allowed = ['png', 'jpg', 'jpeg', 'gif'];
        if(in_array($ext, $allowed)) {
          $newname = uniqid('', true) . "." . $ext;
          $dest = "pokemons/" . $newname;
          move_uploaded_file($tmp, $dest);
        } else {
            $img_errors[] = "Only image files are allowed!";
            //echo 123;
        }
      } else {
        $img_errors[] = "Your file is too large!";
      }
    } else {
      $img_errors[] = "There was an error uploading your file";
    }
    $array = array($newname,$img_errors,$ext);
    return $array;
  }

  public static function match($strA, $strB) {
    if($strA == $strB) return true;
     else return false;
  }

  public static function checkEmail($email) {
      return filter_var($email,FILTER_VALIDATE_EMAIL);
  }

  public static function hash($pw, $hash) {
    if(password_verify($pw, $hash)) {
      return true;
    } else {
      return false;
    }
  }
} ?>
