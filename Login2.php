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
    <link rel="stylesheet" href="styleLogin2.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body>
   <div class="container">
    <div class="form-box">
        <h1>Lets Go!</h1>
        <form method="POST">
            <div class="input-group">
                <div class="input-filed">
                
                <input type="name" name="username" placeholder="Username" required>
               </div>
            
           
                <div class="input-filed">
                
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <p><a href="signup.php">Don't have account! </a></p>
            </div>
          <div class="btn-field">
           <button type="submit" name="user">Login</button>
            <button type="submit" name="admin" value="admin">Admin</button>
            </div>
        </form>

        <?php 
                 
                 if (isset($_POST['user'])) {
                     $username = $_POST['username'];
                      $password = $_POST['password'];
                   
     
                      $stmt = $connection->prepare("SELECT * FROM user WHERE username = '$username' LIMIT 1");
                      if($stmt){
                        echo "<script>alert('Login successful! Redirecting to your dashboard...'); window.location.href = 'user_dashboard.php';</script>";
                     }
                     else{
                        echo "<script>alert('Error. click ok!! to continue...   ')</script>";
                     }
                    }
                    if (isset($_POST['admin'])) {
                        $username = $_POST['username'];
                         $password = $_POST['password'];
                      
        
                         $stmt = $connection->prepare("SELECT * FROM admin WHERE username = '$username' LIMIT 1");
                         if($stmt){
                           echo "<script>alert('Login successful! Redirecting to your dashboard...'); window.location.href = 'admin_dashboard.php';</script>";
                        }
                        else{
                           echo "<script>alert('Error. click ok!! to continue...   ')</script>";
                        }
                       }
                       ?>   

    </div>
   </div> 
</body>
</html>