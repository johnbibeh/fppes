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



//GET ACCOUNTS FUNCTIONS
function GetAllAccount(){
    $list = array();
    global $CN;
    $query = "SELECT * from accounts_tbl";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetCountAccount(){
    $list = array();
    global $CN;
    $query = "SELECT count(Status) as gca from accounts_tbl where Status = 'Active' and UserType='Customer'";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetAccountByAID($aid){
    $list = array();
    global $CN;
    $query = "SELECT * from accounts_tbl where AID = '".$aid."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetAccountByEmail($email){
    $list = array();
    global $CN;
    $query = "SELECT * from accounts_tbl where Email = '".$email."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetAccountByUserType($type){
    $list = array();
    global $CN;
    $query = "SELECT * from accounts_tbl where UserType = '".$type."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

//--------------------------------------------------------------------------------//



//GET BMI FUNCTIONS

function GetBMIbyId($id){
    $list = array();
    global $CN;
    $query = "SELECT * from bmi_tbl where student_id = '".$id."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

//GET BRGY FUNCTIONS
function GetAllBrgy(){
    $list = array();
    global $CN;
    $query = "SELECT * from brgy_tbl";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetCountBrgy(){
    $list = array();
    global $CN;
    $query = "SELECT count(BID) as gcb from brgy_tbl";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetBrgyByID($bid){
    $list = array();
    global $CN;
    $query = "SELECT * from brgy_tbl where BID = '".$bid."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetBrgyByBrgy($brgy){
    $list = array();
    global $CN;
    $query = "SELECT * from brgy_tbl where Brgy = '".$brgy."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetBrgyByStatus($stat){
    $list = array();
    global $CN;
    $query = "SELECT * from brgy_tbl where Status = '".$stat."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetBrgyLocation($lat,$long){
    $list = array();
    global $CN;
    $query = "SELECT * from brgy_tbl where Lat = '".$lat."' and Longt = '".$long."'   ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}


//--------------------------------------------------------------------------------//




// GET DRIVER FUNCTION !!
function GetAllDriver(){
    $list = array();
    global $CN;
    $query = "SELECT * from driver_tbl";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetCountDriver(){
    $list = array();
    global $CN;
    $query = "SELECT count(DID) as gcd from driver_tbl";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}   

function GetDriverByID($did){
    $list = array();
    global $CN;
    $query = "SELECT * from driver_tbl where DID = '".$did."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}


//--------------------------------------------------------------------------------//


//GET OFFICER FUNCTION !!
function GetAllOfficer(){
    $list = array();
    global $CN;
    $query = "SELECT * from officer_tbl";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetCountOfficer(){
    $list = array();
    global $CN;
    $query = "SELECT count(OFID) as gco from officer_tbl";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}   

function GetOfficerByID($ofid){
    $list = array();
    global $CN;
    $query = "SELECT * from officer_tbl where OFID = '".$ofid."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}


//--------------------------------------------------------------------------------//





function GetAllReport(){
    $list = array();
    global $CN;
    $query = "SELECT * from report_tbl";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}


function GetCountReport(){
    $list = array();
    global $CN;
    $query = "SELECT count(RID) as gcr from report_tbl";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}   

function GetReportByID($rid){
    $list = array();
    global $CN;
    $query = "SELECT * from report_tbl where RID = '".$rid."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetReportByWho($who){
    $list = array();
    global $CN;
    $query = "SELECT * from report_tbl where ReportBy = '".$who."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetReportByBrgy($brgy){
    $list = array();
    global $CN;
    $query = "SELECT * from report_tbl where Brgy = '".$brgy."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}


function GetReportByStatus($stat){
    $list = array();
    global $CN;
    $query = "SELECT * from report_tbl where Status = '".$stat."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

//--------------------------------------------------------------------------------//



function GetAllSchedule(){
    $list = array();
    global $CN;
    $query = "SELECT * from schedule_tbl";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetCountSchedule(){
    $list = array();
    global $CN;
    $query = "SELECT count(SID) as gcs from schedule_tbl";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}   

function GetSchedBySID($sid){
    $list = array();
    global $CN;
    $query = "SELECT * from schedule_tbl where SID = '".$sid."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetSchedByAID($aid){
    $list = array();
    global $CN;
    $query = "SELECT * from schedule_tbl where AID = '".$aid."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetSchedByDID($did){
    $list = array();
    global $CN;
    $query = "SELECT * from schedule_tbl where DID = '".$did."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}


function GetSchedByTID($tid){
    $list = array();
    global $CN;
    $query = "SELECT * from schedule_tbl where TID = '".$tid."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}


function GetSchedByBID($bid){
    $list = array();
    global $CN;
    $query = "SELECT * from schedule_tbl where BID = '".$bid."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetSchedByRID($rid){
    $list = array();
    global $CN;
    $query = "SELECT * from schedule_tbl where RID = '".$rid."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetSchedByType($type){
    $list = array();
    global $CN;
    $query = "SELECT * from schedule_tbl where SchedType = '".$type."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetSchedByStatus($stat){
    $list = array();
    global $CN;
    $query = "SELECT * from schedule_tbl where Status = '".$stat."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

//--------------------------------------------------------------------------------//


//GET TRUCK FUNCTION ./.
function GetAllTruck(){
    $list = array();
    global $CN;
    $query = "SELECT * from truck_tbl";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}

function GetCountTruck($stat){
    $list = array();
    global $CN;
    $query = "SELECT count(Status) as gct from truck_tbl where Status = '".$stat."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}   

function GetTruckByID($tid){
    $list = array();
    global $CN;
    $query = "SELECT * from officer_tbl where TID = '".$tid."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}


function GetTruckByDID($did){
    $list = array();
    global $CN;
    $query = "SELECT * from officer_tbl where AssignDriver = '".$did."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}


function GetTruckByStatus($stat){
    $list = array();
    global $CN;
    $query = "SELECT * from officer_tbl where Status = '".$stat."' ";
    $sql = mysqli_query($CN, $query);
    while($row = mysqli_fetch_array($sql)){array_push($list, $row);}
    return $list;
}


//--------------------------------------------------------------------------------//

//INSERTING DATA FUNCTION


?>