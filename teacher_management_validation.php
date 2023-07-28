<?php
include 'conn.php';

$teacher_id = $_POST["teacher_id"];
$teacher_name = $_POST["teacher_name"];
$dob = $_POST["dob"];
$photo = $_FILES["passport_size_photo"]["name"];
$medical = $_FILES["medical_certificate"]["name"];
$caste = $_FILES["caste_certificate"]["name"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$qualifications = $_FILES["qualifications"]["name"];
$experience = $_POST["experience"];
$created_time = date('Y-m-d H:i:s');
// Directory to store uploaded files
$upload_dir = 'uploads/';

// Move uploaded files to the "uploads" directory
if (move_uploaded_file($_FILES["passport_size_photo"]["tmp_name"], $upload_dir . $photo) &&
    move_uploaded_file($_FILES["medical_certificate"]["tmp_name"], $upload_dir . $medical) &&
    move_uploaded_file($_FILES["caste_certificate"]["tmp_name"], $upload_dir . $caste) &&
    move_uploaded_file($_FILES["qualifications"]["tmp_name"], $upload_dir . $qualifications)
) {
    // All files uploaded successfully, insert data into the database
    $insert_query = "INSERT INTO user (teacher_id, teacher_name, dob, passport_size_photo, medical_certificate, caste_certificate, address, phone, qualifications, experience,created_time) 
                     VALUES ('$teacher_id','$teacher_name','$dob','$photo','$medical','$caste','$address','$phone','$qualifications','$experience','$created_time')";

    if ($conn->query($insert_query)) {
        echo "Data inserted successfully.";
    } else {
        $error = $conn->error;
        echo "Error in insert: " . $error;
    }
} else {
    echo "Error uploading files.";
}
?>
