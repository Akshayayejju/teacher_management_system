<?php
   include 'conn.php';
   $teacher_id=$_POST["teacher_id"];
   $letter=$_FILES["letter_uploading"]["name"];
   $complaints=$_POST["complaints"];
   $created_time = date('Y-m-d H:i:s');
   $letter_tmp = $_FILES["letter_uploading"]["tmp_name"];
   $upload_dir = 'uploads/';
   $file_path = $upload_dir . $letter;
   if (move_uploaded_file($letter_tmp, $file_path)) {
      // File uploaded successfully, insert data into the database
      $query="insert into letter(teacher_id,letter,complaints,created_time) values ('$teacher_id','$letter','$complaints','$created_time')";
   
      if($conn -> query($query)){
         echo "query inserted";
      }
      else{
         $error=$conn->error;
         echo "error in insert".$error;
      }
     
   } 
    
   
?>