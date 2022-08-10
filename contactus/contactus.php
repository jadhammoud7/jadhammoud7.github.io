<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../main/main.css">
    <link rel="stylesheet" href="../contactus/contactus.css">
    <title>Contact - Newbies Gamers</title>
</head>

<body>


    <!-- started with the menu bar -->
    <header>
        <nav class="nav-bar">
            <a href="" class="nav-branding">Newbie Gamers.</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="../home-page/home-page.html" class="home_menu nav-link" title="Home Page"> <i
                            class="fa fa-home fa-lg"></i></a>
                </li>
                <li class="nav-item">
                    <a href="../shop/shop.html" class="shop_menu nav-link" title="Shop Page"><i
                            class="fa fa-shopping-cart fa-lg"></i></a>
                </li>
                <li class="nav-item">
                    <a href="../appointments/appointments.html" class="appointments_menu nav-link"
                        title="Appointments"><i class="fa fa-wrench fa-lg"></i></a>
                </li>
                <li class="nav-item">
                    <a href="../contactus/contactus.html" class="contact_menu nav-link" title="Contact Us Page"><i
                            class="fa fa-phone fa-lg"></i></a>
                </li>
                <li class="nav-item">
                    <a href="../aboutus/aboutus.html" class="about_menu nav-link" title="About us Page"><i
                            class="fa fa-book fa-lg"></i></a>
                </li>
                <li class="nav-item">
                    <a href="../basket/basket.html" class="basket_menu nav-link" title="View my Shopping Basket"><i
                            class="fa fa-shopping-basket fa-lg"></i></a>
                </li>
                <li class="nav-item">
                    <a href="../profile/profile.html" class="myaccount_menu nav-link" title="View my account"><i
                            class="fa fa-user fa-lg" style="margin-bottom: 30px;"></i></a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

        </nav>
    </header>
    <!-- ended with the menu bar -->


    <!-- started with title page -->
    <div class="title">
        <h1 style="color: #333;">Contact</h1>
        <h5 style="color:#b4c3da;">Home / Contact</h5>
    </div>
    <!-- ended with title page -->

    <!-- started with contents -->
    <div class="contact-us-part">
        <div class="left_part reveal-by-y">
            <h2>Our Location</h2>
            <iframe class="googlemaps"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.8733853344565!2d35.4756582150602!3d33.8929145806496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f10d33335207b%3A0x576376fd4baf4902!2sLebanese%20American%20University!5e0!3m2!1sen!2slb!4v1657706136582!5m2!1sen!2slb"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" title="Our Current Location View in Google Maps"></iframe>
        </div>
        <div class="right_section reveal-by-x">
            <h2>Leave us a Comment</h2>
            <h4>Have any thoughts, concerns, or questions you would like to share to us, please write your comment, and
                we will take your comment in consideration!</h3>
                <form action="../php/comment.php" method="post" class="comment_section">
                    <textarea name="comment" id="comment" cols="50" rows="10" class="comment-input"
                        placeholder="Write your thoughts or comment here. Please be considerate. We care about your comments :)"></textarea>
                    <br>
                    <br>
                    <input type="submit" value="Submit" class="submit">
                </form>
        </div>
    </div>
    <div class="shop_info reveal-by-x" title="View all details related to our shop contact and location info">
        <h2>SHOP INFO</h2>
        <ul>
            <li>
                <p><i class="fa fa-map-marker"></i>Address: <br> Beirut, Lebanon </p>
            </li>
            <li>
                <p><i class="fa fa-phone-square"></i>Phone: <a href="tel:+961-76123123"> +961-76123123 </a></p>
            </li>
            <li>
                <p><i class="fa fa-envelope"></i>Email: <a
                        href="newbies_gamers@hotmail.com">newbies_gamers@hotmail.com</a></p>
            </li>
            <p>Working hours
                <li>Monday - Friday: 8.00 a.m. to 5.00 p.m.</li>
                <li>Saturday: 10.00 a.m. to 3.00 p.m.</li>
                <li>Sunday: <span>Closed</span></li>
            </p>
        </ul>
    </div>
    <!-- ended with contents -->

    <!-- started return to top button -->
    <button onclick="ReturnToTop()" id="TopBtn" title="Return to Top"><i class="fa fa-arrow-up"></i></button>
    <!-- ended return to top button -->


    <!-- started with footer -->
    <footer>
        <ol class="footer-list">
            <li>
                <div>
                    <ol class="footer-list-element">
                        <li>
                            <h3>Newbies Gamers Home</h3>
                        </li>
                        <li>
                            <a href="../home-page/home-page.html#features" title="View Our specialists and features">Our
                                Specialists & Features</a>
                        </li>
                        <li>
                            <a href="../home-page/home-page.html#about-us" title="Know more about us">About Us</a>
                        </li>
                        <li>
                            <a href="../home-page/home-page.html#contact-us"
                                title="Contact us for any enquiries or thoughts">Contact Us</a>
                        </li>
                        <li>
                            <a href="../home-page/home-page.html#shop-products" title="Take a look at our products">Our
                                Products</a>
                        </li>
                        <li>
                            <a href="../home-page/home-page.html#testimonials"
                                title="See what our customers said about our service">Our Customers' opinions</a>
                        </li>
                    </ol>
                </div>
            </li>
            <li>
                <div>
                    <ol class="footer-list-element">
                        <li>
                            <h3>Newbies Gamers Shop</h3>
                        </li>
                        <li>
                            <a href="../shop/shop.html" title="View all available products in Newbies Gamers and fill your basket to buy">Shop Now</a>
                        </li>
                        <li>
                            <a href="../basket/basket.html" title="View your shopping basket"><i class="fa fa-shopping-basket"></i>View your shopping basket</a>
                        </li>
                    </ol>
                </div>
            </li>
            <li>
                <div>
                    <ol class="footer-list-element">
                        <li>
                            <h3>About Newbies Gamers</h3>
                        </li>
                        <li>
                            <a href="../aboutus/aboutus.html#history" title="Know about our history">Our History</a>
                        </li>
                        <li>
                            <a href="../aboutus/aboutus.html#establishment" title="Know about our establishment">Our
                                Establishment</a>
                        </li>
                        <li>
                            <a href="../aboutus/aboutus.html#specials" title="See what makes us special">Our
                                Specials</a>
                        </li>
                        <li>
                            <i class="fa fa-location-arrow" title="Newbies Gamers shop location"></i>Beirut, Lebanon
                        </li>
                    </ol>
                </div>
            </li>
            <li>
                <div>
                    <ol class="footer-list-element">
                        <li>
                            <h3>Book an Appointment</h3>
                        </li>
                        <li>
                            <a href="../appointments/appointments.html#laptop-repair">Laptop Repair</a>
                        </li>
                        <li>
                            <a href="../appointments/appointments.html#laptop-cleaning">Laptop Cleaning</a>
                        </li>
                        <li>
                            <a href="../appointments/appointments.html#cpu-repair">CPU Repair</a>
                        </li>
                        <li>
                            <a href="../appointments/appointments.html#cpu-cleaning">CPU Cleaning</a>
                        </li>
                        <li>
                            <a href="../appointments/appointments.html#phone-repair">Phone Repair</a>
                        </li>
                        <li>
                            <a href="../appointments/appointments.html#ps-repair">PS Repair</a>
                        </li>
                        <li>
                            <a href="../appointments/appointments.html#controller-repair">Controller Repair</a>
                        </li>
                    </ol>
                </div>
            </li>
            <li>
                <div>
                    <ol class="footer-list-element">
                        <li>
                            <h3>Contact Us</h3>
                        </li>
                        <li>
                            <a href="../contactus/contactus.html" title="Share your thoughts and concerns to us">Share
                                your thoughts</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope" title="Our email to contact us"></i>newbies_gamers@gmail.com
                        </li>
                        <li>
                            <i class="fa fa-phone" title="Call us or chat by whatsapp with us"></i>+961 01 111 111
                        </li>
                    </ol>
                </div>
            </li>
            <li>
                <div>
                    <ol class="footer-list-element">
                        <li>
                            <h3>Follow Us on Our Socials</h3>
                        </li>
                        <li>
                            <a href="https://www.facebook.com" title="Newbies Gamers facebook account link"><i
                                    class="fa fa-facebook"></i>Facebook</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com" title="Newbies Gamers instagram account link"><i
                                    class="fa fa-instagram"></i>Instagram</a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com" title="Newbies Gamers twitter account link"><i
                                    class="fa fa-twitter"></i>Twitter</a>
                        </li>
                    </ol>
                </div>
            </li>
        </ol>
    </footer>
    <!-- ended with footer -->

    
    <script src="../contactus/contactus.js"></script>
</body>

</html>