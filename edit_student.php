<?php
require_once("includes/init.php");
$student = Student::find_by_id($_GET['id']);
if(isset($_POST['update'])) {
    $student->name = $_POST['name'];
    $student->address = $_POST['address'];
    if($student->update())
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
            <a href="index.php" class="btn btn-primary">Go Back</a>
            <form action="" method="post">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $student->name; ?>">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" value="<?php echo $student->address; ?>">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="update" class="btn btn-primary btn-block" value="Update">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
