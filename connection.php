<?php
//cretaing variable  
//use $ to create variable

$host_name="localhost";
$user_name="root";
$password="";
$db_name="db_con";


// to connect database
//use mysqli_connect

$connect=mysqli_connect($host_name,$user_name,$password,$db_name);

//to check it conneceted

// if($connect){
//     echo"Connection succesfull";
// }
// else{
//     echo"connection failed";
// }
 ?>