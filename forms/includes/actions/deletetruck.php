<?php
require '../../php/app.php';
var_dump($_POST);

$query = sprintf("DELETE from truck_tbl where TID = '%s'",
                mysqli_real_escape_string($CN, $_POST['sid']));
        executeQuery($query);
$_SESSION['success_delete_department'] = 1;
header('Location: ../../truck.php');