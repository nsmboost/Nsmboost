<?php
$page_title = 'Login';
include 'header.php';
?>

<section>
    <h1>Login</h1>
    <form action="login-process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</section>

<?php include 'footer.php'; ?>
