<?php
    session_start();
    include("db.php");
    $conn = db_con();

    $matric = $conn->real_escape_string($_POST['matric']);
    $password = $conn->real_escape_string($_POST['password']);

    if (!empty($matric) && !empty($password)) {
        $sql = "SELECT * FROM users WHERE matric = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $matric);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            
            $stmt->close();

            if($user){
                if(password_verify($password, $user['password'])){
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['matric'] = $user['matric'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['role'] = $user['role'];
                    header("Location: display.php");
                }else {
                    header("Location: loginFailed.php");
                }
            } else {
                header("Location: loginFailed.php");
            }
        }
    }
?>