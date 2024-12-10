<?php
    session_start();
    include("db.php");
    $conn = db_con();

    $matric = $name = $role = "";
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        $matric = $conn->real_escape_string($_GET['matric']);

        $sql = "SELECT * FROM users WHERE matric = ?";
        
        $stmt = $conn->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("s", $matric);
            $result = $stmt->execute();
            $result = $stmt->get_result();

            if ($row = $result->fetch_assoc()) {
                $name = $row['name']; 
                $role = $row['role']; 
            }

            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>
<body>
    <h1 class="topBar">Update User</h1><br><br>
    <form action="update.php" method="post">
        <label for="matric">Matric</label>
        <input type="text" name="matric" id="matric" value="<?php echo $matric; ?>" required><br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>" required><br>
        <label for="role">Access Level</label>
        <input type="text" name="role" id="role" value="<?php echo $role; ?>" required><br>
        <input type="submit" name="submit" value="Update">
        <a href="display.php" style="text-align: center;">Cancel</a>
    </form>

</body>
</html>