<?php

// $connect = mysqli_connect("localhost", "root", "YES", "online voting system",) or die ("connection failed!"); 
// $connect = mysqli_connect("localhost", "root", "", "online voting system", 3307 or die("connection failed!");
$connect = mysqli_connect("localhost", "root", "", "online voting system", 3307) or die("connection failed!");


 if($connect){
    echo"connected!";
 }
 else{
    echo"YESt connected!";
 }

 

?>