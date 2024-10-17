<?php

session_start();

if($_SESSION['usertype'] == 'Admin'){
  header('Location: /FPPES/');

}
elseif ($_SESSION['usertype'] == 'Student') {
header('Location: /FPPES/st-forms/st-dashboard.php');
 # code...

}
elseif ($_SESSION['usertype'] == 'Teacher') {
header('Location: /FPPES/tc-forms/tc-dashboard.php');
 # code...
}

?>