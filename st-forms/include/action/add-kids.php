<?php
include '../../../forms/php/app.php';

$dt = date("Y-m-d h:i:sa");

$query = sprintf("INSERT into kids_tbl VALUES (NULL, '%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
                mysqli_real_escape_string($CN, $_POST['parent_id']),
                mysqli_real_escape_string($CN, $_POST['fname']),
                mysqli_real_escape_string($CN, $_POST['mname']),
                mysqli_real_escape_string($CN, $_POST['lname']),
                mysqli_real_escape_string($CN, $_POST['address']),
                mysqli_real_escape_string($CN, $_POST['age']),
                mysqli_real_escape_string($CN, $_POST['height']),
                mysqli_real_escape_string($CN, $_POST['weight']),
                mysqli_real_escape_string($CN, $_POST['grade']),
                mysqli_real_escape_string($CN, $_POST['section']),
                mysqli_real_escape_string($CN, $_POST['bday']),
                mysqli_real_escape_string($CN, $_POST['gender']),
                mysqli_real_escape_string($CN, $dt));

        executeQuery($query);


header('Location: ../../st-register-kids.php');
?>