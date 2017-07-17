<?php
require_once("includes/init.php");
$student = new Student();
if(isset($_POST['create'])) {
    $student->name = $_POST['name'];
    $student->address = $_POST['address'];
    if($student->create())
    {
        redirect('index.php');
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Info</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            <a href="add_student.php" class="btn btn-success">Create new</a>
            <form action="" method="post">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="create" class="btn btn-primary btn-block" value="Create">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
