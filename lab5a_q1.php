<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q1</title>
    </head>
    <body>
        <?php
        $name = "Muhammad Haziq bin Mohd Hasreen Aelizay";
        $matric = "AI240105";
        $course = "Information Security";
        $year = "3";
        $address = "Pura Kencana, Batu Pahat, Johor";
        ?>
        <table>
            <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
            </tr>
            <tr>
            <td>Matric</td>
            <td><?php echo "$matric"; ?></td>
            </tr>
            <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
            </tr>
            <tr>
            <td>Year</td>
            <td><?php echo "$year"; ?></td>
            </tr>
            <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
            </tr>
        </table>

    </body>
</html>