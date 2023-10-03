<?php
include("db.php");
$id = $_REQUEST['id'];
$file = $_REQUEST['file'];


$CLIENT_ID = "0145d074a0b2c07ea65c569e27e5f2f9";
if (!empty($file)) {
    $apiKey = $CLIENT_ID; 

    $delete_url = 'https://api.imgbb.com/1/delete/' . $CLIENT_ID;
    //   $file = $_FILES['photos']['tmp_name'];

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $delete_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, [
        'image_id' => $apiKey,
        'image' => new CURLFile($file),
    ]);

    $response = curl_exec($curl);
    curl_close($curl);

    // Handle the response from ImgBB (e.g., display the uploaded image URL)
    $responseData = json_decode($response, true);
    $query = "DELETE FROM Customer_imagedata WHERE image_id=$id";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
} else {
    $query = "DELETE FROM Customer_imagedata WHERE image_id=$id";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
}
header("Location: view.php");
exit();
?>