<?php
    session_start();
    include("db.php");
    $conn = db_con();
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        $matric = $_GET['matric'];

        if($_SESSION['matric'] == $matric){
            echo "<script>alert('You cannot delete your own account!');</script>";
            echo "<script>
                    window.location.href = 'display.php';
                  </script>";
            exit;
        }

        $sql = "DELETE FROM users WHERE matric = ?";
        
        $stmt = $conn->prepare($sql);
    
        if ($stmt) {

            $stmt->bind_param("s", $matric);
            $result = $stmt->execute();
            
            if ($result) {
                echo "<script>alert('" .$matric. " has been deleted');</script>";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
            
            echo "<script>
                    window.location.href = 'display.php';
                  </script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    
    $conn->close();
?>