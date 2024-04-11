<?php

$dbhost = "localhost"; 
$dbuser = "root";
$dbpass = "";
$dbname = "testtable";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn){
    die ("it was unable to connect");
}

?>