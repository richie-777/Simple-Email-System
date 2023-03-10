<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>  
<?php
include_once 'database.php';
?>
<?php
$sql = "SELECT reciever, message FROM users Where status='sent';"; 
$result = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_assoc($result)) 
{
    echo "<tr> "; 
    foreach ($row as $field => $value) 
    {
        echo "<b>Content:</b><td> ". $value."</td><br><br>";
    }
    echo "</tr><br>";   
} 
    echo "</table><br>";

?>
</body>
</html>