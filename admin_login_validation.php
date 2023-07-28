<?php
$email=$_POST['email'];
$password=$_POST['pwd'];
if($email=='admin@gmail.com' && $password=='admin'){
    echo "successfully conected.</br>";
    header("Refresh: 3; URL=admin_project.php");
  // echo "<a href=myproject_admin.php>admin</a>";
}
else{
    echo "unsuccessful connection";
}



?>