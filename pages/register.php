<?php
$page_title = 'Register';
include 'header.php';
?>

<section>
    <h1>Register</h1>
    <form action="register-process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password"><br><br>
        <input type="submit" value="Register">
    </form>
</section>

<?php include 'footer.php'; ?>
