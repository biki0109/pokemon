<?php
// Dynamic menu
function menuuu($menu,$class,$color) {
  $currpage = basename($_SERVER['SCRIPT_FILENAME'], ".php");
  for ($i = 0; $i < count($menu); $i++) {
    $temp = strtolower($menu[$i]);
    $icon = $class[$i];
    if($temp == $currpage) {

      $col = $color[$i];
    } elseif ($currpage == "index" && $menu[$i] == "Home") {
      $col = $color[0];
    } else $col = "";
    if($menu[$i] == "Home") {
      $href = "index";
    } else {
      $href = $menu[$i];
    }
    if(strpos($menu[$i], "-") !== false) {
      $menu[$i] = explode("-", $menu[$i]);
      $menu[$i] = implode(" ", $menu[$i]);
    }
    echo '<li><a href="' . strtolower($href) . '.php" id = "t'.$i.'" style = "background: '.$col.';"><i class="'.$icon.'"></i> ' . $menu[$i] .'</a></li>';
  }
}

?>
