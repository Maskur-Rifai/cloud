<?php
	$dbhost = 'localhost:3036';
	$dbuser = 'root';
	$dbpass = '';
	$dbname='sid';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	$conectdb=mysql_select_db($dbname,$conn);
	if(!$conectdb){
		 die('Could not connect: ' . mysql_error());
		}
?>
