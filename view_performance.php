<?php
// Database connection
include "conn.php";

// Fetch attendance data from the database
$query = "SELECT * FROM performance";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Performance View</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color:blue;
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

    td a {
      color: #007bff;
      text-decoration: none;
      font-weight: bold;
    }

    td a:hover {
      text-decoration: underline;
    }

    .no-file {
      color: #666;
      font-style: italic;
    }

    .download-button {
      display: inline-block;
      padding: 8px 16px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.2s ease-in-out;
    }

    .download-button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class='container'>
    <h2>Performance Sheet - View Performance</h2>
    <table>
      <tr>
        <th>Teacher ID</th>
        <th>Teacher Name</th>
        <th>Performance</th>
        <th>Notifications</th>
      </tr>
      <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
          <td><?php echo $row["teacher_id"]; ?></td>
          <td><?php echo $row["teacher_name"]; ?></td>
          <td><?php echo $row["performance"]; ?></td>
          <td>
            <?php
            $notification_file = $row["notifications"];
            if (!empty($notification_file)) {
              $file_path = 'uploads/' . $notification_file;
              echo '<a href="' . $file_path . '" class="download-button">Download File</a>';
            } else {
              echo '<span class="no-file">No notification file available</span>';
            }
            ?>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  </div>
</body>
</html>
