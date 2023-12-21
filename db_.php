<?php

$serverName="locahost";
$username="root";
$password= "";
$dbName= "reg";

$con = mysqli_connect($serverName, $username, $password, $dbName);
if(mysqli_connect_errno()){
    echo "Failed to connect!";
    exit();
}
echo  "Connection Success!";
?>