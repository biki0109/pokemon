<?php
class Pokemon {
  public $conn;
  public $name;

  public function __construct() {
    $this->conn = new DB;
  }

  public function checkName($name) {
    $result = $this->conn->run("SELECT * FROM pokemons where pokemon_name = '$name'");
    return $result->num_rows;
  }

  public function total() {
    $result = $this->conn->run("SELECT * FROM pokemons");
    return mysqli_num_rows($result);
  }

  public function detail($val) {
    $result = $this->conn->run("SELECT * FROM pokemons WHERE pokemon_name = '$val'");
    $cur = $result->fetch_assoc();
    $id = "#0";
    if ($cur['pokemon_id'] < 10) {
      $id.="0";
      $id.="{$cur['pokemon_id']}";
    } else $id.="{$cur['pokemon_id']}";
    $name = $cur['pokemon_name'];
    $url = $cur['filename'];
    include "includes/single.php";
  }
  
  public function checkOpt($opt,$con) {
    if ($opt == 1) return $this->conn->run("SELECT * FROM pokemons $con");
    if ($opt == 2) return $this->conn->run("SELECT * FROM pokemons $con ORDER BY pokemon_id DESC");
    if ($opt == 3) return $this->conn->run("SELECT * FROM pokemons $con ORDER BY pokemon_name ASC");
    if ($opt == 4) return $this->conn->run("SELECT * FROM pokemons $con ORDER BY pokemon_name DESC");
  }

  public function defaultOutput($opt) {
    $result = $this->checkOpt($opt,"");
    $this->output($result->fetch_all(MYSQLI_ASSOC));
  }

  public function searchOutput($val,$opt) {
    if ($val == "") $this->defaultOutput($opt);
    else {
      if ($val[0] == "0") {
        while ($val[0] == "0") $val = substr($val,1);
        if (!is_numeric($val[0])) $val = "laksdjahkenakjfe";
      }
      if (is_numeric($val)) {
        $result = $this->checkOpt($opt,"WHERE pokemon_id like '%$val%'");
      }
      else $result = $this->checkOpt($opt,"WHERE pokemon_name LIKE '%$val%'");
      $this->output($result->fetch_all(MYSQLI_ASSOC));
    }
  }

  public function randomOutput() {
    $result = $this->conn->run("SELECT * FROM pokemons ORDER BY RAND()");
    $this->output($result->fetch_all(MYSQLI_ASSOC));
  }

  public function getName($val) {
    //echo $val;
    $result = $this->conn->run("SELECT * FROM pokemons where pokemon_id = $val");
    //var_dump($result);
    $uuu = $result->fetch_assoc();
    return $uuu['pokemon_name'];
  }
  public function output($data) {
    $result = "";
    foreach ($data as $i) {
      $id = "#";
      if ($i['pokemon_id'] < 10) {
        $id.= "00";
        $id.="{$i['pokemon_id']}";
      } else
      if ($i['pokemon_id'] < 100) {
        $id.= "0";
        $id.="{$i['pokemon_id']}";
      }
      $result.= "<div class='pkm col-lg-3 col-md-4 col-sm-6 col-xs-12' style ='margin-bottom: 20px;'><a href = 'detail.php?name={$i['pokemon_name']}'><img class='img-responsive uwu' src='pokemons/".$i['filename'] ."'></a><div class='container'><p>".$id."</p><h3>".$i['pokemon_name']."</h3></div></div>";
    }
    if ($result == "") echo "<div class = 'alert alert-danger'>No Pokémon Matched Your Search!</div>";
    else {
      $result = "<div class = 'wrapper'>".$result;
      $result.= "</div>";
      echo $result;
    }

  }
}
?>
