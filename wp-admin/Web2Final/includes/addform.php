<form class="" action="addpokemon.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="">
    <p class="help-block"></p>
  </div>

  <div class="form-group">
    <label for="file">Pokemon Image</label>
    <input type="file" class="form-control" name="file" id="pkmimage" placeholder="">
  </div>
  <button type="submit" name="add-pkm" class="btn btn-primary btn-block" id = "add">Add Pokemon</button>
</form>
