<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
}
?>
