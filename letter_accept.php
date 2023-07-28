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

$teacher_id = $_GET["teacher_id"];

$action=$_GET['action'];
echo $teacher_id;
echo "<br>";
$query =  "Update letter set action='$action' where teacher_id='$teacher_id'";
if($conn->query($query)){
   // header("refresh:3;url=infotable.php");
    echo "accepted";
}
else{
    $error = $conn->error;
    echo "not accepted".$error;
}
?>
</body>
</div>
</div>
</html>