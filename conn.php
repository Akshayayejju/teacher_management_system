<?php
$username="root";
$hostname="localhost";
$password="";
$database="admin_module";
$conn = new mysqli($hostname,$username,$password,$database);
if($conn->connect_error){
    $error = $conn->connect_error;
    echo "not connected due to" . $error;
}
else{
    //echo "successfully connected";
}



?>