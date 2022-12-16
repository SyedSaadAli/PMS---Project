<?php
include('security.php');
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from 7oroof.com/demos/medcity/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jul 2021 23:23:24 GMT -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Medcity - Medical Healthcare HTML5 Template</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
  <link rel="stylesheet" href="../../../use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-layout1">
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <button class="miniPopup-emergency-trigger" type="button">24/7 Emergency</button>
                    <div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
                      <div class="emergency__icon">
                        <i class="icon-call3"></i>
                      </div>
                      <a href="tel:+92090078601 class="phone__number">
                        <i class="icon-phone"></i> <span>+92 090078601</span>
                      </a>
                      <p>Please feel free to contact our friendly reception staff with any general or medical enquiry.
                      </p>
                      <a href="appointment.php" class="btn btn__secondary btn__link btn__block">
                        <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                      </a>
                    </div><!-- /.miniPopup-emergency -->
                  </li>
                  <li>
                    <i class="icon-phone"></i><a href="tel:+5565454117">Emergency Line: (021) 090078601</a>
                  </li>
                  <li>
                    <i class="icon-location"></i><a href="#">Location: Karachi, Pakistan</a>
                  </li>
                  <li>
                    <i class="icon-clock"></i><a href="contact-us.php">Mon - Fri: 24/7</a>
                  </li>
                </ul><!-- /.contact__list -->

              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item has-dropdown">
                
                    <a href="index.php" class="nav__item-link">Home</a>
                  </li>
              <li class="nav__item has-dropdown">
                
               
                  <li class="nav__item">
                    <a href="about-us.php" class="nav__item-link">About Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="services.php" class="nav__item-link">Our Services</a>
                  </li><!-- /.nav-item -->
                  
             <li class="nav__item">
                    <a href="doctors-standard.php" class="nav__item-link">Doctors</a>
                  </li>
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropown-toggle nav__item-link">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="blog.php" class="nav__item-link">Blog Grid</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="blog-single-post.php" class="nav__item-link">Single Blog Post</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
             
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="contact-us.php" class="nav__item-link">Contact</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-none d-xl-flex align-items-center position-relative ml-30">
            <div class="miniPopup-departments-trigger">
              <span class="menu-lines" id="miniPopup-departments-trigger-icon"><span></span></span>
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropown-toggle nav__item-link1" style="list-style: none">Login/SignUp</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="signin.php" class="nav__item-link">Login</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="signup.php" class="nav__item-link">SignUp</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="logout.php" class="nav__item-link">SignOut</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
             
              </li><!-- /.nav-item -->
                 
              <!-- <a href="#">Login/SignUp</a>
              <ul id="miniPopup-departments" class="miniPopup miniPopup-departments dropdown-menu">
              <li class="nav__item">
                <a href="#" class="nav__item-link">login</a>
              </li><!-- /.nav-item
              <li class="nav__item">
                <a href="#" class="nav__item-link">signUp</a>
              </li><!-- /.nav-item --> <!-- --> 
            </div> 

            
              
            <a href="appointment.php" class="btn btn__primary btn__rounded ml-30">
              <i class="icon-calendar"></i>
              <span>Appointment</span>
            </a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout4 bg-overlay text-center">
      <div class="bg-img"><img src="assets/images/page-titles/5.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Improve Quality Of Life Through Better Health.</h1>
            <p class="pagetitle__desc">Medcity has been present in Europe since 1990, offering innovative solutions,
              specializing in medical services for treatment of medical infrastructure.
            </p>
            
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

  


    <!-- ========================= 
      Testimonials layout 3
      =========================  -->
    <section class="testimonials-layout3 pt-130 bg-overlay bg-overlay-secondary">
      <div class="bg-img"><img src="assets/images/banners/4.jpg" alt="background"></div>
      <div class="container">
        <div class="testimonials-wrapper">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="heading-layout2">
                <h3 class="heading__title color-primary">Inspiring Stories!</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7">
              <div class="slider-with-navs">
                <!-- Testimonial #1 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
              </div><!-- /.slick-carousel -->
              <div class="slider-nav mb-60">
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Sami Wade</h4>
                    <p class="testimonial__meta-desc">7oroof Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Ahmed</h4>
                    <p class="testimonial__meta-desc">Web Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Sonia Blake</h4>
                    <p class="testimonial__meta-desc">Web Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
              </div><!-- /.slider-nav -->
            </div><!-- /.col-lg-7 -->
          </div><!-- /.row -->
        </div><!-- /.testimonials-wrapper -->
      </div><!-- /.container -->
    </section><!-- /.testimonials layout 3 -->

    <!-- ==========================
        contact layout 2
    =========================== -->
    <section class="contact-layout2 pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="contact-panel d-flex flex-wrap">
           <!--    #https://7oroof.com/demos/medcity/assets/php/contact.php -->
              <form class="contact-panel__form" action="Code.php" method="post" >
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Book An Appointment</h4>
                    <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly reception staff
                      with any general or medical enquiry. Our doctors will receive or return any urgent calls.
                    </p>
                        <?php  
                    if(isset($_SESSION['success']) && $_SESSION['success'] != '')
                    {
    echo '<h2 class="bg-primary" style="color:#30d0c4; text-align:center;"> '.$_SESSION['success'].' </h2>';# text-white
    unset($_SESSION['success']);
}
if(isset($_SESSION['status']) && $_SESSION['status'] != '' )
{
      echo '<h2 class="big-danger" style="color:#30d0c4; text-align:center;"> '.$_SESSION['status'].' </h2>';# text-white
      unset($_SESSION['status']);
  }
  ?>
  
                  </div>


                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-news form-group-icon"></i>
                      <input type="text" name="Name" class="form-control" placeholder="Name" id="contact-name"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-email form-group-icon"></i>
                      <input type="email" name="Email" class="form-control" placeholder="Email" id="contact-email"
                       required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                      <i class="icon-phone form-group-icon"></i>
                      <input type="number" name="Phone" class="form-control" placeholder="Phone" id="contact-Phone"
                         required>
                    </div>
                  </div><!-- /.col-lg-4 -->
                      <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group form-group-date">
                      <i class="icon-calendar form-group-icon"></i>
                      <input type="date" name="DOB" class="form-control" placeholder="DOB" id="contact-date"
                       required>
                    </div>
                  </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-user form-group-icon"></i>
                      <select name="Gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-12">
                    <button type="submit" name="Appointment" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                      <span>Book Appointment</span> <i class="icon-arrow-right"></i>
                    </button>
                   <!--  <div class="contact-result"></div> -->
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
              <div
                class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                <div>
                  <h4 class="contact-panel__title color-white">Quick Contacts</h4>
                  <p class="contact-panel__desc font-weight-bold color-white mb-30">Please feel free to contact our
                    friendly staff with any medical enquiry.
                  </p>
                </div>
                <div>
                  <ul class="contact__list list-unstyled mb-30">
                    <li>
                      <i class="icon-phone"></i><a href="tel:+5565454117">Emergency Line: (021) 090078601</a>
                    </li>
                    <li>
                      <i class="icon-location"></i><a href="#">Location: Karachi, Pakistan</a>
                    </li>
                    <li>
                      <i class="icon-clock"></i><a href="contact-us.php">Mon - Fri: 24/7</a>
                    </li>
                  </ul>
                  <a href="#" class="btn btn__white btn__rounded btn__outlined">Contact Us</a>
                </div>
              </div>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->

    <!-- ========================
      About Layout 2
    =========================== -->
    <section class="about-layout5 pt-20">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading-layout2">
              <h3 class="heading__title mb-80">Helping Patients From Around the Globe!!</h3>
            </div><!-- /heading -->
            <div class="map-wrapper mb-50">
              <img src="assets/images/backgrounds/map.png" alt="map">
              <div class="tooltip-box">
                <div class="tooltip__icon">
                  <i class="fas fa-plus"></i>
                </div><!-- /.tooltip__icon -->
                <div class="tooltip__panel">
                  <p class="tooltip__title mb-0">2307 Beverley Rd Brooklyn, New York 11226 U.S.</p>
                </div><!-- /.tooltip__panel -->
              </div><!-- /.tooltip-box -->
              <div class="tooltip-box tooltip-hover-left">
                <div class="tooltip__icon">
                  <i class="fas fa-plus"></i>
                </div><!-- /.tooltip__icon -->
                <div class="tooltip__panel">
                  <p class="tooltip__title mb-0">2307 Beverley Rd Brooklyn, New York 11226 U.S.</p>
                </div><!-- /.tooltip__panel -->
              </div><!-- /.tooltip-box -->
              <div class="tooltip-box">
                <div class="tooltip__icon">
                  <i class="fas fa-plus"></i>
                </div><!-- /.tooltip__icon -->
                <div class="tooltip__panel">
                  <p class="tooltip__title mb-0">2307 Beverley Rd Brooklyn, New York 11226 U.S.</p>
                </div><!-- /.tooltip__panel -->
              </div><!-- /.tooltip-box -->
            </div><!-- /.map-wrapper -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
            <p class="heading__desc color-secondary font-weight-bold mb-30">We will work with you to develop
              individualised care plans,
              management of chronic diseases. If we cannot assist, we can provide referrals or advice about the type of
              practitioner you require.</p>
            <p class="heading__desc mb-30">We are committed to being the region’s premier healthcare network by
              providing
              patient-centered care that inspires clinical and service excellence, making us the first and best choice
              for our patients, employees, physicians, employers, volunteers and communities. We serve the community by
              improving the quality of life through better health.</p>

            <ul class="list-items list-items-layout3 list-unstyled">
              <li>We conduct a range of tests to help us work out why you're not feeling well and determine the right
                treatment for you.</li>
              <li>Our expert doctors, nurses and allied health professionals manage patients with a broad range of
                medical issues.</li>
              <li>We offer a wide range of care and support to our patients, from diagnosis to treatment and
                rehabilitation.</li>
            </ul>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 2 -->

    <!-- ========================
      Footer
    ========================== -->
    <footer class="footer">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
              <div class="footer-widget-about">
                <img src="assets/images/logo/logo-light.png" alt="logo" class="mb-30">
                <p class="color-gray">Our goal is to deliver quality of care in a courteous, respectful, and
                  compassionate manner. We hope you will allow us to care for you and strive to be the first and best
                  choice for your family healthcare.
                </p>
                <a href="appointment.php" class="btn btn__primary btn__primary-style2 btn__link">
                  <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Departments</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Neurology Clinic</a></li>
                    <li><a href="#">Cardiology Clinic</a></li>
                    <li><a href="#">Pathology Clinic</a></li>

                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Links</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our CLinic</a></li>
                    <li><a href="#">Our Doctors</a></li>
                    <li><a href="#">News & Media</a></li>
                    <li><a href="#">Appointments</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="footer-widget-contact">
                <h6 class="footer-widget__title color-heading">Quick Contacts</h6>
                <ul class="contact-list list-unstyled">
                  <li>If you have any questions or need help, feel free to contact with our team.</li>
                  <li>
                    <a href="tel:01061245741" class="phone__number">
                      <i class="icon-phone"></i> <span>01061245741</span>
                    </a>
                  </li>
                  <li class="color-body">A/117 Gulshan-e-Iqbal karachi.</li>
                </ul>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->

    </footer><!-- /.Footer -->
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from 7oroof.com/demos/medcity/appointment.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jul 2021 23:23:26 GMT -->
</html>