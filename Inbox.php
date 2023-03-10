<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    


<?php
include_once 'database.php';
require_once("header.php");
require_once("tiles.php");
?>
<h2 align="center">INBOX SECTION</h2>

<?php

$sql = "SELECT * FROM users;";
$result = mysqli_query($mysqli,$sql);

echo"<br>";

while ($row=mysqli_fetch_assoc($result)){
    echo  "<b>Sender:</b>\t".$row['sender']."<br/>"."<b>Subject:</b>\t" .$row['subject']."<br/>"."<b>Message:</b>\t".$row['message']."<br/><br/>";
    echo"----------------------------------------------------------------------------------------------------------------------------------------";
    echo"<br>";
}

?>

</body>
</html>