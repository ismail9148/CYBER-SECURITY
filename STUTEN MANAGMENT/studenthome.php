<?php

if(!isset($_SESSION['username']))

    {
        header("location:logion.php");
    }

    elseif($_SESSION['usertype']=='admin')
    
 {
        header("location:logion.php");
 }


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
</head>
<body>
    
<h1>Student home</h1>

<a href="logout.php">logout</a>

</body>
</html>