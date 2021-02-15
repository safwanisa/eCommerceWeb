<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Style Shop</title>
    <link rel="stylesheet" href="style.css"></link>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://kit.fotnawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="header1">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.png" width="175px">
            </div>
            <nav>
                <ul>
                    <li><a href="frontpage.php">Home</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <a href="#"><img src="images/cart.png" width="30px" height="30px"></a>
        </div>
    </div>
</div>

<div class="container">
    <div class="form">
        <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
                Your opinion matters!
            </p>
            <div class="information">
                <img src="images/location.png" class="icon" alt="">
                <p>34700, Simpang, Perak</p>
            </div>
            <div class="information">
                <img src="images/email.png" class="icon" alt="">
                <p>styleshop@mail.com</p>
            </div>
            <div class="information">
                <img src="images/phone.png" class="icon" alt="">
                <p>05-8471852</p>
            </div>        

        <div class="social-media">
            <p>Connect with us at :</p>
            <div class="social-icons">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
        </div>

        <div class="contact-form">
        <form>
            <h3 class="title">Contact Us</h3>
            <div class="input-container">
                <input type="text" name="name" class="input">
                <label for="">Username</label>
                <span>Username</span>
            </div>
            <div class="input-container">
                <input type="email" name="email" class="input">
                <label for="">Email</label>
                <span>Email</span>
            </div>
            <div class="input-container">
                <input type="tel" name="phone" class="input">
                <label for="">Phone Number</label>
                <span>Phone Number</span>
            </div>
            <div class="input-container textarea">
                <textarea type="text" name="message" class="input" placeholder="Message"></textarea>                
            </div>
            <input type="submit" value="Send" class="btn">
            </div>
        </form>      
    </div>
</div>
<footer>
    <div class="container">
        <div class="sec aboutus">
                <h2>About Us</h2>
                <p>Style is defined as a particular of doing or saying something, or refers to a unique form of clothing or way of arranging your appearance. 
                An example of style is the method by which you learn. An example of style is speaking formally.</p>

                <ul class="sci">
                    <div class="social-icons">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
        <div class="sec quickLinks">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="frontpage.php">Homepage</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
        <div class="sec contactUs">
            <h2>Connect with Us</h2>
            <ul>
                <li><a href="#"><img src="images/location.png" class="icon" alt="">34700, Simpang, Perak</a></li>
                <li><a href="#"><img src="images/email.png" class="icon" alt="">styleshop@mail.com</a></li>
                <li><a href="#"><img src="images/phone.png" class="icon" alt="">05-8471852</a></li>
            </ul>
        </div>     
    </div>    
</footer>

<script src="app.js"></script>

</body>

</html>