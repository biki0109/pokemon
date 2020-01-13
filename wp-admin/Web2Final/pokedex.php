<?php
include "includes/header.php";
$pkm = new Pokemon;
$num = $pkm->total();
?>

<div class="container" style = "margin-top: 5%;">
  <h1 style="text-align:center;">Pokedex</h1>
  <h2 style="text-align:center;">Total number of Pokémon: <?php echo $num; ?></h2>
  <br>
  <div class="row" style="padding: 20px;background: #333;border-radius: 10px;">
    <form class="col-sm-6" action="pokedex.php" method="post">
      <div class="form-group">
        <label for=""><h3 style="color:white;">Name or Number</h3></label>
        <div class="input-bar">
          <div class="input-bar-item with100">
            <input type="text" class="form-control" id="pkm" name = "pkm">
          </div>
          <div class="input-bar-item">
            <button type="submit" name="search"  id = "search" class="btn btn-info" style="margin-top:-2px;"><i class = "fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </form>
    <div class="col-sm-6" style="background: #4dad5b; padding: 10px;
    border-radius: 10px; margin-top:15px;">
      <h3 style="color: white;">Search for a Pokémon by name or using its ID</h3>
    </div>
  </div>
  <br>
  <div class="row">
    <form class="col-sm-6 col-xs-12" action="pokedex.php" method="post">
      <button type="submit" name="suprise" class = "btn btn-info" style="width: 100%; padding: 15px; font-size: 25px;"><i class="fa fa-refresh fa-spin"></i> Suprise me!</button>
    </form>

    <form class="col-sm-6 col-xs-12" style="margin-top:-12px;" action = "#" method="post">
        <h3>Sort results by</h3>
        <select class="form-control" style="background: #333; color: white; font-size: 15px;" name = "option" id = "sort" onchange='this.form.submit()'>
          <?php
          if (isset($_POST['option']) && !empty($_POST['option'])) {
            $opt = array("Lowest Number (First)","Highest Number (First)","A-Z","Z-A");
            foreach ($opt as $i) {
              $sel = "";
              if ($i == $_POST['option']) $sel = "selected";
              echo "<option {$sel}>{$i}</option>";
            }
          } else echo "<option selected>Sort results by...</option><option>Lowest Number (First)</option><option>Highest Number (First)</option><option>A-Z</option><option>Z-A</option>"
          ?>
        </select>
        <noscript><input type="sort" value="Submit" name = "sort"></noscript>

    </form>
  </div>

  <div class="pokedex" style="margin-top: 15px;">
    <?php

    //sorting option
    if (isset($_POST['option'])) {
      Session::set('option',$_POST);

      if ($_POST['option'] == "Lowest Number (First)") {
        if (Session::get('pokedex') == "default") $pkm->defaultOutput(1);
        if (Session::get('pokedex') == "search") $pkm->searchOutput(Session::get('pokedex_search'),1);
      }

      if ($_POST['option'] == "Highest Number (First)") {
        if (Session::get('pokedex') == "default") $pkm->defaultOutput(2);
        if (Session::get('pokedex') == "search") $pkm->searchOutput(Session::get('pokedex_search'),2);
      }

      if ($_POST['option'] == "A-Z") {
        if (Session::get('pokedex') == "default") $pkm->defaultOutput(3);
        if (Session::get('pokedex') == "search") $pkm->searchOutput(Session::get('pokedex_search'),3);
      }

      if ($_POST['option'] == "Z-A") {
        if (Session::get('pokedex') == "default") $pkm->defaultOutput(4);
        if (Session::get('pokedex') == "search") $pkm->searchOutput(Session::get('pokedex_search'),4);
      }
    }
    //default
    elseif (isset($_POST['search'])) {
      Session::set('pokedex','search');
      $val = $_POST['pkm'];
      $pkm->searchOutput($val,1);
      Session::set('pokedex_search',$val);
    } elseif (isset($_POST['suprise'])) {
      $pkm->randomOutput();
      Session::set('pokedex','default');
      Session::set('pokedex_search'," ");
    } else {
      $pkm->defaultOutput(1);
      Session::set('pokedex','default');
      Session::set('pokedex_search'," ");
    }
    ?>

  </div>

  <div class="col-xs-12" style = "text-align: center; margin-top: 15px;">
    <h2>Are we missing any Pokémons?</h2>
      <a href = "addpokemon.php">
      <input type="submit" name="add-pkm" class = "btn btn-warning" style = "padding: 20px; font-size:20px;" value = "Add a new Pokémon"></input></a>
  </div>

</div>

<?php include "includes/footer.php" ?>
