<?php
@ $db = mysql_pconnect("sql304.epizy.com","epiz_27119428","QNtdHT31Hzu");

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}
mysql_select_db("epiz_27119428_BOOKLIB");

$query = "select * from BORROW";

		$result = mysql_query($query);
		$num_results = mysql_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
<style>
        table, th, td {
        border: 1px solid black;
        }
        a.class1 {
        background-color: green;
        box-shadow: 0 5px 0 darkgreen;
         color: white;
        padding: 0.8em 1.5em;
        position: relative;
        text-decoration: none;
        text-transform: uppercase;
        }
        a.class1:hover {
        background-color: #557846;
        }
          a:active {
         box-shadow: none;
         top: 5px;
        }
        a.c2:hover {
        color: red;
         background-color: transparent;
        text-decoration: underline;
            }
        </style>
<title>Delete Borrowed Book data</title>
</head>
<body>
<table>
	<tr>
	<td>Borrow Id</td>
	<td>Member Name</td>
	<td>Book Name</td>
	<td>Borrowed Date</td>
	<td>Return status</td>
	</tr>
	<?php
	$i=0;
	while($row = mysql_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["borrowId"]; ?></td>
	<td><?php echo $row["memberName"]; ?></td>
	<td><?php echo $row["book_Name"]; ?></td>
	<td><?php echo $row["borrow_Date"]; ?></td>
	<td><?php echo $row["borrowStatus"]; ?></td>
	<td><a href="delete_bbookprocess.php?borrowId=<?php echo $row["borrowId"]; ?>" class="c2">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
<br>
<br>
 <a href="main_page.html" class="class1">RETURN HOME</a>
</body>
</html>