<?php
    session_start();
    if(!isset($_SESSION['matric'])){
        header("Location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div class="topBar">
        <h1>Home</h1>
        <a href="login.php">Logout</a>
    </div>
    <br>
    <div class="leftPad">
    <table>
        <tr>
            <th>Matric</th>
            <th>Name</th>
            <th>Level</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
            include("db.php");
            $conn = db_con();

            $sql = "SELECT * FROM users";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" .$row["matric"]. "</td>";
                    echo "<td>" .$row["name"]. "</td>";
                    echo "<td>" .$row["role"]. "</td>";
                    echo "<td> <a href='updateForm.php?matric=" . $row['matric'] . "'>Update</a></td>";
                    echo "<td> <a href='delete.php?matric=" .$row['matric']. "'>Delete</a></td>";
                    echo "</tr>";
                }
              } else {
                echo "0 results";
              }
              $conn->close();
        ?>
    </table>
    </div>

</body>
</html>