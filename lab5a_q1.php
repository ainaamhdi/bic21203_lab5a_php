<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>

    <?php
        $name = "Nur Ainaa Atikah";
        $matric = "AI240019";
        $course = "Information Security";
        $year = "3";
        $address = "Kolej Kediaman Taman U";
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>

        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric; ?></td>
        </tr>

        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>

        <tr>
            <td>Year of Study</td>
            <td><?php echo $year; ?></td>
        </tr>

        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>

</body>
</html>

