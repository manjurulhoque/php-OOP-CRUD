<?php

require_once("includes/init.php");

if(empty($_GET['id'])) {
    redirect("index.php");
} else {

    $student = Student::find_by_id($_GET['id']);
    if($student) {
        $student->delete();
        redirect("index.php");
    } else {
        redirect("index.php");
    }
}
?>
