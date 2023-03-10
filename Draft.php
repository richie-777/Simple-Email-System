<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draft</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<?php 
require_once("header.php"); 
require_once("tiles.php");
?>
    <h2 align="center">ALL DRAFT</h2>
<?php
include_once 'database.php';
?>
<?php
$sql = "SELECT sender,reciever,subject,message FROM users Where status='save'; ";
$result = mysqli_query($mysqli,$sql);
while ($row = mysqli_fetch_assoc($result)) 
{
    echo "<tr> "; 
    foreach ($row as $field => $value) 
    {
        echo "<b>Content:</b><td> ". $value."</td><br>";
    }
    echo "</tr><br>";  
    echo "-------------------------------------------------------------------------------------------------------------<br>";
} 
    echo "<br></table>";
?>
</body>
</html>
