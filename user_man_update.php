<!DOCTYPE html>
<html lang="en">
<head>
  <title>TEACHER MANAGEMENT SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
       include "conn.php";
       $id=$_GET["teacher_id"];
       $query = "SELECT * from user where teacher_id='$id'";
       echo "SQL Query: $query";
       $query_output= $conn->query($query);
       
       if (!$query_output) {
            die("Query failed: " . $conn->error);
            }

          $num_rows = $query_output->num_rows;
          echo "Number of rows returned: " . $num_rows;

               while($row = $query_output->fetch_assoc()){
               $teacher_id = $row['teacher_id'];
               $teacher_name = $row['teacher_name'];
               $dob = $row['dob'];
               $photo = $row['passport_size_photo'];
               $medical = $row['medical_certificate'];
               $caste = $row['caste_certificate'];
               $address = $row['address'];
               $phone = $row['phone'];
               $qualifications = $row['qualifications'];
               $experience = $row['experience'];
               }
    
    
    
    ?>

<div class="container">  
  <h2>teacher_profile</h2>
  <form method="POST" action="user_man_update_validation.php" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
          <label for="teacher_id">teacher_id</label>
          <input type="varchar" class="form-control" id="teacher_id" placeholder="Enter your id" name="teacher_id" value= <?php echo $teacher_id ?>>
        </div>
        <div class="col-md-6">
          <label for="teacher_name">teacher_name</label>
          <input type="text" class="form-control" id="teacher_name" placeholder="Enter your name" name="teacher_name" value=<?php echo $teacher_name ?>>
        </div>
        
      </div>
    <div >
      <label for="dob">dob</label>
      <input type="date" class="form-control" id="dob" placeholder="Enter date_of_birth" name="dob" value=<?php echo $dob ?>>
    </div>
    <div >
      <label for="passport_size_photo">passport_size_photo</label>
      <input type="file" class="form-control" id="passport_size_photo" placeholder="upload file of photo" name="passport_size_photo" value=<?php echo $photo ?>>
    </div>
    <div >
      <label for="medical_certificate">medical_certificate</label>
      <input type="file" class="form-control" id="medical_certificate" placeholder="upload file of medical_certificate" name="medical_certificate" value=<?php echo $medical ?>>
    </div>
    <div >
      <label for="caste_certificate">caste_certificate</label>
      <input type="file" class="form-control" id="caste_certificate" placeholder="upload file of caste certificate" name="caste_certificate" value=<?php echo $caste ?>>
    </div>
    <label for="address">address</label>
      <input type="text" class="form-control" id="address" placeholder="enter your address" name="address" value=<?php echo $address ?>>
    </div>
    <div >
      <label for="phone">phone</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter phone number" name="phone" value=<?php echo $phone ?>>
    </div>
    <div >
      <label for="qualifications">qualifications</label>
      <input type="file" class="form-control" id="qualifications" placeholder="upload file of qualifications" name="qualifications" value=<?php echo $qualifications ?>>
    </div>
    <div >
      <label for="experience">experience</label>
      <input type="text" class="form-control" id="experience" placeholder="upload file of experience" name="experience" value=<?php echo $experience ?>>
    </div>
     
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
</body>

</html>