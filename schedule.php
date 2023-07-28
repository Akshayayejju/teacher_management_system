<!DOCTYPE html>
<html lang="en">
<head>
  <title>schedule page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body {
      background-image: url('your-background-image.jpg'); /* Replace 'your-background-image.jpg' with the path to your background image */
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      font-family: Arial, sans-serif;
      color: #fff;
    }

    .container {
      margin-top: 50px;
      background-color: rgba(0, 0, 0, 0.7);
      padding: 30px;
      border-radius: 10px;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-control {
      background-color: rgba(255, 255, 255, 0.5);
      color: #000;
      font-weight: bold;
    }

    .btn-default {
      background-color: #4CAF50;
      border-color: #4CAF50;
      color: #fff;
      font-weight: bold;
    }

    .btn-default:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<div class="container">  
  <h2>schedule form</h2>
  <form method="POST" action="schedule_validation.php" enctype="multipart/form-data">
    <div class="form-group">
      <label for="ids">Teacher ID:</label>
      <input type="text" class="form-control" id="ids" placeholder="Enter teacher ID" name="ids">
     </div>
     <div class="form-group">
      <label for="name">Teacher Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter teacher name" name="name">
    </div>
    
    <div class="form-group">
      <label for="schedule">Schedule:</label>
      <input type="file" class="form-control" id="schedule" name="schedule">
    </div>
    <div class="form-group">
      <label for="course">Courses:</label>
      <input type="file" class="form-control" id="course" name="course">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>
