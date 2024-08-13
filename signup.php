<?php 
$connection = mysqli_connect('localhost','root','','datavault');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Started</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="styleLogin.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body>
   <div class="container">
    <div class="form-box">
        <h1>Sign UP</h1>
        <form method="POST">
            <div class="input-group">
                <div class="input-filed">
                
                <input type="text" name="name" placeholder="Name" required>
               </div>
            
           
                <div class="input-filed">
                <input type="email" name="email" placeholder="Email" required>
            </div>
           
                <div class="input-filed">
                
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-filed">
                
                <select name="role" required>
                    <option value="" disabled selected>Select Role</option>
                    <option value="Client">Client</option>
                    <option value="Admin">Moderator</option>
                    
                </select>
            </div>
            <div class="input-filed">
               
                <select name="level" required>
                    <option value="" disabled selected>Select Level</option>
                    <option value="personal">Personal</option>
                    <option value="company">Company</option>
                </select>
            </div>
            <p><a href="Login2.php">Already have account</a></p>
        </div>
        <div class="btn-field">
            <button type="button">Sign Up</button>
        </div>
        </form>
        <?php
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $level = $_POST['level'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($connection, "INSERT INTO users (name, email, password, role, level) VALUES ('$name', '$email', '$hashedPassword', '$role', '$level')");

    if ($query) {
        echo "<script>alert('Signup Successful!');</script>";
        // Redirect to another page if needed
    } else {
        echo "<script>alert('Signup Failed. Try Again.');</script>";
    }
}
?>

    </div>
   </div> 
</body>
</html>