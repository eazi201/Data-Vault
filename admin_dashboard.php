<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="dashStyle.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<body>
    <section id="menu">
        <div class="logo">
            <a href="index.html">
            <img src="images/D2.svg" alt="">
        </a>
            <h1>Admin</h1>
        </div>
        <div class="items">
            <li i class="fad fa-chart-pie-alt"><a href="#">Dashboard</a></li>
            <li i class="fad fa-chart-pie-alt"><a href="#">Users</a></li>
            <li i class="fad fa-chart-pie-alt"><a href="message_board.php">Messages</a></li>
            <li i class="fad fa-chart-pie-alt"><a href="#">Payments</a></li>
            <li i class="fad fa-chart-pie-alt"><a href="subscription.php">Subscription</a></li>
            <li i class="fad fa-chart-pie-alt"><a href="#">Report</a></li>
            <li i class="fad fa-chart-pie-alt"><a href="index.html">Back To Home</a></li>
            
        </div>

    </section>
    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div class="search">
                    <i class="fa fa-search" ></i>
                    <input type="text" placeholder="search">
                </div>
            </div>
            <div class="profile">
                <i class="fa fa-bell"></i>
                <img src="images/pro3.webp" alt="">
            </div>
        </div>
        <h3 class="i-name">
            Dashboard
        </h3>
        <div class="values">
            <div class="val-box">
                <i class="fa fa-users"></i>
                <div>
                    <h3>367</h3>
                    <span>New Users</span>

                </div>
            </div>
            <div class="val-box">
                <i class="fa fa-address-card"></i>
                <div>
                    <h3>540</h3>
                    <span>Subscription</span>

                </div>
            </div>
            <div class="val-box">
                <i class="fa fa-users"></i>
                <div>
                    <h3>97</h3>
                    <span>Maintanance</span>

                </div>
            </div>
            <div class="val-box">
                <i class="fa fa-microchip" aria-hidden="true"></i>
                <div>
                    <h3>7</h3>
                    <span>Jobs</span>

                </div>
            </div>
        </div>
        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Title</td>
                        <td>plan</td>
                        <td>status</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="people">
                            <img src="images/pro4.webp" alt="">
                            <div class="people-de">
                                <h5>Mwebazi</h5>
                                <p>Mwebazi@gmail.com</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>Data Science</h5>
                            <p>Client</p>
                        </td>
                        <td class="role">
                            <p>premium</p>

                        </td>
                        <td class="active"><p>Active</p></td>
                       
                        <td class="edit"><a href="#"></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php
$connection = mysqli_connect('localhost', 'root', '', 'datavault');

$query = mysqli_query( $connection, "SELECT * FROM user");

if ($query) {
    echo "<div class='board'>
            <table width='100%'>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Title</td>
                        <td>Plan</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>";
    
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>
                <td class='people'>
                    <img src='images/pro4.webp' alt=''>
                    <div class='people-de'>
                        <h5>" . $row['username'] . "</h5>
                        <p>" . $row['email'] . "</p>
                    </div>
                </td>
                <td class='people-des'>
                    <h5>" . $row['role'] . "</h5>
                    <p>Client</p>
                </td>
                <td class='role'>
                    <p>" . $row['level'] . "</p>
                </td>
                <td class='active'><p>Active</p></td>
                <td class='edit'><a href='#'></a></td>
            </tr>";
    }
    
    echo "</tbody></table></div>";
} else {
    echo "<p>No users found.</p>";
}
?>

    </section>
</body>
</html>