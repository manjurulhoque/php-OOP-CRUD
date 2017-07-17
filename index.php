<?php
require_once("includes/init.php");
$students = Student::find_all();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Info</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
    </head>
    <body>
        <div class="container">
            <a href="add_student.php" class="btn btn-success">Create new</a>
            <div class="col-md-12">
                <table cellspacing="0" width="100%" class="display table table-hover" id="example">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($students as $student) : ?>
                        <tr>
                            <td><?=$student->id;?></td>
                            </td>
                            <td><?=$student->name;?></td>
                            <td><?=$student->address;?></td>
                            <td>
                                <div class="action_link">
                                    <a class="btn btn-danger" href="delete_student.php?id=<?=$student->id?>">Delete</a>
                                    <a class="btn btn-primary" href="edit_student.php?id=<?=$student->id?>">Edit</a>
                                    <a href="#">View</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
