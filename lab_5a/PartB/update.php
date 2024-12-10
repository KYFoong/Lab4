<?php
    session_start();
    include("db.php");
    $conn = db_con();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $matric = $_POST['matric'];
        $name = $_POST['name'];
        $role = $_POST['role'];

        $sql = "UPDATE users SET name=?, role=? WHERE matric=?";

        $stmt = $conn->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("sss", $name, $role, $matric);
            $result = $stmt->execute();
            
            if ($result) {
                echo "User Updated Successful";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
            return header("Location: display.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }

    $conn->close();
?>