<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>User name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Rating</td>
				<td><input type="number" name="rating"></td>
			</tr>
			<tr> 
				<td>Review</td>
				<td><input type="text" name="review"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id = $_POST['name'];
		$rating = $_POST['rating'];
		$review = $_POST['review'];
		date_default_timezone_set("Asia/Dhaka");
		$date =  date('d-m-Y');
		//echo $date;
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO reviewtab(id,modifydate,rating,review) VALUES('$id','$date','$rating','$review')");
		// Show message when user added
		echo "User added successfully.";
		echo "<a href='moviesingle.php'>Go Back</a>";
	}
	?>
</body>
</html>
