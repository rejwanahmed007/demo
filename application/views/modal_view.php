<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Item List</title>
  	<link rel="stylesheet" href="<?php echo base_url();?>asset/jquery_ui/jquery-ui.css">
  	<link rel="stylesheet" href="<?php echo base_url();?>asset/fontawesome/css/all.min.css">

      <script src="<?php echo base_url();?>asset/jquery/jquery-3.4.1.min.js"></script>
  	<script src="<?php echo base_url();?>asset/jquery_ui/jquery-ui.min.js"></script>
  </head>

  <body>
    <div id="">
      <input type="button" name="delete_item" value="Delete Item" onclick="delete_item()">
    </div>
    <div id="delete_item" title="Delete Item Info">
	    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span><h3>Are You sure to delete the selected item?</h3></p>
	    <!-- <input type="hidden" id="delete_item_id" value="0"> -->
  	</div>
  </body>

  <script type="text/javascript">

      delete_dialog =$( "#delete_item" ).dialog({
      autoOpen: false,
      resizable: false,
      height: "auto",
      width: 400,
      modal: true,
      buttons: {
        "OK":  function() {
          $( this ).dialog( "close" );
            },
        Cancel: function() {
          $( this ).dialog( "close" );
            }
          }
        });

      function delete_item()
     {

       delete_dialog.dialog( "open" );
     }



  </script>

</html>
