<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

	<div class="jumbotron">
		<nav class="nav">
 			<a class="nav-link active" href="index.php">Home</a>
  			<a class="nav-link" href="quiz.php">Quiz</a>
  			<a class="nav-link" href="pregnancyByWeek.php">Weekly Development</a>
			<a class="nav-link" href="calendar.php">Calendar</a>
			<a class="nav-link" href="healthInfo.php">Food and Medicine Warnings</a>
			<a class="nav-link" href="terminology.php">Terminology</a>
            <a class="nav-link" href="index.php?logout='1'" style="color: red;">Logout</a>
		</nav>
  		<h1 class="display-4">Hello <?php echo $_SESSION['username']; ?>, Welcome to week 5</h1>
  		<p class="lead">Your baby is still very very small</p>
	</div>
    <!--Influenced by bootstrap code !-->
	<div id="carouselHomePage" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
	<h2>Click here to take the quiz</h2>
     <a href="quiz.php"> <img class="d-block w-100" src="https://i.ytimg.com/vi/Ngi7zaS5ShM/maxresdefault.jpg" ></a>
    </div>
    <div class="carousel-item">
	<h2> Click here to see your weekly development </h2>
     <a href="pregnancyByWeek.php"> <img class="d-block w-100" src="https://d1lhri34tovdcj.cloudfront.net/prod/mom365/images/features/pregnancy-category-banner-56ef9e02-c30b-4770-b5d9-b12d77ff33b7.png" ></a>
    </div>
    <div class="carousel-item">
	<h2> Click here for foods and medicines that can be dangerous during pregnancy </h2>
     <a href="healthInfo.php"> <img class="d-block w-100" src="https://www.plexusrenewedhealth.com/s/img/emotionheader.png?1461624369.800px.440px"></a>
    </div>
  </div>
</div>
		
</body>
</html>