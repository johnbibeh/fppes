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

function executeQuery($squery){
    global $CN;
    return mysqli_query($CN, $squery) or die (mysql_error());
}


function checkLogin($username,$password,$email){
    $list = array();
    $pass = md5($password);
    global $CN;
    $query = "SELECT * from accounts_tbl where Username ='" . $username ."' and Password = '". $pass ."' and Email = '". $email ."' and Status='Active'";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    // return $query;
    return $list;
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


// USERACCOUNT

function GetAccountByUserType($type){
    $list = array();
    global $CN;
    $query = "SELECT * from accounts_tbl where UserType = '".$type."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}


function GetCountUser($type, $status){
    $list = array();
    global $CN;
    $query = "SELECT count(AID) as accnumber from accounts_tbl where Usertype = '".$type."' AND Status = '".$status."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}



// STUDENTS





// BMI

function GetBMIbyId($id){
    $list = array();
    global $CN;
    $query = "SELECT * from bmi_tbl where student_id = '".$id."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}