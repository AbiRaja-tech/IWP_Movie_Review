<?php

@include 'config1.php';
session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<title>Form Reviews</title>
    <link rel="stylesheet" href="./style_rm.css">
</head>
<body>
	<div class="wrapper">
		<h3>Rate the Movie!!!!</h3>
		<form action="ratemovie.php" method="post">
			<div class="rating">
				<input type="number" name="rating" hidden>
				<i class='bx bx-star star' id ="star1" style="--i: 0;"></i>
				<i class='bx bx-star star' style="--i: 1;"></i>
				<i class='bx bx-star star' style="--i: 2;"></i>
				<i class='bx bx-star star' style="--i: 3;"></i>
				<i class='bx bx-star star' style="--i: 4;"></i>
			</div>
			<textarea name="opinion" cols="30" rows="5" placeholder="Your opinion..."></textarea>
			<div class="btn-group">
				<button type="submit" class="btn submit" onclick="disp(event)" name="Submit">Submit</button>
				<a style="text-decoration:none" class="btn cancel" href="./moviesingle.php">Go Back</a>
			</div>
		</form>
		<h3 id="result"></h3>
	</div>
    <script src="./script_rm.js"></script> 
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id = $_SESSION['user_name'];
		$username = $_SESSION['user_name'];
		$rating = $_POST['rating'];
		$review = $_POST['opinion'];
		date_default_timezone_set("Asia/Dhaka");
		$date =  date('d-m-Y');
		//echo $date;
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO reviewtab(id,moddate,username,rating,review) VALUES('$id','$date','$username','$rating','$review')");
		session_destroy();
		// Show message when user added
		//echo "<h3>Review Added Successfully!!!!</h3>";
		//echo '<div class="btn-group"><button class="btn cancel">Go Back</div>';
	}
	?>
</body>
</html>