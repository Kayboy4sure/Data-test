<?php
require_once "header.php";
?>

<div>
    <h1>login</h1>

    <p>welcome to the login page</p>

    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="submit">login</button>
    </form>

</div>

<?php
require_once "footer.php"
?>
