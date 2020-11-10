<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jquery:ajaxComplete</title>

	<script src="<?php echo base_url();?>asset/jquery/jquery-3.5.1.js"></script>
	<script src="<?php echo base_url();?>asset/jquery_ui/jquery-ui.min.js"></script>

</head>
<body>
	<div class="trigger">Trigger</div>
	<div class="result"></div>
	<div class="log"></div>

</body>

	<script>
      $.get( "test.php", function( data ) {
        alert(data.name),
        $( "body" )
      .append( "Name: " + data.name ) // John
      .append( "Time: " + data.time ); //  2pm
    }, "json" );

	</script>

</html>
