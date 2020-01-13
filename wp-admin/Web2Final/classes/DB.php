<?php
class DB {
  public $conn;

  public function __construct() {
    $this->conn = new mysqli('localhost', 'root', '', 'final');
    return $this->conn;
  }

  public function run($query) {
    return $this->conn->query($query);
  }
}
?>
