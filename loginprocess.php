
<?php 
error_reporting(0);
include 'tc-forms/php/app.php'; if(loggedIn()){ header('Location: index.php'); }
    if(isset($_POST['uname'])){
        $user = checkLogin($_POST['uname'],$_POST['pword'],$_POST['email']);

    
        if(!empty($user)){
            $u = array_shift($user);
            $_SESSION['b80bb7740288fda1f201890375a60c8f'] = $u['AID'];
            $_SESSION['4040592cec1880aa70936989f05e7c31'] = $u['Email'];
            $_SESSION['14c4b06b824ec593239362517f538b29'] = $u['Username'];
            $_SESSION['usertype'] = $u['Usertype'];




if($u['Usertype'] == 'Admin'){


          header('Location: /FPPES/');
        


}
elseif ($u['Usertype'] == 'Student') {
   header('Location: /FPPES/st-forms/st-dashboard.php');
         # code...

}
elseif ($u['Usertype'] == 'Teacher') {
   header('Location: /FPPES/tc-forms/tc-dashboard.php');
         # code...
}






        }elseif(empty($user)){
          
            $_SESSION['err'] = 'Invalid Creds';
        


          header('Location: Home.php');
        


        }}
?>
