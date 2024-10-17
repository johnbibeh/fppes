<?php
include 'forms/php/app.php';
$id = generateRandomString();
$dt = date("Y-m-d h:i:sa");

$pass = md5($_POST['pass']);

        $query = sprintf("INSERT into accounts_tbl VALUES (NULL,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
               
                mysqli_real_escape_string($CN, $id),
                mysqli_real_escape_string($CN, $_POST['fname']),
                mysqli_real_escape_string($CN, $_POST['mname']),
                mysqli_real_escape_string($CN, $_POST['lname']),
                mysqli_real_escape_string($CN, $_POST['address']),
                mysqli_real_escape_string($CN, $_POST['bday']),
                mysqli_real_escape_string($CN, $_POST['age']),
                mysqli_real_escape_string($CN, $_POST['weight']),
                mysqli_real_escape_string($CN, $_POST['height']),
                mysqli_real_escape_string($CN, $_POST['gen']),
                mysqli_real_escape_string($CN, $_POST['email']),
                mysqli_real_escape_string($CN, $_POST['uname']),
                mysqli_real_escape_string($CN, $pass),
                mysqli_real_escape_string($CN, 'Student'),
                mysqli_real_escape_string($CN, 'Active'),
                mysqli_real_escape_string($CN, 'Yes'),
                mysqli_real_escape_string($CN, $dt),
                mysqli_real_escape_string($CN, $dt));
        executeQuery($query);


        // $weight = $_POST['weight'];
        // $height = $_POST['height'];

        // $heightInMeters = $height / 100;
        // $weightInKg = $weight / 2.20462;

        // $bmi = $weightInKg / ($heightInMeters * $heightInMeters);

        // if ($bmi < 18.5) {
        // $res = "Underweight";
        // } elseif ($bmi >= 18.5 && $bmi < 22.9) {
        // $res = "Normal weight";
        // } elseif ($bmi >= 23 && $bmi < 24.9) {
        // $res = "Overweight";
        // } 
        
        // else {
        // $res = "Obese";
        // }


        // $query2 = sprintf("INSERT into bmi_tbl VALUES (NULL,'%s','%s','%s','%s','%s','%s','%s')",
               
        //         mysqli_real_escape_string($CN, $id),
        //         mysqli_real_escape_string($CN, $_POST['age']),
        //         mysqli_real_escape_string($CN, $_POST['weight']),
        //         mysqli_real_escape_string($CN, $_POST['height']),
        //         mysqli_real_escape_string($CN, $bmi),
        //         mysqli_real_escape_string($CN, $res),
        //         mysqli_real_escape_string($CN, $dt));
        // executeQuery($query2);



        $_SESSION['success_accounts'] = "Accounts Successfully Inserted.";



        header('Location: login.php');
?>