<html>
<head>
<title>Insert Book Results</title>
<body>

<?

// get the data from the form and assign the data to variables

$name = $_POST['name'];
$Aname = $_POST['Aname'];
$year =$_POST['year'];
$price = $_POST['price'];
$status = $_POST['status'];


// check to see if all the data is there

if (!$name
 || !$Aname
 || !$year
 || !$price
 || !$status)
{
	echo "You have not entered all the required details.<br>"
		."Please go back and try again.";
	exit;
}



// add slashes and prepare the data for inserting into the db

$name = addslashes($name);
$Aname = addslashes($Aname);
$year = intval($year);
$price = intval($price);
$status = addslashes($status);
// connect to the db

@ $db = mysql_pconnect("sql304.epizy.com","epiz_27119428","QNtdHT31Hzu");

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}


// select the db
mysql_select_db("epiz_27119428_BOOKLIB");


// prepare the query

$query = "insert into LIBRARY values
	('".NULL."','".$name."','".$Aname."','".$year."','".$price."','".$status."')";



// run the query

$result = mysql_query($query);

if($result)
	echo mysql_affected_rows()." book added to Database.<br>";
?>

</body>
</html>


