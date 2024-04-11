<?php
require_once "data.php"
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $select = "SELECT * FROM test";
    $query = mysqli_query($conn, $select);
    

    while ($row = mysqli_fetch_assoc($query)) {
        echo $row["username"] . "\t" . $row["password"];
        echo "<br>";
    }

    ?>
</body>
</html>