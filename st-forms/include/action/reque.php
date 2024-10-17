<?php 

include '../../../forms/php/app.php';

$rid = generateRandomString();
$dt = date("Y-m-d h:i:sa");
$sender = $_SESSION['b80bb7740288fda1f201890375a60c8f']; //id of sender
$bgy = $_POST['brgy'];
$mess = $_POST['mess'];

$image = addslashes(file_get_contents($_FILES['images']['tmp_name']));
 $query = "insert into report_tbl(RID,ReportBy,Brgy,Proved,Mess,Status,created_date,updated_date) values('".$rid."','".$sender."','".$bgy."','".$image."','".$mess."','Pending','".$dt."','".$dt."')";

    mysqli_query($CN,$query);
    header('location: /WAZE/ct-forms/sreport.php');
?>
