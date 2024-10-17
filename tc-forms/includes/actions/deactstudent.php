<?php
require '../../php/app.php';

// error_reporting(E_ALL);

$studentID = $_POST['student_id'];


$query = sprintf("UPDATE accounts_tbl set Status = '%s' WHERE AID = '%s'",
                mysqli_real_escape_string($CN, 'Deactivated'),
                mysqli_real_escape_string($CN, $studentID));

        executeQuery($query);


// echo 'helloworld';

        $_SESSION['success_deactivated'] = "Accounts Successfully Deactivated.";

        header('Location: ../../tc-students.php');
?>