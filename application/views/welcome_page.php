<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>INVENTORY MANAGEMENT SYSTEM</title>

	<script src="<?php echo base_url();?>asset/jquery/jquery-3.5.1.min.js"></script>
	<script src="<?php echo base_url();?>asset/jquery_ui/jquery-ui.min.js"></script>

</head>
<body>
	<center><h1>Welcome to Inventory Management System</h1>
	<nav>
		<a  href="<?php echo base_url();?>brand">Brand</a> <!-- //TODO:need to work -->
	  	<a href="<?php echo base_url();?>modelitem">Model</a> <!-- //need to work -->
	  	<a href="<?php echo base_url();?>">Item</a> <!-- working -->
	</nav>

	<div id="item_menu"></div>

	</center>

</body>

<script>
	$(document).ready(function()
	{
		// $('#item_menu').html('<table border = "1"  cellspacing="5" cellpadding="10" style="border-collapse: collapse;"><tr> <td> SL </td> <td> Item </td> <td> Model Name </td> <td> Brand Name </td> <td> Entry Date </td> <td> Action </td></tr> </table>');
		$.ajax({
               type : "POST",
               url  : "<?php echo base_url();?>inventory/get_item_list",
         			dataType: 'json',
		         success: function(response){
		         	get_item_list(response);

         		}

            });
	});
	function get_item_list(response)
	{
		// alert("hello");
	 // NOTE: incomplete
	 // TODO: further work
		$('#item_menu').html('<table border = "1"  cellspacing="5" cellpadding="10" style="border-collapse: collapse;"><tr> <td> SL </td> <td> Item </td> <td> Model Name </td> <td> Brand Name </td> <td> Entry Date </td> <td> Action </td></tr> </table>');

	}

</script>

</html>
