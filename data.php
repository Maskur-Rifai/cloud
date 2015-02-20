<?php

    $conn = mysql_connect("localhost", "root", "")  or die(mysql_error());
    mysql_select_db("sid", $conn) or die(mysql_error());
    $q = strtolower($_GET["term"]);

	$return = array();
    $query = mysql_query("select * from kecamatan where namakec like '%$q%'") or die(mysql_error());
    while ($row = mysql_fetch_array($query)) {
    	array_push($return,array('label'=>$row['namakec'],'value'=>$row['namakec']));
	}
	echo(json_encode($return));

?>


