<?php

@ $db = mysql_pconnect("sql304.epizy.com","epiz_27119428","QNtdHT31Hzu");

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}


// select the db
mysql_select_db("epiz_27119428_BOOKLIB");

$query = "DELETE FROM LIBRARY WHERE ID='" . $_GET["ID"] . "'";
$result = mysql_query($query);

if($result)
	echo mysql_affected_rows()."Record Deleted Successfully.<br>";

?>