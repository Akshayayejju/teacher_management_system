<!DOCTYPE html>
<html lang="en">
<head>
  <title>TEACHER DETAILS HANDLING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">TEACHER DETAILS HANDLING</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead class="thead-dark">
          <tr>
            <th>Teacher ID</th>
            <th>Teacher Name</th>
            <!-- Add other table headers here -->
            <th>passport_size_photo</th>
            <th>medical_certificate</th>
            <th>caste_certificate</th>
            <th>address</th>
            <th>phone</th>
            <th>qualifications</th>
            <th>experience</th>
            <th>created_time</th>
            <th>Accept / Reject / Pending</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "conn.php";
          $query = "SELECT * FROM user";
          $query_output = $conn->query($query);
          while ($row = $query_output->fetch_assoc()) {
            $teacher_id = $row['teacher_id'];
            $teacher_name = $row['teacher_name'];
            $passport_size_photo = $row['passport_size_photo'];
            $medical_certificate = $row['medical_certificate'];
            $caste_certificate = $row['caste_certificate'];
            $address = $row['address'];
            $phone = $row['phone'];
            $qualifications = $row['qualifications'];
            $experience = $row['experience'];
            $created_time = $row['created_time'];
            // Add other variables for table data here

            echo "<tr>
                    <td>$teacher_id</td>
                    <td>$teacher_name</td>
                    <td>$passport_size_photo</td>
                    <td>$medical_certificate</td>
                    <td>$caste_certificate</td>
                    <td>$address</td>
                    <td>$phone</td>
                    <td>$qualifications</td>
                    <td>$experience</td>
                    <td>$created_time</td>

                    <!-- Add other table data here -->
                    <td>
                      <a class='btn btn-success btn-sm mr-1' href='user_accept.php?teacher_id=$teacher_id&action=accept'>Accept</a>
                      <a class='btn btn-danger btn-sm mr-1' href='user_accept.php?teacher_id=$teacher_id&action=reject'>Reject</a>
                      <a class='btn btn-warning btn-sm' href='user_accept.php?teacher_id=$teacher_id&action=pending'>Pending</a>
                    </td>
                    <td>
                      <a class='btn btn-info btn-sm' href='user_man_update.php?teacher_id=$teacher_id'>Update</a>
                    </td>
                    <td>
                      <a class='btn btn-danger btn-sm' href='user_man_delete.php?teacher_id=$teacher_id'>Delete</a>
                    </td>
                  </tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
