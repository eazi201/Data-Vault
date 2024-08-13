<?php 
$connection = mysqli_connect('localhost','root','','datavault');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link rel="stylesheet" href="style.css">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    </head>

    <body>

        
       <nav><a href="index.html">
        <img src="images/D2.svg" alt=""></a>
        <div class="navigation">
            <ul>
                <li><a  href="index.html">Home</a></li>
                <li><a  href="about.html">About</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="features.html">Features</a></li>
                <li><a class="active" href="#">Contact US</a></li>
                <li><a class="started" href="signup.html">Get Started</a></li>
            </ul>
        </div>
       </nav>
       <section id="about-home">
        <h2>Contact US </h2>   
    </section>
    <section id="contact">
        <div class="getin">
            <h2>Get in Touch</h2>
            <p>Looking for help? Fill the form and start new adventure</p>
            <div class="getin-details">
                <h3>Headquaters</h3>
                <div>
                    <i class="far fa-home get"></i>
                    <p>KK 151 st Kicukiro Ave ,Kanombe, Kajagari 10224</p>
                </div>
                <h3>Phone Numbers</h3>
                <div>
                    <i class="fas fa-phone-alt get"></i>
                    <p>(+250) 784 742 035</p>
                </div>
                <h3>Support</h3>
                <div>
                    <i class="far fa-envelope-open-text get"></i>
                    <p>datavault@support.com</p>
                </div>
                <h3>Follow us</h3>
                <div class="pro-links">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>

        </div>
        <div class="form" >
            <h4>Let's Connect</h4>
            <P>We F need you so Bad!</P>
            <form method="POST">
            <div class="form-row">
                <input type="text" name="name" placeholder="Your Name">
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="form-col">
                <input type="text" name="subject" placeholder="Subject">
            </div>
            <div class="form-col">
                <textarea name="message" id="" cols="30" rows="8" placeholder="Message"></textarea>
            </div>
            <div class="form-col">
                <button type="submit" name="submit">Send Message</button>
            </div>
        </form>
            <?php 
                 
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                 $email = $_POST['email'];
                 $usersubject = $_POST['subject'];
                 $usermessage = $_POST['message'];

                 $query = mysqli_query($connection,"INSERT INTO contact VALUES('','$name','$email','$usersubject','$usermessage')");

                 if($query){
                    echo "<script>alert('Your Information is Received Successfully.    click ok!! to continue...')</script>";
                 }
                 else{
                    echo "<script>alert('Error. click ok!! to continue...   ')</script>";
                 }
   
                 } ?>   
        </div>
    </section>
    <section id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15949.828192965992!2d30.131571484637135!3d-1.9713126522549755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca78db3bbeedd%3A0xd5a8bc02dc3aa4c7!2sRugali%2C%20Kigali!5e0!3m2!1sen!2srw!4v1723130225308!5m2!1sen!2srw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

 
   
    
        <footer>
            <div class="footer-col">
                <h3>Top Product</h3>
                <li>Manage Reputation</li>
                <li>Power Tools</li>
                <li>Manage Website</li>
                <li>Statistical Services</li>
            </div>
            <div class="footer-col">
                <h3>Top Product</h3>
                <li>Manage Reputation</li>
                <li>Power Tools</li>
                <li>Manage Website</li>
                <li>Statistical Services</li>
            </div>
            <div class="footer-col">
                <h3>Top Product</h3>
                <li>Manage Reputation</li>
                <li>Power Tools</li>
                <li>Manage Website</li>
                <li>Statistical Services</li>
            </div>
            <div class="footer-col">
                <h3>Top Product</h3>
                <li>Manage Reputation</li>
                <li>Power Tools</li>
                <li>Manage Website</li>
                <li>Statistical Services</li>
            </div>
            <div class="footer-col">
                <h3>Newsletter</h3>
                <p>You can Trust Us</p>
                <div class="subscribe">
                    <input type="text" placeholder="Your Email address">
                    <a href="#" class="yellow">SUBSCRIBE</a>
                </div>
                
            </div>
<div class="copyright">
     <p>Copyright &copy;2024 All right reserved | Data Vault</p>
     <div class="pro-links">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin-in"></i>
     </div>
</div>
        </footer>


        <script>


        </script>


    </body>

</html>