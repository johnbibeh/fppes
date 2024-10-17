<?php

session_start();
//require 'a.php';
//$db = new DB();
$CN = mysqli_connect("localhost","root","", "waste_db");




function loggedIn(){
    if (!isset($_SESSION['b80bb7740288fda1f201890375a60c8f'])){
        return false;
    }
        return true;
}

function checkLogin($username,$password,$email){
    $list = array();
    $pass = md5($password);
    global $CN;
    $query = "SELECT * from user_tbl where Username ='" . $username ."' and Password = '". $pass ."' and Email = '". $email ."' and Status='Active'";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    // return $query;
    return $list;
}

    

?>