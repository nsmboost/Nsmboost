<?php
$page_title = 'Dashboard';
include 'header.php';
?>

<section>
    <h1>Dashboard</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
</section>

<?php include 'footer.php'; ?>
