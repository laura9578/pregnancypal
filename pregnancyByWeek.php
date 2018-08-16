<?php
include('weeksPregnantMath.php');
$devQuery = "SELECT babydev, mumsdev FROM pregnancy_by_week WHERE id LIKE '". intval($weeksPregnant).substr(($file_extension),0,0)."' " ;
$term = mysqli_query($db, $devQuery);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Weekly development</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="main">
		<h2>Pregnancy Development by Week</h2>
		<nav class="nav">
		<img src =/registration/Images/Logo.jpg width='150px' height='150px' float='left' style= 'position:absolute; top:0; right:0;' />
 			<a class="nav-link" href="index.php">Home</a>
  			<a class="nav-link" href="profile.php">Profile</a>
  			<a class="nav-link active" href="pregnancyByWeek.php">Weekly Development</a>
			<a class="nav-link" href="calendar.php">Calendar</a>
			<a class="nav-link" href="healthInfo.php">Food and Medicine Warnings</a>
			<a class="nav-link" href="terminology.php">Terminology</a>
			<a class="nav-link" href="chat.php">Chatroom</a>
            <a class="nav-link" href="index.php?logout='1'" style="color: red;">Logout</a>
		</nav>
	</div>
	<img class="reseize" src= "/registration/Images/5Weeks.jpg" alt="5weeks"> 
	<?php 
		if ($term->num_rows > 0) {
			echo "<table class='table table-bordered'><tr><th>Babys Development</th></tr>";
				$row = $term->fetch_assoc();
				echo "<tr><td>". $row['babydev'] . "</td></tr>";
				echo "<br"; 
				echo "<tr><th>Mums Development</th></tr>";
				echo "<tr><td>". $row['mumsdev'] . "</td></tr>";
			 echo "</table>";

			 $weeks = "SELECT id FROM pregnancy_by_week";
			$result = mysqli_query($db,$weeks);

			echo "<select name='id'>";
			while ($row = mysqli_fetch_array($result)) {
			echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
			}
			echo "</select>";
			}

	?>	
</body>
</html>