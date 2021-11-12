<?php

// Grab User submitted information
$username = $_POST["uname"];
$password = $_POST["pass"];

// Connect to the database
@ $db = mysql_pconnect("sql304.epizy.com","epiz_27119428","QNtdHT31Hzu");

// Make sure we connected successfully
if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}

// Select the database to use
mysql_select_db("epiz_27119428_BOOKLIB");
$query="SELECT * FROM SIGNUP";
$result = mysql_query($query);
$row = mysql_fetch_array($result);

if($row["USERNAME"]==$username && $row["PASSWORD"]==$password)    
       {
               echo"You are directed to another page.<br> ";
                header("location:main_page.html");
       }
            else
                echo"Sorry, your credentials are not valid, Please try again.<br>";
?>