<?php
$name = isset($_POST['Name']) ? $_POST['Name'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

$conn = new mysqli('localhost', 'root', 'root08', 'user');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert Query
if (isset($_POST['upload'])) {
    $qry = "INSERT INTO USER (name, address, email) VALUES ('$name', '$address', '$email')";
    if (mysqli_query($conn, $qry)) {
        echo "Data inserted successfully.<br>";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
}

// Update Query
if (isset($_POST['update'])) {
    $old_name = isset($_POST['old_name']) ? $_POST['old_name'] : '';
    $qry = "UPDATE USER SET name='$name', address='$address', email='$email' WHERE name='$old_name'";
    if (mysqli_query($conn, $qry)) {
        echo "Data updated successfully.<br>";
    } else {
        echo "Error updating data: " . mysqli_error($conn);
    }
}

// Delete Query
if (isset($_POST['delete'])) {
    $del_name = isset($_POST['Name']) ? $_POST['Name'] : '';
    $qry = "DELETE FROM USER WHERE name='$del_name'";
    if (mysqli_query($conn, $qry)) {
        echo "Data deleted successfully.<br>";
    } else {
        echo "Error deleting data: " . mysqli_error($conn);
    }
}

$sql = "SELECT name, address, email FROM USER";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>All User Data:</h2>";
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . htmlspecialchars($row['name']) . "</td>
                <td>" . htmlspecialchars($row['address']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data available.";
}

$conn->close();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Information</title>
</head>
<body>
    <h1>User Information</h1>
    <form action="front.php" method="post">
        Name: <input type="text" name="Name" required><br><br>
        Address: <input type="text" name="address" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="hidden" name="old_name" value="<?= isset($_POST['Name']) ? $_POST['Name'] : '' ?>">
        <input type="submit" name="upload" value="Submit">
        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
    </form>
</body>
</html>
