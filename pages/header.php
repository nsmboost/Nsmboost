<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php if (isset($_SESSION['user_id'])) { ?>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php } else { ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
