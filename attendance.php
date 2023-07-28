<?php
// Database connection
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacher_id=$_POST["teacher_id"];
    $teacher_name = $_POST["teacher_name"];
    $date = $_POST["date"];
    $status = $_POST["status"];

    // Insert the data into the database
    $query = "INSERT INTO attendance (teacher_id,teacher_name, date, status) VALUES ('$teacher_id','$teacher_name', '$date', '$status')";
    $conn->query($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Attendance Sheet - Data Entry</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="date"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    select {
      height: 38px;
    }

    button[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    button[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class='container'>
    <h2>Attendance Data Entry</h2>
    <form method="POST" action="">
      <div class='form-group'>
        <label for="teacher_id">Teacher ID:</label>
        <input type="text" class='form-control' name="teacher_id" required>
      </div>
      <div class='form-group'>
        <label for="teacher_name">Teacher Name:</label>
        <input type="text" class='form-control' name="teacher_name" required>
      </div>
      <div class='form-group'>
        <label for="date">Date:</label>
        <input type="date" name="date" required>
      </div>
      <div class='form-group'>
        <label for="status">Attendance Status:</label>
        <select name="status" required>
          <option value="Present">Present</option>
          <option value="Absent">Absent</option>
          <option value="Late">Late</option>
        </select>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
