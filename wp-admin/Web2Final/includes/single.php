<?php
$current = $cur['pokemon_id'];
$next = $current+1;
$prev = $current-1;
if ($prev == 0) $prev = $this->total();
if ($next > $this->total()) $next = 1;
$pkm = new Pokemon;
$nextpkm = $pkm->getName($next);
$prevpkm = $pkm->getName($prev);
if ($prev < 10) $prev = "#00"."{$prev}"; else $prev = "#0"."{$prev}";
if ($next < 10) $next = "#00"."{$next}"; else $next = "#0"."{$next}";
?>


<div class="narrator">
  <a href="detail.php?name=<?php echo $prevpkm; ?>" style="text-align:left;"><button style="width: 50%;  font-size: 20px;" type="button" class="btn btn-warning"><i class="fa fa-arrow-left"style="font-size:20px"></i> <?php echo "{$prev} "."{$prevpkm}"; ?></button></a>
  <a href="detail.php?name=<?php echo $nextpkm; ?>" style="text-align:right;"><button style="width: 50%; font-size: 20px;" type="button" class="btn btn-warning"><?php echo "{$nextpkm} "."{$next}"; ?> <i class="fa fa-arrow-right"style="font-size:20px"></i></button></a>
</div>


<div class="container" id = "content">
  <h1 style = "text-align: center; font-weight: bold;"><?php echo "{$name} {$id}"; ?></h1>

  <div class="content" style="margin-left: 60px;margin-right: 60px;">
    <div class="col-sm-6 col-xs-12">
      <img src="pokemons/<?php echo $url; ?>" alt=""style="object-fit: cover; width: 100%;">
    </div>

    <div class="col-sm-6 col-xs-12">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <img src="pokemons/Capture2" style="object-fit: cover; width: 100%;"alt="">
    </div>
    <div class="col-xs-12" style="text-align:center; margin-top:10px;">
      <img src="pokemons/Capture" alt="" style="object-fit: cover; width: 70%; ">
    </div>

  </div>
</div>
