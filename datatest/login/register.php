<?php
require_once "data.php";

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$confirm_password = trim($_POST["confirm_password"]);

if ($password !== $confirm_password) {
    header ("location: index2.php?your passwords dont mate");
} else {
    $insert = "INSERT INTO test (username,password) VALUES ('{$username}','{$password}')";
    mysqli_query($conn, $insert);
}

?>
