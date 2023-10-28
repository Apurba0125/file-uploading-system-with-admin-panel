<?php
session_start();
function db_connect($sql_statement){
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="filesystem";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($conn){
    // echo("success<br>");
    
}
else{
    die("sorry,database not established ");
}
$result=mysqli_query($conn,$sql_statement);
mysqli_close($conn);
return $result;
}
?>