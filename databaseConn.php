<?php
    $connection = new mysqli('localhost', 'root', '', 'studentdatabase');

    if ($connection -> connect_error) {
        die ('Error: '.$connection -> connect_error);
    } else {
        if (isset($_POST['enter'])) {
            if(!empty(trim($_POST['student_name'])) && !empty(trim($_POST['student_email'])) && !empty(trim($_POST['student_pass']))) {
                $name = $_POST['student_name'];
                $email = $_POST['student_email'];
                $pass = $_POST['student_pass'];

                $enc_pass = password_hash($pass, PASSWORD_BCRYPT);

                $connection -> query("INSERT INTO userinformation(student_name, student_email, student_password) VALUES('$name', '$email', '$enc_pass')");

                if ($connection -> affected_rows != 1) {
                    $en_error = "Something wrong";
                } else {
                    $en_success = "Password hashed and stored successfully";
                }
            } else {
                $en_error = "All field must have values";
            }
        }
    };
?>