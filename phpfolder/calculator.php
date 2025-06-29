<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="POST">
    <label for="num1">Number 1:</label>
    <input type="number" name="num1" required><br><br>

    <label for="num2">Number 2:</label>
    <input type="number" name="num2" required><br><br>

    <!-- Buttons for operations -->
    <input type="submit" name="operation" value="Add">
    <input type="submit" name="operation" value="Subtract">
    <input type="submit" name="operation" value="Multiply">
    <input type="submit" name="operation" value="Divide"><br><br>
</form>

<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the numbers
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    // Get the selected operation from the button clicked
    $operation = $_POST['operation'];

    // Perform the calculation based on the selected operation
    $result = 0;
    switch ($operation) {
        case 'Add':
            $result = $num1 + $num2;
            break;
        case 'Subtract':
            $result = $num1 - $num2;
            break;
        case 'Multiply':
            $result = $num1 * $num2;
            break;
        case 'Divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: Division by zero";
            }
            break;
    }

    // Display the result
    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>
