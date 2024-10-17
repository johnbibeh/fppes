<?php
require '../../php/app.php';

// error_reporting(E_ALL);

$studentID = $_POST['student_id'];


$query = sprintf("UPDATE accounts_tbl set Status = '%s' WHERE AID = '%s'",
                mysqli_real_escape_string($CN, 'Active'),
                mysqli_real_escape_string($CN, $studentID));

      executeQuery($query);


        

// echo 'helloworld';

        $_SESSION['success_activated'] = "Accounts Successfully Activated.";

        header('Location: ../../tc-students.php');
?>