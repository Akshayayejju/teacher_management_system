<?php
  include 'conn.php';
  $teacher_id=$_POST["teacher_id"];
   $mail=$_POST["email"];
   $password=$_POST["pwd"];
   //$query="SELECT * FROM  registration where teacher_id='$teacher_id', email='$mail' , password='$password'";
   $query="SELECT * FROM  registration";
   $query_output=$conn->query($query);
   //print_r($query_output);
   echo "</br>";
   //print_r($query_output->fetch_assoc());
   $login_success=false;
  while($row=$query_output->fetch_assoc()){
    echo "</br>"; 
    if($mail==$row["email"] && $password==$row["password"] && $teacher_id==$row["teacher_id"]){
      $login_success=true;
      break;
    }
}
    if($login_success==true){
      echo "login success";
      header("Refresh: 3; URL=user_project.php");
    }
    else{
      echo "invalid login";
    }
    echo "</br>";

  
   
  ?>