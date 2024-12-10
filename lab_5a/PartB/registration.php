<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Register</title>
    </head>
    <body>
        <h1 class="topBar">Register</h1><br><br>
        <form action="upload.php" method="post">
            <label for="matric">Matric</label>
            <input type="text" name="matric" required>
            <label for="name">Name</label>
            <input type="text" name="name" required>
            <label for="password">Password</label>
            <input type="password" name="password" required>
            <label for="role">Role</label>
            <select id="role" name="role">
                <option>Please select</option>
                <option value="lecturer">lecturer</option>
                <option value="student">student</option>
            </select><br>
            <input type="submit">
            <br>
            <p style="text-align: center;"><a href="login.php">Login</a> here if you already have</p>
        </form>
    </body>
</html>