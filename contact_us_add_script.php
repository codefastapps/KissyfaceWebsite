<?php
	
	include "config.php";
	
	$mysqlConnection = mysql_connect($strMySQLServer, $strMySQLUsername, $strMySQLPassword) or die(mysql_error());
	mysql_select_db($strMySQLName, $mysqlConnection) or die(mysql_error());
	
	$strEmail = "Unknown";
	if(isset($_POST["inpEmail"])){
		$strEmail = mysql_real_escape_string($_POST["inpEmail"]);
	}
	$strMessage = "Unknown";
	if(isset($_POST["inpMessage"])){
		$strMessage = mysql_real_escape_string($_POST["inpMessage"]);
	}
	
	mysql_query('INSERT INTO tblContactUs (email, message) VALUES ("' . $strEmail . '","' . $strMessage . '");');
	mysql_close($mysqlConnection);
	
	header("Location: contact_us.php?inpMessageSent=true")

?>