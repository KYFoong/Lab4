<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <h1 class="topBar">Login</h1> <br><br>
    <form action="authenticate.php" method="post">
        <label for="matric">Matric</label>
        <input type="text" name="matric" id="matric" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" name="submit" value="Login">
        <br>
        <p style="text-align: center;"><a href="registration.php">Register</a> here if you have not</p>
    </form>
</body>
</html>