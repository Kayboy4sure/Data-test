<?php

$dbhost = "localhost"; 
$dbuser = "root";
$dbpass = "";
$dbname = "testtable";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if ($conn){
    echo "the connection was successful <br>";
} else {
    die ("it was unable to connect");
}

?>