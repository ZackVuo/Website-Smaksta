<?php require 'databaseConn.php'?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Uvip</title>
        <style>
            *, body {
                margin: 0;
                padding: 0;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
        </style>
    </head>
    <body>
        <form action="databaseConn.php" method="post">
            <header>Student Registration Form</header>
            <div class="input-box">
                <label>Full Name: </label>
                <input type="text" name="student_name" placeholder="Enter your full name">
            </div>
            <div class="input-box">
                <label>Email: </label>
                <input type="text" name="student_email" placeholder="someone@gmail.com">
            </div>
            <div class="input-box">
                <label>Password: </label>
                <input type="password" name="student_pass" placeholder="Enter your password">
            </div>
            <div class="submit-button">
                <input type="submit" name="enter">
            </div>

            <p <?php echo @$en_error ?>></p>
            <p <?php echo @$en_succ ?>></p>
        </form>
    </body>
</html>