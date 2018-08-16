<?php

$db = mysqli_connect('localhost', 'root', '', 'pregnancy_project');

function updateUserImage($user, $image){
    global $db;

    $username = mysqli_real_escape_string($db, $user);
	$avatar = mysqli_real_escape_string($db, $image);
    $query = "UPDATE login SET `profilepic` = '$avatar' WHERE username = '$username';";  
	mysqli_query($db, $query);
}

function updateUserPassword($user, $password){
    global $db;

    $username = mysqli_real_escape_string($db, $user);
    $query = "UPDATE login SET `password` = '$password' WHERE username = '$username';";  
	mysqli_query($db, $query);
}

?>