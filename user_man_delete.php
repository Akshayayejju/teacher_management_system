<html>
<head>
<link rel="stylesheet" href="new.css">
<style>
.form-group{
color:red;
}
   </style> 
</head>
<body>
<div class="new">
<div class="form-group">
<?php

include 'conn.php'; 

$id = $_GET["teacher_id"];
echo "<br>";
$query = "delete from user where teacher_id='$id'";
if($conn->query($query)){
   // header("refresh:3;url=infotable.php");
    echo "deleted successfully";
}
else{
    $error = $conn->error;
    echo "not deleted".$error;
}
?>
</body>
</div>
</div>
</html>