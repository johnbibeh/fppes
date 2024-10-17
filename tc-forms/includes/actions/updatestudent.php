<?php
require '../../php/app.php';

// error_reporting(E_ALL);

$dt = date("Y-m-d h:i:sa");

$studentID = $_POST['student_id'];
$fname = $_POST['st_fname'];
$mname = $_POST['st_mname'];
$lname = $_POST['st_lname'];
$address = $_POST['st_address'];
$bday = $_POST['st_bdate'];
$age = $_POST['st_age'];
$weight = $_POST['st_weight'];
$height = $_POST['st_height'];
$gender = $_POST['st_gender'];


$query = sprintf("UPDATE accounts_tbl set Fname = '%s', Mname = '%s', Lname = '%s', Address = '%s', Bday = '%s', Age = '%s', Weight = '%s', Height = '%s', Gender = '%s', date_updated = '%s' WHERE AID = '%s'",
                mysqli_real_escape_string($CN, $fname),
                mysqli_real_escape_string($CN, $mname),
                mysqli_real_escape_string($CN, $lname),
                mysqli_real_escape_string($CN, $address),
                mysqli_real_escape_string($CN, $bday),
                mysqli_real_escape_string($CN, $age),
                mysqli_real_escape_string($CN, $weight),
                mysqli_real_escape_string($CN, $height),
                mysqli_real_escape_string($CN, $gender),
                mysqli_real_escape_string($CN, $dt),
                mysqli_real_escape_string($CN, $studentID));

      executeQuery($query);



      $heightInMeters = $height / 100;
      $weightInKg = $weight / 2.20462;

    

      $bmi = $weightInKg / ($heightInMeters * $heightInMeters);

      if ($bmi < 18.5) {
      $res = "Underweight";
      } elseif ($bmi >= 18.5 && $bmi < 22.9) {
      $res = "Normal weight";
      } elseif ($bmi >= 23 && $bmi < 24.9) {
      $res = "Overweight";
      } 
      
      else {
      $res = "Obese";
      }

      $query2 = sprintf("UPDATE bmi_tbl set st_age = '%s', st_weight = '%s', st_height = '%s', st_bmi = '%s', st_status = '%s' WHERE student_id = '%s'",
      mysqli_real_escape_string($CN, $age),
      mysqli_real_escape_string($CN, $weight),
      mysqli_real_escape_string($CN, $height),
      mysqli_real_escape_string($CN, $bmi),
      mysqli_real_escape_string($CN, $res),
      mysqli_real_escape_string($CN, $studentID));

executeQuery($query2);


// echo 'helloworld';

        $_SESSION['success_update_accs'] = "Accounts Successfully Updated.";

        header('Location: ../../tc-students.php');
?>