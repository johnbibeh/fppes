<?php
require '../../php/app.php';


$dt = date("Y-m-d h:i:sa");

$pass = md5($_POST['st_password']);

        $query = sprintf("INSERT into accounts_tbl VALUES (NULL,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
               
                mysqli_real_escape_string($CN, $_POST['student_id']),
                mysqli_real_escape_string($CN, $_POST['st_fname']),
                mysqli_real_escape_string($CN, $_POST['st_mname']),
                mysqli_real_escape_string($CN, $_POST['st_lname']),
                mysqli_real_escape_string($CN, $_POST['st_address']),
                mysqli_real_escape_string($CN, $_POST['st_bdate']),
                mysqli_real_escape_string($CN, $_POST['st_age']),
                mysqli_real_escape_string($CN, $_POST['st_weight']),
                mysqli_real_escape_string($CN, $_POST['st_height']),
                mysqli_real_escape_string($CN, $_POST['st_gender']),
                mysqli_real_escape_string($CN, $_POST['st_email']),
                mysqli_real_escape_string($CN, $_POST['st_username']),
                mysqli_real_escape_string($CN, $pass),
                mysqli_real_escape_string($CN, 'Student'),
                mysqli_real_escape_string($CN, 'Active'),
                mysqli_real_escape_string($CN, 'Yes'),
                mysqli_real_escape_string($CN, $dt),
                mysqli_real_escape_string($CN, $dt));
        executeQuery($query);

        $res = '';

        $weight = $_POST['st_weight'];
        $height = $_POST['st_height'];

        $heightInMeters = $height / 100;
        $weightInKg = $weight / 2.20462;
        $bmi = $weightInKg / ($heightInMeters * $heightInMeters);        
        $bmi = number_format((float)$bmi, 2, '.', ''); 

        if ($bmi < 18.5) {
        $res = "Underweight";
        } elseif ($bmi >= 18.5 && $bmi < 22.9) {
        $res = "Normal weight";
        } elseif ($bmi >= 23 && $bmi < 24.9) {
        $res = "Overweight";
        } else {
        $res = "Obese";
        }

        $query2 = sprintf("INSERT into bmi_tbl VALUES (NULL,'%s','%s','%s','%s','%s','%s','%s')",
               
                mysqli_real_escape_string($CN, $_POST['student_id']),
                mysqli_real_escape_string($CN, $_POST['st_age']),
                mysqli_real_escape_string($CN, $_POST['st_weight']),
                mysqli_real_escape_string($CN, $_POST['st_height']),
                mysqli_real_escape_string($CN, $bmi),
                mysqli_real_escape_string($CN, $res),
                mysqli_real_escape_string($CN, $dt));
        executeQuery($query2);

        $_SESSION['success_accounts'] = "Accounts Successfully Inserted.";

header('Location: ../../tc-students.php');


?>