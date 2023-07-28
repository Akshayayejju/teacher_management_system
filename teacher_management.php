<!DOCTYPE html>
<html lang="en">
<head>
  <title>TEACHER MANAGEMENT SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
   label{
     margin-top:20px;
     color:pink;
   }
   body {
  background-image:url("https://cdn.pixabay.com/photo/2018/08/23/07/45/background-3625411_1280.jpg");
}

  </style>
  
</head>

<body>

<div class="container">  
  <h2 style='color:pink'>teacher_profile</h2>
  <form method="post" action="teacher_management_validation.php" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
          <label for="teacher_id">teacher_id</label>
          <input type="varchar" class="form-control" id="teacher_id" placeholder="Enter your id" name="teacher_id">
        </div>
        <div class="col-md-6">
          <label for="teacher_name">teacher_name</label>
          <input type="text" class="form-control" id="teacher_name" placeholder="Enter your name" name="teacher_name">
        </div>
        
      </div>
    <div class='row'>
     <div  class="col-md-6">
      <label for="dob">dob</label>
      <input type="date" class="form-control" id="dob" placeholder="Enter date_of_birth" name="dob">
     </div>
     <div  class="col-md-6">
      <label for="phone">phone</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
    </div>
   </div>
  <div class='row'>
    <div  class="col-md-4" >
      <label for="passport_size_photo">passport_size_photo</label>
      <input type="file" class="form-control" id="passport_size_photo" placeholder="upload file of photo" name="passport_size_photo">
    </div>
    <div  class="col-md-4">
      <label for="medical_certificate">medical_certificate</label>
      <input type="file" class="form-control" id="medical_certificate" placeholder="upload file of medical_certificate" name="medical_certificate">
    </div>
    <div  class="col-md-4" >
      <label for="caste_certificate">caste_certificate</label>
      <input type="file" class="form-control" id="caste_certificate" placeholder="upload file of caste certificate" name="caste_certificate">
    </div>
  </div>
    <div>
    <label for="address">address</label>
      <input type="text" class="form-control" id="address" placeholder="enter your address" name="address">
    </div>
    
    <div >
      <label for="qualifications">qualifications</label>
      <input type="file" class="form-control" id="qualifications" placeholder="upload file of qualifications" name="qualifications">
    </div>
    <div >
      <label for="experience">experience</label>
      <input type="text" class="form-control" id="experience" placeholder="upload file of experience" name="experience">
    </div>
     
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
</body>
</tbody>



<!-- <style>
footer {
  text-align: center;
  padding: 5px;
  background-color:yellow;
  color: black;
}
</style> -->
<body>
<!-- <footer>
  <p>submitting to MERA_SAHAI<br>
  <a href="WWW.MYCOMPANY.COM">GOOGLE</a></p>
</footer> -->
</html>