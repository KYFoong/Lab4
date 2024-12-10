<?php
    session_start();
    include("db.php");
    $conn = db_con();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $matric = $_POST['matric'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $password = password_hash($password, PASSWORD_DEFAULT);
    
        $sql = "INSERT INTO users (matric, name, password, role)
                VALUES (?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
    
        if ($stmt) {
            
            $stmt->bind_param("ssss", $matric, $name, $password, $role);
            $result = $stmt->execute();
            
            if ($result) {
                echo "<script>alert('Account created successfully!');</script>";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
            echo "<script>
                    window.location.href = 'login.php';
                  </script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    $conn->close();
?>