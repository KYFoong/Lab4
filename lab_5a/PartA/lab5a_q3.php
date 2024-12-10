<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q3</title>
    </head>
    <body>
        <?php
            function calculateArea($width, $height){
                return $width * $height;
            }

            $width = 5;
            $height = 2;
            $area = calculateArea(5, 2);

            echo "<b>The area of rectangle with a width $width and height $height is $area<b>"
        ?>
    </body>
</html>
