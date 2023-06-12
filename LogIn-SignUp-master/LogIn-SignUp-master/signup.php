<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['fullname']) && isset($_POST['student_email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['student_id'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("students", $_POST['fullname'], $_POST['student_email'], $_POST['username'], $_POST['password']) , $_POST['student_id'])) {
            echo "Sign Up Success";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
