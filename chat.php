<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat room</title>
	<link rel="stylesheet" type="text/css" href="static/css/style.css">
	<link rel="stylesheet" type="text/css" href="static/css/chat.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">
		var Settings = {
			user: '<?php echo $_SESSION['username']; ?>',
			avatar: '<?php echo $_SESSION['avatar']; ?>'
		}
	</script>
	<script src= "static\js\chat.js"></script>
</head>
<body>
	<div class="main">
		<h2>Chat room</h2>
		<nav class="nav">
 			<a class="nav-link" href="index.php">Home</a>
  			<a class="nav-link" href="quiz.php">Quiz</a>
  			<a class="nav-link" href="pregnancyByWeek.php">Weekly Development</a>
			<a class="nav-link" href="calendar.php">Calendar</a>
			<a class="nav-link" href="healthInfo.php">Food and Medicine Warnings</a>
			<a class="nav-link" href="terminology.php">Terminology</a>
			<a class="nav-link active" href="chat.php">Chat room</a>
			<a class="nav-link" href="profile.php">Profile</a>
            <a class="nav-link" href="index.php?logout='1'" style="color: red;">Logout</a>
		</nav>
	</div>
	<div class="container-fluid d-flex flex-column">
		<div class="row fill d-flex justify-content-md-center">
			<div class="col-sm-2 frame fill d-flex auto-size"style="height:100px;">
			<ul id="active_users" class="active-users">
			</ul>
			</div>
			<div class="col-sm-10 frame fill d-flex auto-size">
				<ul id="chat_window"></ul>
			</div>
			<div class="col-sm-2" style="background:#e0e0de !important"></div>
			<div id="chat-input-container" class="col-sm-10 chat-input">
				<div class="msj-rta1 macro1">                        
					<div class="text text-r fill" style="background:whitesmoke !important">
						<input id="send_message" class="mytext" placeholder="Type a message"/>
					</div> 
					<button type="button" id="chat-button" class="btn btn-success btn-lg">Send</button>
				</div> 		
			</div> 
		</div>
	</div> 
	<div id="dms"></div>
</body>
</html>