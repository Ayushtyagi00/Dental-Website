<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./style/services.css"/>
</head>
<body>
    <div id="board">
        <nav class="navbar navbar-light navbar-expand-lg pt-2 pb-2" id="navbar">
            <div class="container-fluid" id="navbar-main-container">
                <!-- image of flex-up in ancor tag -->
                <a class="navbar-brand" href="index.html" id="image-anchor"><img src="media/Screenshot_2024-07-04_210634-removebg-preview__1_-removebg-preview.png" class="object-fit-contain border rounded border-0" id="flex-up-image" alt="Flex-up"></a>
                <button class="navbar-toggler shadow-none border-0 bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end bg-dark text-white " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">www.Flex-up.com</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-flex flex-column  flex-lg-row">
                        <ul class="navbar-nav justify-content-end align-items-center flex-grow-1 pe-3" id="web-items">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="service.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="testimonial.php">Testimonials</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav justify-content-lg-end justify-content-md-center align-items-center flex-grow-1 d-flex flex-column flex-md-row flex-sm-row justify-content-sm-center pe-5" id="web-entry">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="sign-up.php">Sign up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="log-in.php">Log in</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="container-fluid" id="billboard-1">
            <div id="billboard-text-1" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800">
                We provides always our best services for our clients and <br>
                always try to achieve our client trust and satisfaction
            </div>
            <div id="billboard-text-2" data-aos="fade-right">
                Make your Dental <br> Experience a Lot Brighter
            </div>
            <button data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                Make an Appoinment
            </button>
        </div>
    </div>

    <div class="container-fluid">
        <div class="conatiner d-flex justify-content-center mt-5" id="services-heading" data-aos="fade-up">
            Discover The Services <strong> Dental Clinic Provides</strong>
        </div>
        <div class="white-div">
            <div id="in1" style="position: relative;height: 450px; width: 100%;">
                <div id="white-box1">
                    <div id="inner-white-box1" style="background-image: url(https://dentech.co.in/wp-content/uploads/2016/07/2.jpg); background-repeat: no-repeat; background-size: 150px;background-position-x: -23px;">
                    </div>
                    <center><h2 style="padding-top: 55px; color: #ffffff;">Teeth Whitening</h2></center>
                    <p style="text-align: center; padding-top: 15px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut sint, odio minus architecto voluptates deleniti quae.</p>
                    <h5><a href="https://maps.app.goo.gl/KbBmn9xAySWyv2BK7">Read More</a></h5>
                </div>
                <div id="white-box2">
                    <div id="inner-white-box2" style="background-image: url(https://dentech.co.in/wp-content/uploads/2016/07/ROot-cannal-1.jpg); background-repeat: no-repeat; background-size: 233px;background-position-x: 2px;background-position-y: -40px;">
                    </div>
                    <center><h2 style="padding-top: 55px; color: #ffffff;">Root Treatment</h2></center>
                    <p style="text-align: center; padding-top: 15px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut sint, odio minus architecto voluptates deleniti quae.</p>
                    <h5><a href="https://maps.app.goo.gl/KbBmn9xAySWyv2BK7">Read More</a></h5>
                </div>
                <div id="white-box3">
                    <div id="inner-white-box3" style="background-image: url(https://dentech.co.in/wp-content/uploads/2016/07/9.jpg); background-repeat: no-repeat; background-size: 150px;background-position-x: -23px;">
                    </div>
                    <center><h2 style="padding-top: 55px; color: #ffffff;">Dental Implants</h2></center>
                    <p style="text-align: center; padding-top: 15px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut sint, odio minus architecto voluptates deleniti quae.</p>
                    <h5><a href="https://maps.app.goo.gl/KbBmn9xAySWyv2BK7">Read More</a></h5>
                </div>
            </div>
            <div id="in2" style="position: relative;height: 380px; width: 100%;">
                <div id="white-box11">
                    <div id="inner-white-box11" style="background-image: url(https://dentech.co.in/wp-content/uploads/2016/07/1.jpg); background-repeat: no-repeat; background-size: 150px;background-position-x: -23px;">
                    </div>
                    <center><h2 style="padding-top: 55px; color: #ffffff;">Dental Smile</h2></center>
                    <p style="text-align: center; padding-top: 15px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut sint, odio minus architecto voluptates deleniti quae.</p>
                    <h5><a href="https://maps.app.goo.gl/KbBmn9xAySWyv2BK7">Read More</a></h5>
                </div>
                <div id="white-box22">
                    <div id="inner-white-box22" style="background-image: url(https://dentech.co.in/wp-content/uploads/2016/07/Restorative.jpg); background-repeat: no-repeat; background-size: 150px;background-position-x: -20px;">
                    </div>
                    <center><h2 style="padding-top: 55px; color: #ffffff; font-size: 29px">Restorative Dentistry</h2></center>
                    <p style="text-align: center; padding-top: 15px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut sint, odio minus architecto voluptates deleniti quae.</p>
                    <h5><a href="https://maps.app.goo.gl/KbBmn9xAySWyv2BK7">Read More</a></h5>
                </div>
                <div id="white-box33">
                    <div id="inner-white-box33" style="background-image: url(https://dentech.co.in/wp-content/uploads/2016/07/8.jpg); background-repeat: no-repeat; background-size: 150px;background-position-x: -20px;">
                    </div>
                    <center><h2 style="padding-top: 55px; color: #ffffff;">Orthodontics</h2></center>
                    <p style="text-align: center; padding-top: 15px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut sint, odio minus architecto voluptates deleniti quae.</p>
                    <h5><a href="https://maps.app.goo.gl/KbBmn9xAySWyv2BK7">Read More</a></h5>
                </div>
            </div>
            <div id="in2" style="position: relative;height: 380px; width: 100%;">
                <div id="white-box11">
                    <div id="inner-white-box11" style="background-image: url(https://dentech.co.in/wp-content/uploads/2016/07/Bridge-Crown.jpg); background-repeat: no-repeat; background-size: 150px;background-position-x: -23px;">
                    </div>
                    <center><h2 style="padding-top: 55px; color: #ffffff;">Crowns & Bridges</h2></center>
                    <p style="text-align: center; padding-top: 15px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut sint, odio minus architecto voluptates deleniti quae.</p>
                    <h5><a href="https://maps.app.goo.gl/KbBmn9xAySWyv2BK7">Read More</a></h5>
                </div>
                <div id="white-box22">
                    <div id="inner-white-box22" style="background-image: url(https://dentech.co.in/wp-content/uploads/2016/07/Veneers.jpg); background-repeat: no-repeat; background-size: 150px;background-position-x: -23px;">
                    </div>
                    <center><h2 style="padding-top: 55px; color: #ffffff;">Veneers</h2></center>
                    <p style="text-align: center; padding-top: 15px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut sint, odio minus architecto voluptates deleniti quae.</p>
                    <h5><a href="https://maps.app.goo.gl/KbBmn9xAySWyv2BK7">Read More</a></h5>
                </div>
                <div id="white-box33">
                    <div id="inner-white-box33" style="background-image: url(https://dentech.co.in/wp-content/uploads/2016/07/3.jpg); background-repeat: no-repeat; background-size: 150px;background-position-x: -23px;">
                    </div>
                    <center><h2 style="padding-top: 55px; color: #ffffff;">Dentures</h2></center>
                    <p style="text-align: center; padding-top: 15px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut sint, odio minus architecto voluptates deleniti quae.</p>
                    <h5><a href="https://maps.app.goo.gl/KbBmn9xAySWyv2BK7">Read More</a></h5>
                </div>
            </div>
            <div id="in2" style="position: relative;height: 380px; width: 100%;">
                <div id="white-box11">
                    <div id="inner-white-box11" style="background-image: url(https://dentech.co.in/wp-content/uploads/2022/11/00007-1.jpg); background-repeat: no-repeat; background-size: 150px;background-position-x: -23px;">
                    </div>
                    <center><h2 style="padding-top: 55px; color: #ffffff;">Gum Treatment</h2></center>
                    <p style="text-align: center; padding-top: 15px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut sint, odio minus architecto voluptates deleniti quae.</p>
                    <h5><a href="https://maps.app.goo.gl/KbBmn9xAySWyv2BK7">Read More</a></h5>
                </div>
                <div id="white-box22">
                    <div id="inner-white-box22" style="background-image: url(https://dentech.co.in/wp-content/uploads/2016/07/5.jpg); background-repeat: no-repeat; background-size: 150px;background-position-x: -23px;">
                    </div>
                    <center><h2 style="padding-top: 55px; color: #ffffff;">Dentel Extractions</h2></center>
                    <p style="text-align: center; padding-top: 15px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut sint, odio minus architecto voluptates deleniti quae.</p>
                    <h5><a href="https://maps.app.goo.gl/KbBmn9xAySWyv2BK7">Read More</a></h5>
                </div>
                <div id="white-box33">
                    <div id="inner-white-box33" style="background-image: url(https://dentech.co.in/wp-content/uploads/2022/12/33-removebg-preview.png); background-repeat: no-repeat; background-size: 150px;background-position-x: -20px; background-position-y: -10px;">
                    </div>
                    <center><h2 style="padding-top: 55px; color: #ffffff;">Pediatric Dentistry</h2></center>
                    <p style="text-align: center; padding-top: 15px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut sint, odio minus architecto voluptates deleniti quae.</p>
                    <h5><a href="https://maps.app.goo.gl/KbBmn9xAySWyv2BK7">Read More</a></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="branding">
        <div class="container" id="branding-text">
            <h1>How We Can <strong>Help</strong></h1>
            <p>
                Our doctors are able to fix any issue at no worries for <br>
you.Your smile will be perfect !
            </p>
            <button href="contact.html" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                Contact Us
            </button>
        </div>
    </div>

    <footer class="footer" data-aos="fade-up">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <h5>About Us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
                    <ul class="list-unstyled">
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Meet Our Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Preventive Dentistry</a></li>
                        <li><a href="#">Restorative Dentistry</a></li>
                        <li><a href="#">Cosmetic Dentistry</a></li>
                        <li><a href="#">Emergency Dentistry</a></li>
                    </ul>
                </div>
            <div class="col-md-3">
                <h5>Get in Touch</h5>
                <p><i class="fa-solid fa-phone"></i> (123) 456-7890</p>
                <p><i class="fa-solid fa-envelope"></i> <a href="mailto:info@mydentalhealth.com">info@mydentalhealth.com</a></p>
                <p><i class="fa-solid fa-map-marker-alt"></i> RIMT UNIVERSITY MULITYSPECIALITY HOSPITAL, MANDI GOBINDGARH, PUNJAB-147301.</p>
            </div>
            <div class="col-md-3">
                <h5>Newsletter</h5>
                <p>Stay up to date with the latest news and promotions from My Dental Health.</p>
                <form>
                    <input type="email" placeholder="Enter your email address">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="row">
            <ul class="list-unstyled d-flex justify-content-center">
                <li><a href="#" class="social-link m-2"><i class="fa-brands fa-facebook-f fa-2xl"></i></a></li>
                <li><a href="#" class="social-link m-2"><i class="fa-brands fa-twitter fa-2xl"></i></a></li>
                <li><a href="#" class="social-link m-2"><i class="fa-brands fa-instagram fa-2xl"></i></a></li>
                <li><a href="#" class="social-link m-2"><i class="fa-brands fa-whatsapp fa-2xl"></i></a></li>
                <li><a href="#" class="social-link m-2"><i class="fa-brands fa-twitter fa-2xl"></i></a></li>
            </ul>
            <div class="col-md-12">
                <p class="copyright">Copyright 2023 My Dental Health. All rights reserved.</p>
            </div>
        </div>
        <div class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13729.729082888602!2d76.3299122!3d30.6499539!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39101b70f3decd93%3A0xeed5405d58b4e0c6!2sAc%20hostel%20Rimt%20university!5e0!3m2!1sen!2sin!4v1720287551355!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>    