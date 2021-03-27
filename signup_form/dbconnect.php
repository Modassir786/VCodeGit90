<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="signup_form";
//Create Connection Form and mysql Data 
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}else{
    // echo "$_________Thanks your data _connection 100% Working_________$
}
?>