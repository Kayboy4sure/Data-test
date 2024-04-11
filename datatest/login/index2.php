<?php
require_once "header.php";
?>

<div>
    <h1>login</h1>

    <p>welcome to the login page</p>

    <form action="register.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="confirm_password" placeholder="confirm_password">
        <button type="submit" name="submit">register</button>
    </form>

</div>

<?php
require_once "footer.php"
?>