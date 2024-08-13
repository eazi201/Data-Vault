<?php 
$connection = mysqli_connect('localhost','root','','datavault');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="paymentcss.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form action="" method="POST">
           
            <h4>Account</h4>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="full_name" placeholder="Full Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                
                
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="email" name="email" placeholder="Email Address" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="address" placeholder="Address" required class="name">
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="city" placeholder="City" required class="name">
                    <i class="fa fa-institution icon"></i>
                </div>
            </div>
            


           
            <div class="input_group">
                
                <div class="input_box">
                    <h4>Status</h4>
                    <input type="radio" name="person" class="radio" id="b1" value="personal" checked>
                    <label for="b1">personal</label>
                    <input type="radio" name="person" class="radio" id="b2" value="Company">
                    <label for="b2">Company</label>
                </div>
            </div>


            
            <div class="input_group">
            <div class="input_box">
        <h4>Payment Details</h4>
        <input type="radio" name="pay" class="radio" id="bc1" value="Mobile Money" checked>
        <label for="bc1"><span>Mobile Money</span></label>
        <input type="radio" name="pay" class="radio" id="bc2" value="Credit Card">
        <label for="bc2"><span>Credit Card</span></label>
    </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <select name="plan" class="name" required>
                        <option value="" disabled selected>Select your Plan</option>
                        <option value="basic">Basic Plan</option>
                        <option value="premium">Premium Plan</option>
                        <option value="enterprise">Enterprise Plan</option>
                        <option value="Advanced Anlytics">Advanced Analytics</option>

                    </select>
                    <i class="fa fa-plus-circle icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <select name="report_time" class="name" required>
                        <option value="" disabled selected>Types of Data</option>
                        <option value="Daily">Transactional</option>
                        <option value="Weekly">Master</option>
                        <option value="Monthly">Metadata</option>
                        <option value="Monthly">Aggregated Data</option>
                        <option value="Monthly">Reference Data</option>
                        <option value="Monthly">Operational Data</option>
                    </select>
                    <i class="fa fa-leaf icon"></i>
                </div>
            </div>
           
            <div class="input_box">
                <input type="number" name="amount" placeholder="Enter Amount" required class="name">
                <i class="fa fa-money icon" aria-hidden="true"></i>
            </div>

            <div class="input_group">
                <div class="input_box">
                    <button type="submit" name="submit">PAY NOW</button>
                </div>
                
            </div>

        </form>
        <?php


if (isset($_POST['submit'])) {
   
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $status = $_POST['person'];
    $payment_method = $_POST['pay'];
    $plan = $_POST['plan'];
    $report_time = $_POST['report_time'];
    $amount = $_POST['amount'];

    $stmt = $connection->prepare ("INSERT INTO payment_info (full_name, email, address, city, status, payment_method, plan, report_time, amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssd", $full_name, $email, $address, $city, $status, $payment_method, $plan, $report_time, $amount);

    if ($stmt->execute()) {
        echo "<script>alert('Payment successful successful! Redirecting to your dashboard...'); window.location.href = 'user_dashboard.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connection->close();
}
?>

    </div>

</body>

</html>
        