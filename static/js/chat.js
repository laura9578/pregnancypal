var websocket_server;
jQuery(function($){
    websocket_server = new WebSocket("ws://localhost:8080");
    websocket_server.onopen = function(e) {
        websocket_server.send(
            JSON.stringify(
                {
                'user': Settings.user,
                'type': 'connection',
                'avatar': Settings.avatar
                })
        );
    }
    websocket_server.onerror = function(e) {
        // Errorhandling
    }
    websocket_server.onmessage = function(e){
        var message = JSON.parse(e.data);
        if (message.type == 'chatroom') {
            insertChat(message.user, message.text, message.date, message.avatar)
        }
        if(message.type == 'connection'){
            activeUsers(message.online)
            disconnectActiveChats(message.online)
        }
        if(message.type == 'dm'){
            insertDmChat(message.user, message.userto, message.text, message.date)
        }
        
    }
    // Events
    $('#send_message').on('keydown',function(e){
        if (e.which == 13){
            var text = $(this).val();
            websocket_server.send(
                JSON.stringify(
                    {
                    'text':text,
                    'user': Settings.user,
                    'date': new Date().toLocaleString(),
                    'type': 'chatroom',
                    'avatar': Settings.avatar
                    })
            );

            $(this).val('');
        }
    });

    $('#chat-button').on('click',function(e){
        var text = $('#send_message').val();
        websocket_server.send(
            JSON.stringify(
                {
                'text':text,
                'user': Settings.user,
                'date': new Date().toLocaleString(),
                'type': 'chatroom',
                'avatar': Settings.avatar
                })
        );

        $('#send_message').val('');
    });

    window.onresize = function(event) {
        setHeight();
    };
   
    setHeight();
});

function activeUsers(users) {
    $("#active_users").html('');
    var content = '<li><h5>Active Users</h5></li><li><div><img src="images/users/' + Settings.avatar + '" class="img-thumbnail img-ex-small"> me</div></li>'
    $("#active_users").append(content);
    for (var k in users) {
        if (k != Settings.user) {
            content = '<li><div><img src="images/users/' + users[k] + '" class="img-thumbnail img-ex-small"> ' +
                '<a onclick="LoadChat(\'' + k + '\');" data-toggle="tooltip" data-placement="bottom" title="Click user name to send a direct message" class="user-dm-link">' + k + '</a></div></li>'
            $("#active_users").append(content);
        }
    }

    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
}

function setHeight(){
    var height =  (window.innerHeight - 240 - 35) + 'px'
    var elements = document.getElementsByClassName('auto-size')
    var count;
    for (count=0; count <elements.length; count++)
    {
        elements[count].style.height = height
    }
}

function insertChat(user, text, date, avatar){
    var control = "";
    if (user == Settings.user){
        control = '<li style="width:100%">' +
                        '<div class="msj macro">' +
                            '<figure class="user-avatar-left">'+
                                '<img src="images/users/' + Settings.avatar +'" class="img-thumbnail img-small">' +
                                '<figcaption class="user-avatar-caption-left">me</figcaption>' + 
                            '</figure>' +
                            '<div class="text text-l">' +
                                '<p>'+ text +'</p>' +
                                '<p><small>'+ date +'</small></p>' +
                            '</div>' +
                        '</div>' +
                    '</li>';                    
    }else{
        control = '<li style="width:100%;">' +
                        '<div class="msj-rta macro">' +
                            '<div class="text text-r">' +
                                '<p>'+text+'</p>' +
                                '<p><small>'+ date +'</small></p>' +
                            '</div>' +
                            '<figure class="user-avatar-right">'+
                                '<img src="images/users/' + avatar +'" class="img-thumbnail img-small">' +
                                '<figcaption class="user-avatar-caption-right">' + who + '</figcaption>' + 
                            '</figure>' +                               
                  '</li>';
    }                      
    $("#chat_window").append(control).scrollTop($("#chat_window").prop('scrollHeight'));
}


function insertDmChat(who, whoto, text, date){
    var id = "";
    var control = "";
    if(who == Settings.user)
    {
        LoadChat(whoto);
        id='#' + whoto.trim() +'-dm-content';
        control = '<p class="dm-chat-me">Me: ' + text + '</p>'
    }
    else if (whoto == Settings.user)
    {
        LoadChat(who);
        id='#' + who.trim() +'-dm-content';
        control = '<p class="dm-chat-from">' + who + ': ' + text + '</p>'
    }

    $(id).append(control).scrollTop($(id).prop('scrollHeight'));
}

function LoadChat(user){
    var elements = document.getElementsByClassName('chat-box');
    var chat_box_id = user.trim() + '-dm-chat-box';
    var count;
    for (count=0; count <elements.length; count++)
    {
        if(elements[count].id == chat_box_id)
        {
            $("#"+ user.trim() +"-dm-header").removeClass("hide");
            $("#"+ user.trim() +"-dm-content").removeClass("hide");
            $("#"+ user.trim() +"-dm-closed").addClass("hide");
            return;
        }
    }

    var position = (15 + (elements.length * 250)) + 'px';

    var control = '<div id="'+ user.trim() +'-dm-chat-box" class="chat-box" style=right:'+position+'>' +
    '<div id="'+ user.trim() +'-dm-closed" class="chat-closed hide"><p class="dm-name">'+user+'</p>' +
    '<button id="'+ user.trim() +'-dm-closed-button" class=dm-close-button close type="button">&times;</button></div>' +
    '<div id="'+ user.trim() +'-dm-header" class="chat-header"><div class="box"></div><p class="dm-name">'+user+'</p>' +
    '<button id="'+ user.trim() +'-dm-header-closed-button" class=dm-close-button close type="button">&times;</button></div>' +
    '<div id="'+ user.trim() +'-dm-content" class="chat-content">' +
    '<input id="'+ user.trim() +'-send_message_dm" class="dminput" placeholder="Type a message" style="position:fixed;bottom:0;right:'+position+'"/>'
    '</div>'

    $("#dms").append(control).scrollTop($("#dms").prop('scrollHeight'));

    $("#"+ user.trim() +"-dm-closed-button").on("click",function(e){
        $("#"+ user.trim() +"-dm-chat-box").remove();
    });
    $("#"+ user.trim() +"-dm-header-closed-button").on("click",function(e){
        $("#"+ user.trim() +"-dm-chat-box").remove();
    });

    $("#"+ user.trim() +"-dm-closed").on("click",function(e){
        $("#"+ user.trim() +"-dm-header").removeClass("hide");
        $("#"+ user.trim() +"-dm-content").removeClass("hide");
        $(this).addClass("hide");
    });

    $("#"+ user.trim() +"-dm-header").on("click",function(e){
        $("#"+ user.trim() +"-dm-header").addClass("hide");
        $("#"+ user.trim() +"-dm-content").addClass("hide");
        $("#"+ user.trim() +"-dm-closed").removeClass("hide");
    });

    $("#"+ user.trim() +"-send_message_dm").on('keydown',function(e){
        if (e.which == 13){
            var text = $(this).val();
            websocket_server.send(
                JSON.stringify(
                    {
                    'text':text,
                    'user': Settings.user,
                    'date': new Date().toLocaleString(),
                    'type': 'dm',
                    'to': user
                    })
            );

            $(this).val('');
        }
    });
}

function getUsersIamDirectMessaging()
{
    var users =[]
    var elements = document.getElementsByClassName('chat-box');
    var count;
    for (count=0; count <elements.length; count++)
    {
        var currentID = elements[count].id
        var user = currentID.replace("-dm-chat-box", "");
        users.push(user)
    }

    return users;
}

function disconnectActiveChats(activeUsers)
{
    var currentChatUsers = getUsersIamDirectMessaging();
    var count;
    for (count=0; count < currentChatUsers.length; count++)
    {
        var user = currentChatUsers[count]
        if (!(user in activeUsers))
        {
            id='#' + user.trim() +'-dm-content';
            control = '<p class="dm-warning">User '+ user + ' is offline</p>'
            $(id).append(control).scrollTop($(id).prop('scrollHeight'));
            $("#"+ user.trim() +"-send_message_dm").attr('disabled', 'disabled');
        }
    }
}
