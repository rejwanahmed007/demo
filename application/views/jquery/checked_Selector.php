<!-- <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>checked demo</title>
  <style>
  input, label {
    line-height: 1.5em;
  }
  </style>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>

<form>
  <div>
    <input type="radio" name="fruit" value="orange" id="orange">
    <label for="orange">orange</label>
  </div>
  <div>
    <input type="radio" name="fruit" value="apple" id="apple">
    <label for="apple">apple</label>
  </div>
  <div>
    <input type="radio" name="fruit" value="banana" id="banana">
    <label for="banana">banana</label>
  </div>
  <div id="log"></div>
</form>

<script>
$( "input" ).on( "click", function() {
  $( "#log" ).html( $( "input:checked" ).val() + " is checked!" );
});
</script>

</body>
</html> -->
<!-- <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>selected demo</title>
  <style>
  div {
    color: red;
  }
  </style>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>

<select name="garden" multiple="multiple">
  <option>Flowers</option>
  <option selected="selected">Shrubs</option>
  <option>Trees</option>
  <option selected="selected">Bushes</option>
  <option>Grass</option>
  <option>Dirt</option>
</select>
<div></div>

<script>
$( "select" )
  .change(function() {
    var str = "";
    $( "select option:selected" ).each(function() {
      str += $( this ).text() + " ";
    });
    $( "div" ).text( str );
  })
  .trigger( "change" );
</script>

</body>
</html> -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>text demo</title>
  <style>
  textarea {
    height: 25px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>

<form>
  <input type="button" value="Input Button">
  <input type="checkbox">
  <input type="file">
  <input type="hidden">
  <input type="image">
  <input type="password">
  <input type="radio">
  <input type="reset">
  <input type="submit">
  <input type="text">
  <select>
    <option>Option</option>
  </select>
  <textarea></textarea>
  <button>Button</button>
</form>
<div></div>

<script>
var input = $( "form input:text" ).css({
  background: "yellow",
  border: "3px red solid"
});

$( "div" )
  .text( "For this type jQuery found " + input.length + "." )
  .css( "color", "red" );

// Prevent form submission
$( "form" ).submit(function( event ) {
  event.preventDefault();
});
</script>

</body>
</html>
