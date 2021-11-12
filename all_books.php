<html>
	<head>
		<title>Query All Books from Database</title>
        <style>
        .button {
         display: inline-block;
         border-radius: 3px;
         background-color:#2E76CF;
         border: none;
        color: #FFFFFF;
         text-align: center;
         font-size: 15px;
        padding: 15px;
         width: 200px;
         transition: all 0.5s;
         cursor: pointer;
         margin: 5px;
        }

        .button span {
        cursor: pointer;
        display: inline-block;
         position: relative;
         transition: 0.5s;
            }

        .button span:after {
         content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
        }

        .button:hover span {
         padding-right: 10px;
        }

        .button:hover span:after {
        opacity: 1;
        right: 0;
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
         a.class2 {
        background-color: red;
        box-shadow: 0 5px 0 darkred;
         color: white;
        padding: 0.8em 1.5em;
        position: relative;
        text-decoration: none;
        text-transform: uppercase;
        }

        a.class1:hover {
        background-color: #557846;
        }

        a.class2:hover {
        background-color: #cb0000;
        }

        a:active {
         box-shadow: none;
         top: 5px;
        }
		table {
         border: 1px solid #000000;
         background-color: #EEEEEE;
          width: 100%;
            text-align: center;
            border-collapse: collapse;
            }
        </style>
	</head>
	<body>

		<?

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

		echo "<p>Number of Books Found: ".$num_results."</p>";

        echo "<table><tr><th>ID</th><th>Book_Name</th><th>Author_Name</th><th>Published Year</th><th>Price</th><th>Status</th></tr>";
		for ($i=0; $i < $num_results; $i++)
		{
		$row = mysql_fetch_array($result);
		
         echo "<tr><td>" . $row["ID"]. "</td><td>". $row["BOOK_TITLE"]. "</td><td>" . $row["BOOK_AUTHOR"]. "</td><td>" . $row["Published_year"]. "</td><td>" . $row["PRICE"]. "</td><td>" . $row["COMPLETED"]. "</td></tr>";
		}  
        echo "</table>";
		?>
    <br>
    <button class="button" style="vertical-align:middle" onclick="document.location='insert_book.html'"><span>INSERT MORE BOOKS</span></button>
    <a href="main_page.html" class="class1">RETURN HOME</a>
    <a href="delete_form.php" class="class2">DELETE BOOKS</a> 
	</body>
</html>


