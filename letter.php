<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Letter Uploading</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f2f2f2;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            margin-top: 50px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>LETTERS AND COMPLAINTS</h2>
        <form method="post" action="letter_validation.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="teacher_id">Teacher ID</label>
                <input type="text" class="form-control" id="teacher_id" placeholder="Enter Teacher ID" name="teacher_id" required>
            </div>
            <div class="form-group">
                <label for="letter_uploading">Letter Uploading</label>
                <input type="file" class="form-control" id="letter_uploading" name="letter_uploading" required>
            </div>
            <div class="form-group">
                <label for="complaints">Complaints</label>
                <textarea class="form-control" id="complaints" rows="5" placeholder="Enter your complaints here" name="complaints" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>

</html>
