console.log("hello");
//pokedex
$(".pokedex").hide();
$(".pokedex").fadeIn(1000);

//ajax add pkm
$("#add").click(function() {
  //console.log(123);
  var file_data = $('#pkmimage').prop('files')[0];
  var form_data = new FormData();
  form_data.append('file', file_data);
  //alert(form_data);
  $.ajax({
      url: 'addpokemon.php',
      dataType: 'text',
      cache: false,
      contentType: false,
      processData: false,
      data: form_data,
      type: 'post',
      success: function(php_script_response){
          //alert(php_script_response);
      }
  });
})


console.log($( window ).width());

// Returns width of HTML document
console.log($( document ).width());
