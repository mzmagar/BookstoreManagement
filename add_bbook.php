<html>
<head>
<title>Insert Borrowed Book Results</title>
<body>

<?

// get the data from the form and assign the data to variables

$name = $_POST['name'];
$Bname = $_POST['Bname'];
$date = $_POST['date'];
$status = $_POST['status'];


// check to see if all the data is there

if (!$name
 || !$Bname
 || !$date
 || !$status)
{
	echo "You have not entered all the required details.<br>"
		."Please go back and try again.";
	exit;
}



// add slashes and prepare the data for inserting into the db

$name = addslashes($name);
$Bname = addslashes($Bname);
$date = intval($date);
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

$query = "insert into BORROW values
	('".NULL."','".$name."','".$Bname."','".$date."','".$status."')";



// run the query

$result = mysql_query($query);

if($result)
	echo mysql_affected_rows()." book added to Database.<br>";
?>

</body>
</html>


