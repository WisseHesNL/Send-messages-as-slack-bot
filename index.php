<?php
require("config.php");

if (isset($_POST['password'])) {
    if ($_POST['password'] == $pass){
$channel = $_POST['channel'];
$username = $_POST['username'];
$message = $_POST['message'];
$emoji = $_POST['emoji'];

exec ('curl -X POST --data-urlencode "payload={\"channel\": \"'.$channel.'\", \"username\": \"'.$username.'\", \"text\": \"'.$message.'\", \"icon_emoji\": \"'.$emoji.'\"}" '.$webhook.'');
    }

} elseif (isset($_POST['password'])) {
    echo "bad password";
    #die();
}

?>

<!DOCTYPE html>
<html>
<head>
    <style>
    body{
        background-color: lightgray;
        font-family: arial;
        
    }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Slack Bot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <center>
    <form action="index.php" method="post" >
        <label for="channel">Channel</label><br>
        <input type="text" name="channel" placeholder="channel"><br>
        <label for="username">Username</label><br>
        <input type="text" name="username" placeholder="username"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="password"><br>
        <label for="emoji">Emoji Profile Picture</label><br>
        <input type="text" name="emoji" placeholder="emoji profile picture"><br>
        <label for="message">Message</label><br>
        <input type="long-text" name="message" placeholder="message"><br>
        <input type="submit" ><br>
        </center>


    </form>
</body>
</html>