<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q1</title>
    </head>
    <body>
        <?php
            $name = "Kok Yuin Foong";
            $matricNumber = "AI220265";
            $course = "Bachelor of Computer Science (Multimedia Computing) with Honours";
            $yearOfStudy = 3;
            $address = "60, Lebuh Nipah Sungai Nibong, 11900, Bayan Lepas, Pulau Pinang";
        ?>
        <table>
            <tr>
                <td>Name</td>
                <td><?php echo "$name"; ?></td>
            </tr>
            <tr>
                <td>Matric Number</td>
                <td><?php echo "$matricNumber"; ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo "$course"; ?></td>
            </tr>
            <tr>
                <td>Year of Study</td>
                <td><?php echo "$yearOfStudy"; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo "$address"; ?></td>
            </tr>
        </table>
    </body>
</html>
