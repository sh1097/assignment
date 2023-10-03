<?php

session_start();
include("db.php");


if (!isset($_SESSION["customer_name"])) {
  header("Location:login.php");
  exit();
}

$db= $conn;
$tableName="Customer_imagedata";
$columns= ['id', 'username','customer_id','image_id','Image_file','Image_name','temp_name'];
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

$query = "SELECT ".$columnName." FROM ".$tableName."  WHERE `customer_id`= ".$_SESSION['customer_id']." ORDER BY id DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
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
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<button onclick="goBack()"  stylw="align:right">Back</button>

<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table table-striped">
      <table class="table thread-dark">
       <thead><tr><th>S.N</th>

         <th>Customer Name</th>
         <th>Image Id</th>
         <th>IMAGE FILE</th>
         <th>Image Url</th>
         <th><strong>Delete</strong></th>
    
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){  
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['username']??''; ?></td>
      <td><?php echo $data['image_id']??''; ?></td>

      <td><?php echo $data['Image_file']??''; ?></td>
   <td>   <a href='<?php echo $data['Image_name']??'';?>'><?php echo $data["Image_name"]; ?> </a></td>
      

<td align="center">
<a  class="btn btn-danger"href="delete.php?id='<?php echo $data["image_id"] ; ?>' & file='<?php echo $data["temp_name"] ; ?>'">Delete</a>
</td>
     
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>

<!-- Add a back button to navigate back to the previous page -->

<script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
