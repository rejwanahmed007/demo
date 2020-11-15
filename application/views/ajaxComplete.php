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
			$( document ).ajaxComplete(function() {
			$( ".log" ).text( "Triggered ajaxComplete handler." );
			});
			$( ".trigger" ).click(function() {
	  	$( ".result" ).load( "test.html" );
			});

	</script>

</html>
