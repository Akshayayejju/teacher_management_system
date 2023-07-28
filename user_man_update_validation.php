<html>
    <head><link rel="stylesheet" href="new.css">
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
$teacher_id=$_POST["teacher_id"];
$teacher_name=$_POST["teacher_name"];
$dob=$_POST["dob"];
$photo=$_FILES["passport_size_photo"]["name"];
$medical=$_FILES["medical_certificate"]["name"];
$caste=$_FILES["caste_certificate"]["name"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$qualifications=$_FILES["qualifications"]["name"];
$experience=$_POST["experience"];

$query = "Update user set teacher_id='$teacher_id',teacher_name='$teacher_name',dob = '$dob',passport_size_photo='$photo',medical_certificate = '$medical',caste_certificate = '$caste',address = '$address',phone = '$phone',qualifications = '$qualifications',experience = '$experience' where teacher_id='$teacher_id'";

if($conn->query($query)){
    //header("refresh:3;url=infotable.php");
    echo "Successfully updated";
}
else{
    $error = $conn->error;
    echo "not updated".$error;
}

?>
</div>
</div>
</body>
</html>