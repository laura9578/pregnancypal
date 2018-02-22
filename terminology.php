<?php include('server.php') ?>
<?php
$termQuery = "SELECT term, definition FROM terminology" ;
$term = mysqli_query($db, $termQuery);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Terminology</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="main">
		<h2>Terminology Page</h2>
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
	<?php 
	if ($term->num_rows > 0) {
		echo "<table class='table table-bordered'><tr><th>Term</th><th>Definition</th></tr>";
			while($row = $term->fetch_assoc()) { 
			echo "<tr><td>". $row['term'] . "</td><td>". $row['definition'] . "</td></tr>";
		 } 
		 echo "</table>";
		}
		 ?>	
</body>
</html>