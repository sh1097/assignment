<?php
include("header.php");
?><?php


// Handle login form submission
// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Specify the directory where you want to store uploaded images
    $uploadDirectory = 'uploads/';

    // Create the directory if it doesn't exist
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Check if an image file was sent
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $tempFile = $_FILES['image']['tmp_name'];
        $name = $_FILES['image']['name'];

        // Generate a unique filename (you may implement your logic here)
        $uniqueFilename = uniqid() . '_' . $name;
        $targetFile = $uploadDirectory . $uniqueFilename;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($tempFile, $targetFile)) {
            // Respond with a success message and the uploaded filename
            $response = [
                'status' => 'success',
                'message' => 'Image uploaded successfully.',
                'filename' => $uniqueFilename,
            ];
            http_response_code(201); // Created
        } else {
            // Respond with an error message
            $response = [
                'status' => 'error',
                'message' => 'Error uploading the image.',
            ];
            http_response_code(500); // Internal Server Error
        }
    } else {
        // Respond with an error message
        $response = [
            'status' => 'error',
            'message' => 'No image file found in the request.',
        ];
        http_response_code(400); // Bad Request
    }

    // Set response headers to indicate JSON content
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Respond with an error message for invalid request method
    $response = [
        'status' => 'error',
        'message' => 'Invalid request method.',
    ];
    http_response_code(405); // Method Not Allowed

    // Set response headers to indicate JSON content
    header('Content-Type: application/json');
    echo json_encode($response);
}

// Check if the request is a GET request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if the 'filename' parameter is provided in the GET request
    if (isset($_GET['filename'])) {
        $filename = $_GET['filename'];
        $filePath = 'uploads/' . $filename;

        // Check if the file exists
        if (file_exists($filePath)) {
            // Set appropriate headers to indicate an image response
            header('Content-Type: image/jpeg');
            header('Content-Length: ' . filesize($filePath));

            // Output the image file
            readfile($filePath);
        } else {
            // Respond with an error message
            http_response_code(404); // Not Found
            echo 'Image not found.';
        }
    } else {
        // Respond with an error message for missing filename parameter
        http_response_code(400); // Bad Request
        echo 'Missing filename parameter.';
    }
} else {
    // Respond with an error message for invalid request method
    http_response_code(405); // Method Not Allowed
    echo 'Invalid request method.';
}



// Close the database connection
$conn->close();
?>
