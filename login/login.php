<?php
require_once "data.php"
?>

<?php
  
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$select = "SELECT * FROM test WHERE username = '{$username}' AND password = '{$password}' ";

$query = mysqli_query($conn, $select);

$count = mysqli_num_rows($query);

if ($count > 0) {
    echo "you are log in";
} else {
    header("location:index.php?you_have_enter_an_invalid_info");
}

?>
