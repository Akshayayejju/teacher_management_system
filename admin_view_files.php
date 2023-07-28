<?php
// Connect to the database
//$conn = new mysqli('localhost', 'your_username', 'your_password', 'your_database');
include "conn.php";

// Retrieve file names from the database
$sql = 'SELECT file_name,file_path FROM uploaded_files';
$result = $conn->query($sql);
//$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin View Files</title>
</head>
<body>
    <h2>Uploaded Files</h2>
    <ul>
     <?php
        // Display file details and links to download/view files
        while ($row = $result->fetch_assoc()) {
            echo '<li><a href="' . $row['file_path'] . '">' . $row['file_name'] . '</a></li>';
        }
        ?>
    </ul>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
