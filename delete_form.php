<?php
@ $db = mysql_pconnect("sql304.epizy.com","epiz_27119428","QNtdHT31Hzu");

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}
mysql_select_db("epiz_27119428_BOOKLIB");

$query = "select * from LIBRARY";

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
      

<title>Delete Book data</title>
</head>
<body>
<table>
	<tr>
	<td>Book Id</td>
	<td>Book Name</td>
	<td>Author's Name</td>
	<td>Published Year</td>
	<td>Price</td>
	<td>Completion status</td>
	</tr>
	<?php
	$i=0;
	while($row = mysql_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["ID"]; ?></td>
	<td><?php echo $row["BOOK_TITLE"]; ?></td>
	<td><?php echo $row["BOOK_AUTHOR"]; ?></td>
	<td><?php echo $row["Published_year"]; ?></td>
	<td><?php echo $row["PRICE"]; ?></td>
	<td><?php echo $row["COMPLETED"]; ?></td>
	<td><a href="delete_process.php?ID=<?php echo $row["ID"]; ?>" class="c2">Delete</a></td>
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