<?php
// Start the session
session_start();

// Include the configuration file
require_once 'includes/config.php';

// Include the database file
require_once 'includes/db.php';

// Define the page title
$page_title = 'Nsmboost - Social Media Marketing Platform';

// Include the header file
include 'pages/header.php';

// Include the content file
include 'pages/index-content.php';

// Include the footer file
include 'pages/footer.php';
?>
