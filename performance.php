<?php
// Database connection
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacher_id = $_POST["teacher_id"];
    $teacher_name = $_POST["name"];
    $performance = $_POST["performance"];
    $notifications = $_FILES["notification"]["name"];
    $notification_tmp = $_FILES["notification"]["tmp_name"];

    // Move the uploaded file to the "uploads" directory
    $upload_dir = 'uploads/';
    $file_path = $upload_dir . $notifications;

    if (move_uploaded_file($notification_tmp, $file_path)) {
        // File uploaded successfully, insert data into the database
        $query = "INSERT INTO performance (teacher_id, teacher_name, performance, notifications) VALUES ('$teacher_id','$teacher_name', '$performance', '$notifications')";
        $query_output = $conn->query($query);
    } else {
        echo 'Error uploading the file.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Performance Page</title>
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
  <h2 class="text-center">Performance Form</h2>
  <form method="POST" action="" enctype="multipart/form-data">
    <div class="form-group">
      <label for="teacher_id">Teacher ID:</label>
      <input type="text" class="form-control" id="teacher_id" placeholder="Enter ID" name="teacher_id">
    </div>
    <div class="form-group">
      <label for="name">Teacher Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="performance">Performance:</label>
      <select class="form-control" name="performance" required>
        <option value="verybad">Very Bad</option>
        <option value="bad">Bad</option>
        <option value="average">Average</option>
        <option value="good">Good</option>
        <option value="excellent">Excellent</option>
      </select>
    </div>
    <div class="form-group">
      <label for="notification">Notifications:</label>
      <input type="file" class="form-control" id="notification" name="notification">
    </div>

    <button type="submit" class="btn btn-default btn-block">Submit</button>
  </form>
</div>

</body>
</html>
