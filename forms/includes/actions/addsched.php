<?php
require '../../php/app.php';


$query = sprintf("INSERT into sched_tbl VALUES (NULL,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','')",
               
                mysqli_real_escape_string($CN, $_POST['TID']),
                mysqli_real_escape_string($CN, $_POST['Stype']),
                mysqli_real_escape_string($CN, $_POST['ttype']),
                mysqli_real_escape_string($CN, $_POST['Day']),
                mysqli_real_escape_string($CN, $_POST['Location']),
                mysqli_real_escape_string($CN, $_POST['Sstart']),
                mysqli_real_escape_string($CN, $_POST['Send']),
                mysqli_real_escape_string($CN, $_POST['Drivername']),
                mysqli_real_escape_string($CN, $_POST['contact']),
                mysqli_real_escape_string($CN, 'Pending'));
        executeQuery($query);

header('Location: ../../sched.php');
?>