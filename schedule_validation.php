<?php
include 'conn.php';
$teacher_id=$_POST["ids"];
$teacher_name=$_POST["name"];
$schedule=$_FILES["schedule"]["name"];
$course=$_FILES["course"]["name"];

$schedule_tmp = $_FILES["schedule"]["tmp_name"];
$course_tmp = $_FILES["course"]["tmp_name"];
$created_time = date('Y-m-d H:i:s');

// Move the uploaded file to the "uploads" directory
$upload_dir = 'uploads/';
$file_path = $upload_dir . $schedule;
$course_path=$upload_dir.$course;
if (move_uploaded_file($schedule_tmp, $file_path) && move_uploaded_file($course_tmp, $course_path)) {
   // File uploaded successfully, insert data into the database
   $query="insert into schedule(teacher_id,teacher_name,schedule,course,created_time) values ('$teacher_id','$teacher_name','$schedule','$course','$created_time')";

   if($conn -> query($query)){
      echo "query inserted";
   }
   else{
      $error=$conn->error;
      echo "error in insert".$error;
   }
  
} 
 
  

 

 
?>
