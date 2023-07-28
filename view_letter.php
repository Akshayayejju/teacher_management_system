<!DOCTYPE html>
<html lang="en">
<head>
  <title>Letter Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    h2 {
      text-align: center;
      margin: 20px 0;
      color:black;
    }

    .table th, .table td {
      vertical-align: middle;
    }

    .table th {
      background-color: #007bff;
      color: #fff;
    }

    .table tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .btn {
      padding: 6px 12px;
      font-size: 14px;
    }

    .btn-accept {
      background-color: #28a745;
      border-color: #28a745;
      color: #fff;
    }

    .btn-reject {
      background-color: #dc3545;
      border-color: #dc3545;
      color: #fff;
    }

    .btn-pending {
      background-color: #ffc107;
      border-color: #ffc107;
      color: #212529;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Letter Management System</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Teacher ID</th>
          <th>Letter</th>
          <th>Complaints</th>
          <th>Actions</th>
          <th>Created Time</th>
          <th>Created By</th>
          <th>User Role</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "conn.php";
        $query = "SELECT * FROM letter";
        $query_output = $conn->query($query);
        while ($row = $query_output->fetch_assoc()) {
          $letter = $row['letter'];
          $complaints = $row['complaints'];
          $created_time = $row["created_time"];
          $teacher_id = $row["teacher_id"];

          echo "<tr>
                  <td>$teacher_id</td>
                  <td><a href='uploads/$letter' download>$letter</a></td>
                  <td>$complaints</td>
                  <td>
                    <a class='btn btn-accept' target='_blank' href='letter_accept.php?teacher_id=$teacher_id&action=accept'>Accept</a>
                    <a class='btn btn-reject' target='_blank' href='letter_accept.php?teacher_id=$teacher_id&action=reject'>Reject</a>
                    <a class='btn btn-pending' target='_blank' href='letter_accept.php?teacher_id=$teacher_id&action=pending'>Pending</a>
                  </td>
                  <td>$created_time</td>
                  <td>Created By</td>
                  <td>User Role</td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
