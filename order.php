<?php
$page_title = 'Place an Order';
include 'header.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page
    header('Location: login.php');
    exit;
}

// Get the service ID from the URL
$service_id = $_GET['service_id'];

// Query the database to get the service details
$query = "SELECT * FROM services WHERE id = '$service_id'";
$result = mysqli_query($conn, $query);

// Check if the service exists
if (mysqli_num_rows($result) > 0) {
    // Get the service details
    $service = mysqli_fetch_assoc($result);
} else {
    // Display an error message
    echo 'Service not found';
    exit;
}
?>

<section>
    <h1>Place an Order</h1>
    <form action="order-process.php" method="post">
        <label for="service">Service:</label>
        <input type="text" id="service" name="service" value="<?php echo $service['name']; ?>" readonly><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity"><br><br>
        <label for="link">Link:</label>
        <input type="text" id="link" name="link"><br><br>
        <input type="submit" value="Place Order">
    </form>
</section>

<?php include 'footer.php'; ?>
