<?php
	$database="sphider_apply_nigeria";
	$mysql_user = "applyadmin";
	$mysql_password = "danrej"; 
	$mysql_host = "localhost";
	$mysql_table_prefix = "";

	$success = mysql_pconnect ($mysql_host, $mysql_user, $mysql_password);
	if (!$success)
		die ("<b>Cannot connect to database, check if username, password and host are correct.</b>");
    $success = mysql_select_db ($database);
	if (!$success) {
		print "<b>Cannot choose database, check if database name is correct.";
		die();
	}
?>
