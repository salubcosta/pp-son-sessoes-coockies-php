<?php
    session_start();
    $user = $_SESSION['user'] ?? null;
    if(!$user){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page restrict</title>
</head>
<body>
    <div>
        <h1>Page restrict!</h1>
    </div>
    <div>
        <label>Hello <?=$_SESSION['user']['email'];?></label>
    </div>
    <div>
        <label>Logout -> Click <a href="logout.php">here</a></label>
    </div>
</body>
</html>