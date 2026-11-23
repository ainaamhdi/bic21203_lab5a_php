<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>

    <?php
        function calculateArea($width, $height) {
            $area = $width * $height;
            return $area;
        }

        $width = 4;
        $height = 2;

        $result = calculateArea($width, $height);
    ?>

    <p>
        The area of a rectangle with a width of
        <?php echo $width; ?>
        and
        <?php echo $height; ?>
        is
        <?php echo $result; ?>
    </p>

</body>
</html>

