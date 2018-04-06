<?php include('server.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chatroom</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <link rel="stylesheet" type="text/css" href="chatroom.css">
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
    <br>
    <div class="container" style="padding-left: 0px;">
    <div class="row chat-window col-lg-5 col-md-3" id="chat_window_1" style="padding-left: 0px;">
        <div class="col-lg-12 col-lg-12">
        	<div class="panel panel-default">
                <div class="panel-heading top-bar">
                    <div class="col-lg-8 col-lg-8">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat Window</h3>
                    </div>
                  <!--  <div class="col-ld-4 col-xs-4" style="text-align: right;">
                        <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                        <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>
                    </div> !-->
                    <div class="panel-body msg_container_base">
                        <div class="row msg_container base_sent">
                            <div class="col-md-10 col-xs-10">
                                <div class="messages msg_sent"  id="chatroom" >
                                <ul></ul>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                            </div>
                        </div>
                        <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar">
                            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_receive" id="msg_received">
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="panel-footer">
                    <div class="input-group">
                        <input id="messages" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                        <span class="input-group-btn">
                        <button class="btn btn-primary btn-sm" id="btn-chat">Send</button>
                        </span>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    var Userinfo = { username: '<?php echo $_SESSION['username']; ?>'}
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
            if(setUser(thisUser)== Userinfo.username)
            {
            $("#chatroom").append(chat_message)
            }
            else
            $("#msg_received").append(chat_message)
            
        }
        function setUser(user)
        {
            var thisUser = "";
            if(user==Userinfo.username)
            {
                thisUser = Userinfo.username
            }
        }
        $("#messages").on("keydown",function(event)
            { 
                if(event.which==13)
                {
                    var text = $(this).val()
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