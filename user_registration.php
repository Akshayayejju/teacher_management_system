<!DOCTYPE html>
<html lang="en">
<head>
  <title>teacher registration page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">  
  <h2>teacher registration form</h2>
  <form method='POST' action='user_registration_validation.php'>
    <div class='row'>
        <div class="col-md-6">
           <label for="teacher_id">teacher_id:</label>
           <input type="varchar" class="form-control" id="teacher_id" placeholder="Enter teacher id" name="teacher_id">
        </div>
        <div class="col-md-6">
            <label for="name">teacher_name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter last" name="name">
        </div>

    </div>
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="num">phone:</label>
      <input type="number" class="form-control" id="num" placeholder="Enter mobile" name="num">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="cpwd">confirm_Password:</label>
      <input type="password" class="form-control" id="cpwd" placeholder="Enter confirm password" name="cpwd">
    </div>
    
    <button type='submit' class='btn btn-success'>Submit</button>
  </form>
</div>

</body>
</html>