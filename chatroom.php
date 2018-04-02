<?php include('server.php'); ?>
</server><!DOCTYPE html>
<html>
<head>
	<title>Chatroom</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="main">
		<h2>Chatroom</h2>
		<nav class="nav">
 			<a class="nav-link" href="index.php">Home</a>
  			<a class="nav-link" href="quiz.php">Quiz</a>
  			<a class="nav-link" href="pregnancyByWeek.php">Weekly Development</a>
			<a class="nav-link" href="calendar.php">Calendar</a>
			<a class="nav-link" href="healthInfo.php">Food and Medicine Warnings</a>
			<a class="nav-link" href="terminology.php">Terminology</a>
            <a class="nav-link active" href="chatroom.php">Chatroom</a>
            <a class="nav-link" href="index.php?logout='1'" style="color: red;">Logout</a>
		</nav>
	</div>
    <div>
    <ul id="chatroom"></ul>
    <input id="messages" class="mytext"/>
    </div>

    <script>
    jQuery(function($)
    {
        var websocket_server = new WebSocket("ws://localhost:8081/")

        websocket_server.onopen = function(event)
        {

        }

        websocket_server.onerror = function(event)
        {
            
        }

        websocket_server.onmessage = function(event)
        {
            var chat_message = "<li>"+ event.data + "</li>"
            $("#chatroom").append(chat_message)
            
        }
        $("#messages").on("keydown",function(event)
            { 
                if(event.which==13)
                {
                    var text = $(this).val()
                    var Userinfo = { username: '<?php echo $_SESSION['username']; ?>'}
                    websocket_server.send(
                        JSON.stringify(
                            { 
                            'user': Userinfo.username,
                            'message': text
                            })
                        );
                    $(this).val('');
                }
            })
        } );

    </script>
</body>
</html>