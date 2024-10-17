  

<?php 
include '../../../forms/php/app.php';


$rid = generateRandomString();
$dt = date("Y-m-d h:i:sa");
$sender = $_SESSION['b80bb7740288fda1f201890375a60c8f']; //id of sender
$bgy = $_POST['brgy'];
$mess = $_POST['mess'];


  $name = $_FILES['file']['name'];
   $target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["file"]["name"]);

   // Select file type
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   // Valid file extensions
   $extensions_arr = array("jpg","jpeg","png","gif");

   // Check extension
   if( in_array($imageFileType,$extensions_arr) ){

    // Convert to base64 
    //$image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
    //$image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
  // $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    
    // Insert record
    $query = "insert into report_tbl(RID,ReportBy,Brgy,Proved,Mess,Status,created_date,updated_date) values('".$rid."','".$sender."','".$bgy."','".$target_file."','".$mess."','Pending','".$dt."','".$dt."')";

    mysqli_query($CN,$query);

    // Upload file
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
   }

   ?>