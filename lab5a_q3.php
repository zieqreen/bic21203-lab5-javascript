<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <form method="post" action="">
        <label for="width">Width:</label>
        <input type="number" name="width" id="width" step="any" required><br><br>

        <label for="length">Length:</label>
        <input type="number" name="length" id="length" step="any" required><br><br>

        <input type="submit" value="Calculate Area">
    </form>

    <br>

    <?php
        function calculateArea($width, $length) {
            return $width * $length;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $width = $_POST["width"];
            $length = $_POST["length"];
            $area = calculateArea($width, $length);

            echo "<strong>The area of a rectangle with a width of $width and $length is $area</strong>";
        }
    ?>
</body>
</html>