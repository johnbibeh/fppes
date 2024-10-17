<?php
require '../../php/app.php';

$Tid = $_GET['id'];
$query = sprintf("UPDATE sched_tbl set Status = '%s' where TID = '%s'",
                mysqli_real_escape_string($CN, 'Reject'),
                mysqli_real_escape_string($CN, $Tid));
        executeQuery($query);

header('Location: ../../sched.php');
?>