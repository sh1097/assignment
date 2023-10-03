<?php
// include("header.php");
include("db.php");

session_start();

// echo"<pre>";print_r($_SESSION);die;

$db= $conn;
$tableName="customers";
$columns= ['id', 'username'];
$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns){

 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
$columnName = implode(", ", $columns);
$customer_name=$_SESSION['customer_name'];
$query = "SELECT ".$columnName." FROM ".$tableName."  WHERE `username`= '".$customer_name."'ORDER BY id DESC";
$result = $db->query($query);


if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $_SESSION['customer_id']=$row[0]['id'];
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
$CLIENT_ID = "0145d074a0b2c07ea65c569e27e5f2f9";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $apiKey = $CLIENT_ID; // Replace with your ImgBB API key

  $uploadUrl = 'https://api.imgbb.com/1/upload';
  $file = $_FILES['photos']['tmp_name'];

  $curl = curl_init();

  curl_setopt($curl, CURLOPT_URL, $uploadUrl);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, [
      'key' => $apiKey,
      'image' => new CURLFile($file),
  ]);

  $response = curl_exec($curl);
  curl_close($curl);

  $responseData = json_decode($response, true);
    // echo"<pre>"; print_r($responseData);die;

  $image_id = $responseData['data']['id'];
  $image_name= $responseData['data']['image']['name'];
  $file =$_FILES['photos']['tmp_name'];
  if ($responseData && isset($responseData['data']['url'])) {
    $imageUrl = $responseData['data']['url'];
    $username = $_SESSION["customer_name"];
    $customer_id= $_SESSION["customer_id"];
    $param[':image_file'] = $image_name;
    $param[':image_path'] = $imageUrl;
    $param[':image_id'] = $image_id;
    $sql = "INSERT INTO Customer_imagedata(username, customer_id, image_id,Image_file,Image_name,temp_name) VALUES ('$username', '$customer_id', '$image_id','$image_name','$imageUrl','$file')";
    if(mysqli_query($conn, $sql)){

        header("location: view.php");
  } else {
    echo "Image upload failed.";
}
}



    else{
        // print_r($sql);die;

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
   
 
} else {
    echo "Sorry, there was an error uploading your file.";
}