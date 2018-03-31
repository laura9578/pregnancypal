<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Health Information</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="main">
		<h2>Food and Medicine Warnings</h2>
		<nav class="nav">
 			<a class="nav-link" href="index.php">Home</a>
  			<a class="nav-link" href="quiz.php">Quiz</a>
  			<a class="nav-link" href="pregnancyByWeek.php">Weekly Development</a>
			<a class="nav-link" href="calendar.php">Calendar</a>
			<a class="nav-link" href="healthInfo.php">Food and Medicine Warnings</a>
			<a class="nav-link active" href="terminology.php">Terminology</a>
            <a class="nav-link" href="index.php?logout='1'" style="color: red;">Logout</a>
		</nav>
	</div>
	<form class="form-inline">
      <input class="form-control" name="search-term" type="search" placeholder="Search" aria-label="Search">
      <button class="btn" type="submit">Search</button>
    </form>
	<?php 
	// Check if the searh has been done and set the right query
	if (isset($_GET['search-term'])) {
		$search = mysqli_real_escape_string($db, $_GET['search-term']);
		$foodQuery = "SELECT food, foodWarning FROM food_warning_table where food like '%$search%' or foodWarning like '%$search%';" ;
		$medicineQuery = "SELECT medicine, medicineWarning FROM medicine_warning_table where medicine like '%$search%' or medicineWarning like '%$search%';" ;

		echo "<h2>Results for \"<b>$search</b>\"</h2>";
		
	} else {
		$foodQuery = "SELECT food, foodWarning FROM food_warning_table" ;
		$medicineQuery = "SELECT medicine, medicineWarning FROM medicine_warning_table" ;
	}
	
	$food_results =  mysqli_query($db, $foodQuery);
	$medicine_results =  mysqli_query($db, $medicineQuery);

	echo "<br>";
	// Setup food table
	echo "<table class='table table-bordered'><tr><th style='width: 33%;'>Food</th><th style='width: 66%;'>Warning</th></tr>";
	if ($food_results->num_rows > 0) {
		while($row = $food_results->fetch_assoc()) { 
			echo "<tr><td>". $row['food'] . "</td><td>". $row['foodWarning'] . "</td></tr>";
		 } 
	}
	echo "</table>";

	echo "<br>";

	// Setup medicine table
	echo "<table class='table table-bordered'><tr><th style='width: 33%;'>Medicine</th><th style='width: 66%;'>Warning</th></tr>";
	if ($medicine_results->num_rows > 0) {
		while($row = $medicine_results->fetch_assoc()) { 
			echo "<tr><td>". $row['medicine'] . "</td><td>". $row['medicineWarning'] . "</td></tr>";
		}
	}
	echo "</table>";

	?>	

</body>
</html>