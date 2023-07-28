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
$reject='reject';
echo $teacher_id;
echo "<br>";
$query =  "Update letter set reject='$reject' where teacher_id='$teacher_id'";
if($conn->query($query)){
   // header("refresh:3;url=infotable.php");
    echo "rejected";
}
else{
    $error = $conn->error;
    echo "not rejected".$error;
}
?>
</body>
</div>
</div>
</html>