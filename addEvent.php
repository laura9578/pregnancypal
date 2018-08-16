<?php
include ('server.php');
$idQuery = "SELECT userid FROM login";
$idResult =mysqli_query($db, $idQuery);
 $row = $idResult->fetch_assoc();
 {
    $userId=$row['userid'];
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	</head>
<body>
	<div class="main">
		<h2>Add Event</h2>
		<form method="get">
			Title:<input type="text" name="title"><br> 
			<br>
			Event:<input type="text" name="event"><br>
			<br>
			Time:<input type= "time" name="time"><br>
			<button class="btn" name="submit" type="submit" >Submit</button>
		</form>
		<?php

		if(isset($_GET['submit']))
		{

		    $getSubmit = $_GET['submit'];
			$_SESSION['submit'] = $getSubmit;
			$day= $_SESSION['dayClicked'];
			$dayClicked = mysqli_real_escape_string($db,$day);
			$month= $_SESSION['calendarMonth'];
			$thisMonth = mysqli_real_escape_string($db,$month);
			$year= $_SESSION['year'];
			$thisYear = mysqli_real_escape_string($db,$year);

			$title = mysqli_real_escape_string($db,$_GET['title']);
			$event=mysqli_real_escape_string($db,$_GET['event']);
			$time=mysqli_real_escape_string($db,$_GET['time']);

			$addEventQuery="INSERT INTO calendar (userid, title,event,eventDate,eventMonth,eventYear,eventTime) VALUES ('$userId', '$title' ,'$event' , '$dayClicked', '$thisMonth', '$thisYear', '$time');";
			$addEventResult=mysqli_query($db, $addEventQuery);
			header("location:calendarEvent.php");   

		}
		?>
		</div>
	</body>
</html>
		
