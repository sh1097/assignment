<?php

include("db.php");


// Start a session
session_start();
if (isset($_POST)) {
    $_SESSION['customer_name'] = $_POST['username'];
}
// Check if the user is logged in; if not, redirect to the login page
if (!isset($_SESSION["customer_name"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <!-- Add your CSS styles here -->
</head>

</html>


<!DOCTYPE html>
<html>

<head>
    <title>Upload Photos</title>
</head>

<body>
<header>
        <h1>Image Upload Page</h1>
    </header>
    <nav>
        <ul>
            <li><a href="view.php">Home</a></li>
            <li><a href="view.php">Gallery</a></li>
            <li><a href="index.php">About</a></li>
        </ul>
    </nav>
    <div class="container">
    <h1>Upload Multiple Photos</h1>
    <form method="POST" action="imageupload.php"  class="upload-form"enctype="multipart/form-data">
        
        <input type="file" name="photos" required>
        <input type="submit" value="Upload">
    </form>
    </div>
</body>
<style>
        /* Reset default styles */
        body, h1, p {
            margin: 0;
            padding: 0;
        }

        /* Global styles */
        body {
            font-family: Arial, sans-serif;
        }

        /* Header styles */
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            font-size: 24px;
        }

        /* Navigation menu styles */
        nav {
            background-color: #444;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        /* Main content container */
        .container {
            background-image: url('background-image.jpg'); /* Replace with your background image */
            background-size: cover;
            background-position: center;
            padding: 20px;
            min-height: 100vh;
        }

        /* Image upload form styles */
        .upload-form {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            padding: 20px;
        }

        h2 {
            margin-bottom: 20px;
        }

        #image-input {
            display: none;
        }

        label {
            display: inline-block;
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        label:hover {
            background-color: #2980b9;
        }

        #selected-image {
            margin-top: 20px;
            display: none;
            max-width: 100%;
            border-radius: 5px;
        }
    </style>
</html>