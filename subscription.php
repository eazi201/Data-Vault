<?php 
// Database connection
$connection = mysqli_connect('localhost','root','','datavault');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


$query = mysqli_query($connection, "SELECT * FROM payment_info");

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
            <li class="fad fa-chart-pie-alt"><a href="message_board.php">Messages</a></li>
            <li class="fad fa-chart-pie-alt"><a href="#">Payments</a></li>
            <li class="fad fa-chart-pie-alt"><a href="#">Subscription</a></li>
            <li class="fad fa-chart-pie-alt"><a href="#">Report</a></li>
            <li class="fad fa-chart-pie-alt"><a href="index.html">Back To Home</a></li>
        </div>
    </section>
    <div class="card-container">
        <div class="card">
            <div class="card-content">
                <h3>Subscibers</h3>
                <table border="1">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Status</th>
                        <th>Payment method</th>
                        <th>Plan</th>
                        <th>Report time</th>
                        <th>Amount</th>

                    </tr>
                    <?php 
                    
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['full_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['city']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['status']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['payment_method']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['plan']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['report_time']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['amount']) . "</td>";
                        echo "</tr>";
                    }
                    ?>
                    
                </table>
                <hr>
            </div>
        </div>
    </div>
</body>
</html>
