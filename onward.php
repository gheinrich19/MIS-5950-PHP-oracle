<?php
// File onward.php
session_start();
if(!IsSet($_SESSION['VID']))
	{ header ("location: login.php"); }
$vid = $_SESSION['VID'];
$vuser = $_SESSION['VUSER'];
?>
<html><head><style type="text/css">
table.center {
	margin-left:auto;
	margin-right:auto;
}
</style></head><body style="background-color:burlywood;">
<script src="destroy.js"></script>
<div style="text-align:center;">
	<h1 style="color:indigo">Successful Login</font></h1>
	<table class="center">
		<tr><td><input type=button onClick="killSession();" 
		value="destroy"</td></tr>
	</table></div>
	<div style="text-align:center;" id="txtHint">
		<?php
		 echo "<h5 style='text-align:center;'";
		 print_r($_SESSION);
		 ?>
		</div></body></html>

?>
