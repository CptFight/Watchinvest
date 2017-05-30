

<!-- datetimepicker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>


<?php 
if(isset($custom_scripts) && is_array($custom_scripts)  ) { 
	foreach($custom_scripts as $key => $script_url){  
?>
<script type='text/javascript' src="<?php echo $script_url; ?>"> </script>
<?php } } ?>


