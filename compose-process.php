<?php
$mysqli = require __DIR__. "/database.php";
if($_POST["submit"]== "send"){
    $sql = "INSERT INTO users (sender, reciever, subject, message,status)VALUES (?, ?, ?,?,?)";
$stmt = $mysqli->stmt_init();
$stmt->prepare($sql);
$stmt->bind_param("sssss",
                  $_POST["sender"],
                  $_POST["reciever"],
                  $_POST["subject"],
                  $_POST["message"],
                  $_POST["submit"]);   
if ($stmt->execute())
{
    echo "Email Sent Succesfully";
    exit;
} 
else
{
    echo "Failed";
}
}
elseif($_POST["submit"] == "save") {
    $sql = "INSERT INTO users (sender, reciever, subject, message,status)
        VALUES (?, ?, ?,?,?)";
        $stmt = $mysqli->stmt_init();
        $stmt->prepare($sql);
$stmt->bind_param("sssss",
                  $_POST["sender"],
                  $_POST["reciever"],
                  $_POST["subject"],
                  $_POST["message"],
                  $_POST["submit"]);    
if ($stmt->execute()) 
{
    echo "Email Sent Succesfully";
    exit;
} 
else 
{
   echo "Failed";
}
}
else
{
    echo "Failed";
}