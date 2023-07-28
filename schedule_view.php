<?php
// Database connection
include "conn.php";

// Fetch attendance data from the database
$query = "SELECT * FROM schedule";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Schedule Sheet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center">View Schedule</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead class="thead-dark">
          <tr>
            <th>Teacher ID</th>
            <th>Teacher Name</th>
            <th>Schedule</th>
            <th>Course</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
              <td><?php echo $row["teacher_id"]; ?></td>
              <td><?php echo $row["teacher_name"]; ?></td>
              <td>
                <?php
                $schedule_file = $row["schedule"];
                if (!empty($schedule_file)) {
                  $file_path = 'uploads/' . $schedule_file;
                  echo '<a href="' . $file_path . '" download>' . $schedule_file . '</a>';
                } else {
                  echo 'No schedule file available';
                }
                ?>
              </td>
              <td>
                <?php
                $course_file = $row["course"];
                if (!empty($course_file)) {
                  $course_path = 'uploads/' . $course_file;
                  echo '<a href="' . $course_path . '" download>' . $course_file . '</a>';
                } else {
                  echo 'No course file available';
                }
                ?>
              </td>
              <td>
                <a class="btn btn-success btn-sm mr-1" href="schedule_accept.php?teacher_id=<?php echo $row['teacher_id']; ?>&action=accept">Accept</a>
                <a class="btn btn-danger btn-sm mr-1" href="schedule_accept.php?teacher_id=<?php echo $row['teacher_id']; ?>&action=reject">Reject</a>
                <a class="btn btn-warning btn-sm" href="schedule_accept.php?teacher_id=<?php echo $row['teacher_id']; ?>&action=pending">Pending</a>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
