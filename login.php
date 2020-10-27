<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_SESSION['user'] = [
            'email' => filter_input(INPUT_POST, 'email'),
            'pass'  => filter_input(INPUT_POST, 'password')
        ];
        header('location: restrict.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <style>
        div{
            margin:10px;
        }
    </style>
</head>
<body>
    <div>
        <h3>Login</h3>
    </div>
    <form action="" method="post">
        <div>
            <input type="email" name="email" placeholder="type your e-Mail">
        </div>
        <div>
            <input type="password" name="password" placeholder="type your password">
        </div>
        <div>
            <input type="submit" value="send">
        </div>
    </form>
</body>
</html>