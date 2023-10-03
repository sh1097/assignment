<?php
include("header.php");
?><?php
session_start();
include("db.php");


// Handle registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['customer_name'] = $_POST['username'];
    $_SESSION['customer_email'] = $_POST['email'];

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash the password

    // Insert user data into the database
    $sql = "INSERT INTO customers (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("location: login.php");

    } else {
        header("location: signup.php");

        echo "Error: Invalid Record Or Already exixts <a href='index.php'>Try Again</a>";
    }
}

// Close the database connection
$conn->close();
?>
