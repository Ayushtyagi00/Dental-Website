<?php
include ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="./style/index.css" rel="stylesheet">
    <title>My Dental Health</title>
</head>
<body>
  <div id="board">
    <nav class="navbar navbar-light navbar-expand-lg pt-2 pb-2" id="navbar">
      <div class="container-fluid" id="navbar-main-container">
          <a class="navbar-brand" href="index.html" id="image-anchor"><img src="./media/Screenshot_2024-07-04_210634-removebg-preview__1_-removebg-preview.png" class="object-fit-contain border rounded border-0" id="flex-up-image" alt="Flex-up"></a>
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
      <div id="billboard-text-1">
        Welcome To My Dental Health
      </div>
      <div id="billboard-text-2">
        Keep Your Teeth and <br> Gums Healthy
      </div>
      <button>
        <a href="contact.php">Contact Us</a>
      </button>
    </div>
  </div>
  <div class="container-fluid d-flex">
    <div id="box-1">
      <div id="inner-box1-1"></div>
      <div id="inner-box1-2"></div>
    </div>
    <div id="box-2">
      <div class="h6 m-5">
        About Us
      </div>
      <div class="h2 m-5">
        Achieving Dental <br> Wellness and <br> Radiant Confidence
      </div>
      <p class="m-5 pe-4">
        Welcome to our office! Our dentists and team are looking forward to caring for you and your smile. We understand just how closely connected oral health is to your overall health, confidence, and appearance, and we pride ourselves on cultivating a friendly.
      </p>
      <div class="d-flex">
        <div class="icon">
          <div id="icon-1" class="d-flex">
            <i class="fa-regular fa-circle-check fa-xl"></i>
            <p class="ms-3">Pain-free treatment</p>
          </div>
          <div id="icon-2" class="d-flex"> 
            <i class="fa-regular fa-circle-check fa-xl"></i>
            <p>Pain-free treatment</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fliud d-flex" id="whychooseus">
    <div id="content-1">
      <div id="inner-container1">
        <div class="tile mb-4">
          Why Choose Us
        </div>
        <div class="tile-2 mb-4">
          State of the <br> Art Dentistry
        </div>
        <p>
          We are proud to the serve our community and <br> are committed to smile making a positive impact<br> on the world health of our patients.
        </p>
        <button>
          <a href="contact.php">
            Contact Us
          </a>
        </button>
      </div>
    </div>
    <div id="content-2">
      <img src="./media/about-7-qnk9e7cb82wqirhtaumbp46sjdj1qsl7ekn2j11opu.webp" class="floating">
    </div>
    <div id="content-3">
      <div class="inner-container2">
        <div class="h2 mb-3">
          Dental Checkup
        </div>
        <p>
          Tooth care is essential for maintaining good<br>oral health,preventing dental problems.
        </p>
        <div id="icons" class="mb-4">
          <div class="arrow-icon d-flex">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <h6>Wisdom tooth extraction</h6>
          </div>
          <div class="arrow-icon d-flex">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <h6>Root Canal Treatment</h6>
          </div>
          <div class="arrow-icon d-flex">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <h6>Invisalign & ClearCorrect</h6>
          </div>
        </div>
        <hr>
        <div class="h2 mb-3 mt-5">
          Brushing
        </div>
        <p>
          Tooth care is essential for maintaining good<br> oral health, preventing dental problems.
        </p>
        <div id="icons">
          <div class="arrow-icon d-flex">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <h6>Temporomandibular joint dysfunction</h6>
          </div>
          <div class="arrow-icon d-flex">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <h6>Dentin hypersensitivity</h6>
          </div>
          <div class="arrow-icon d-flex">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <h6>Cavities</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" id="service">
    <div id="title-head">
      We Ensure Prompt Services<br> for Dental Care
    </div>
    <div class="container">
      <div id="row">
        <div id="box-card1">
          <div class="inner-1">
            <img src="./media/tooth-extraction-2.png" class="img-fluid pt-2" alt="">
            <button>
              <a href="#">Preventive Dentistry</a>
            </button>
          </div>
          <div class="inner-2">
            <h4>Wisdom Tooth Extraction</h4>
          </div>
          <hr>
          <div class="inner-3">
            <p>
              We Create Beautiful Smiles Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias perferendis cumque sit ea ducimus, exercitationem error itaque consectetur soluta nobis. Voluptatem ab eum aliquid animi necessitatibus facilis libero odio laudantium.
            </p>
          </div>
          <div class="inner1-4">
          </div>
          <div class="inner-5">
            <button>
              <a href="log-in.php">
                BOOK APPOINMENT
              </a>
            </button>
          </div>
        </div>
        <div id="box-card1">
          <div class="inner-1">
            <img src="./media/tooth.png" class="img-fluid pt-2" alt="">
            <button>
              <a href="#">Preventive Dentistry</a>
            </button>
          </div>
          <div class="inner-2">
            <h4>Partials & Dentures</h4>
          </div>
          <hr>
          <div class="inner-3">
            <p>
              We Create Beautiful Smiles Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias perferendis cumque sit ea ducimus, exercitationem error itaque consectetur soluta nobis. Voluptatem ab eum aliquid animi necessitatibus facilis libero odio laudantium.
            </p>
          </div>
          <div class="inner3-4">
          </div>
          <div class="inner-5">
            <button>
              <a href="log-in.php">
                BOOK APPOINMENT
              </a>
            </button>
          </div>
        </div>
        <div id="box-card1">
          <div class="inner-1">
            <img src="./media/teeth-cleaning.png" class="img-fluid pt-2" alt="">
            <button>
              <a href="#">Preventive Dentistry</a>
            </button>
          </div>
          <div class="inner-2">
            <h4>Wisdom Tooth Extraction</h4>
          </div>
          <hr>
          <div class="inner-3">
            <p>
              We Create Beautiful Smiles Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias perferendis cumque sit ea ducimus, exercitationem error itaque consectetur soluta nobis. Voluptatem ab eum aliquid animi necessitatibus facilis libero odio laudantium.
            </p>
          </div>
          <div class="inner2-4">
          </div>
          <div class="inner-5">
            <button>
              <a href="log-in.php">
                BOOK APPOINMENT
              </a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container" id="window">
      <div class="half-window" data-aos="fade-right">
        "The Best Way to Maintain a Healthy Smile to Proactive!"
      </div>
    </div>
  </div>
  <div class="container-fluid" id="our_doctors">
    <div class="container">
      <div id="doctor">
        Our Doctors
      </div>
      <div id="our_doctor_head" data-aos="fade-up">
        Friendly Faces, Personalized <br>Care for Your Smile
      </div>
    </div>
    <div class="container" id="doctor-card">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner d-flex" data-aos="fade-down">
          <div class="carousel-item active">
            <div class="card-group" data-bs-interval="100">
              <div class="card" style="width: 18rem;">
                <img src="./media/team-1.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Nico Robin</h5>
                  <p class="card-text">Working Experience Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione amet blanditiis hic eaque officia rem. Facere est maiores dignissimos voluptatibus.</p>
                  <a href="#" class="btn btn-primary">Know More</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="./media/team-2.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mary Vels</h5>
                  <p class="card-text">Working Experience Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione amet blanditiis hic eaque officia rem. Facere est maiores dignissimos voluptatibus.</p>
                  <a href="#" class="btn btn-primary">Know More</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="./media/team-3.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Angelina Jolie</h5>
                  <p class="card-text">Working Experience Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione amet blanditiis hic eaque officia rem. Facere est maiores dignissimos voluptatibus.</p>
                  <a href="#" class="btn btn-primary">Know More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-group" data-bs-interval="100">
              <div class="card" style="width: 18rem;">
                <img src="./media/team-5.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Emi Akezawa</h5>
                  <p class="card-text">Working Experience Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione amet blanditiis hic eaque officia rem. Facere est maiores dignissimos voluptatibus.</p>
                  <a href="#">Know More</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="./media/team-6.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Lura Wilburan</h5>
                  <p class="card-text">Working Experience Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione amet blanditiis hic eaque officia rem. Facere est maiores dignissimos voluptatibus.</p>
                  <a href="#">Know More</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="./media/team-7.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Brian Wilson</h5>
                  <p class="card-text">Working Experience Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione amet blanditiis hic eaque officia rem. Facere est maiores dignissimos voluptatibus.</p>
                  <a href="#">Know More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
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