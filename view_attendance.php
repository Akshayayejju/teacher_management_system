<?php
// Database connection
include "conn.php";

// Fetch attendance data from the database
$query = "SELECT * FROM attendance";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Attendance Sheet - View Attendance</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    .container {
      max-width: 600px;
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

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    
  </style>
</head>
<body>
  <div class='container'>
    <h2>Attendance Sheet - View Attendance</h2>
    <table>
      <tr>
        <th>Teacher ID</th>
        <th>Teacher Name</th>
        <th>Date</th>
        <th>Status</th>
      </tr>
      <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
          <td><?php echo $row["teacher_id"]; ?></td>
          <td><?php echo $row["teacher_name"]; ?></td>
          <td><?php echo $row["date"]; ?></td>
          <td><?php echo $row["status"]; ?></td>
        </tr>
      <?php endwhile; ?>
    </table>

    
  </div>
</body>
</html>
