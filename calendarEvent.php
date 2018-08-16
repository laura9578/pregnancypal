<?php
include('server.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
	<link rel="stylesheet" type="text/css" href="static/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	</head>
<body>
	<div class="main">
		<h2>Your Events</h2>

		<nav class="nav">
		<img src =/registration/Images/Logo.jpg width='150px' height='150px' float='left' style= 'position:absolute; top:0; right:0;' />
 			<a class="nav-link" href="index.php">Home</a>
  			<a class="nav-link" href="profile.php">Profile</a>
  			<a class="nav-link" href="pregnancyByWeek.php">Weekly Development</a>
			<a class="nav-link active" href="calendar.php">Calendar</a>
			<a class="nav-link" href="healthInfo.php">Food and Medicine Warnings</a>
			<a class="nav-link" href="terminology.php">Terminology</a>
			<a class="nav-link" href="chat.php">Chatroom</a>
            <a class="nav-link" href="index.php?logout='1'" style="color: red;">Logout</a>
		</nav>
	</div>
<?php


if(isset($_GET['dayClicked'])|| isset($_SESSION['submit']))

{
	//$_SESSION['username'] = $username;
	$idQuery = "SELECT userid FROM login WHERE username LIKE '".$_SESSION['username']."' ";
	$idResult =mysqli_query($db, $idQuery);
	$row = $idResult->fetch_assoc();
	{
		$userId=$row['userid'];
	}


	$daySelected = $_GET['dayClicked'];
	$_SESSION['dayClicked'] = $daySelected;
	$_SESSION['userid'] = $userId;
	$day = mysqli_real_escape_string($db, $daySelected);
	$dayQuery = "SELECT title,event,eventTime FROM calendar where eventDate like '%$day%' AND userid like '%$userId%';" ;
	$results = mysqli_query($db, $dayQuery);

	var_dump($userId);
	var_dump($results);

		if ($results->num_rows > 0) {
		
		$row = $results->fetch_assoc() ;
		echo "<li>";
			echo "<ul>".$row['title']. "<br>" .$row['event']."</ul>"  ;
			echo "</li>";
		 
		 echo '<br>';
		 echo "<a href='addEvent.php'> Add Event </a>";
	}
	
	else
	{
		echo "<h3>You have no events on this day</h3>";
		echo "<a href ='addEvent.php'> Add Event </a>";
	}
	

}
			
?>


	</body>
</html>
