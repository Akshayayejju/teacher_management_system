<?php
   include 'conn.php';
   $id=$_POST["teacher_id"];
   $teacher_name=$_POST["name"];
   $email=$_POST["email"];
   $phone=$_POST["num"];
   $password=$_POST["pwd"];
   $confirm_password=$_POST["cpwd"];
   
   if($confirm_password==$password){
   
      
   $insert_query="insert into registration(teacher_id,teacher_name,email,phone,password) values ('$id','$teacher_name','$email','$phone','$password')";
 
    
     if($conn -> query($insert_query)){
        echo "query inserted";
     }
     else{
        $error=$conn->error;
        echo "error in insert".$error;
     }
    
   }
    
   else{
    echo "unsuccessful registration";
   }
    
?>