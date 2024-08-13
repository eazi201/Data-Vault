<?php 
// Database connection
$connection = mysqli_connect('localhost','root','','datavault');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


$query = mysqli_query($connection, "SELECT * FROM contact");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="dashStyle.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>
    <section id="menu">
        <div class="logo">
            <a href="index.html">
                <img src="images/D2.svg" alt="">
            </a>
            <h1>Admin</h1>
        </div>
        <div class="items">
            <li class="fad fa-chart-pie-alt"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="fad fa-chart-pie-alt"><a href="#">Users</a></li>
            <li class="fad fa-chart-pie-alt"><a href="#">Messages</a></li>
            <li class="fad fa-chart-pie-alt"><a href="#">Payments</a></li>
            <li class="fad fa-chart-pie-alt"><a href="subscription.php">Subscription</a></li>
            <li class="fad fa-chart-pie-alt"><a href="#">Report</a></li>
            <li class="fad fa-chart-pie-alt"><a href="index.html">Back To Home</a></li>
        </div>
    </section>
    <div class="card-container">
    <?php 
    while ($row = mysqli_fetch_assoc($query)) {
        echo '<div class="card">';
        echo '<div class="card-content">';
        echo '<h3>' . htmlspecialchars($row['subject']) . '</h3>';
        echo '<p><strong>Name:</strong> ' . htmlspecialchars($row['name']) . '</p>';
        echo '<p><strong>Email:</strong> ' . htmlspecialchars($row['email']) . '</p>';
        echo '<p><strong>Message:</strong> ' . htmlspecialchars($row['message']) . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>

        </div>
    </div>
</body>
</html>
