<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from 7oroof.com/demos/medcity/doctors-standard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jul 2021 23:23:35 GMT -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Medcity - Medical Healthcare</title>

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
                      <a href="tel:+090078601" class="phone__number">
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
                    <i class="icon-phone"></i><a href="tel:+090078601">Emergency Line: (021) 090078601</a>
                  </li>
                  <li>
                    <i class="icon-location"></i><a href="#">A/117 Gulshan-e-Iqbal karachi</a>
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
                <a href="#" data-toggle="dropdown" class="dropown-toggle nav__item-link1" style="list-style: none">Login/signUp</a>
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
    <section class="page-title page-title-layout1 bg-overlay">
      <div class="bg-img"><img src="assets/images/page-titles/7.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <h1 class="pagetitle__heading">Providing Care for The Sickest In Community. </h1>
            <p class="pagetitle__desc">Medcity has been present in Europe since 1990, offering innovative solutions,
              specializing in medical services for treatment of medical infrastructure.
            </p>
            <a href="appointment.php" class="btn btn__primary btn__rounded">
              <span>Make Appointment</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Team layout 1
    ========================== -->
    <section class="team-layout1 pb-40">
      <div class="container">
        <div class="row">
          <!-- Member #1 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="assets/images/team/1.jpg" alt="member img">
                <div class="member__hover">
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name"><a href="doctors-single-doctor1.php">Mike Dooley</a></h5>
                <p class="member__job">Cardiology Specialist</p>
                <p class="member__desc">Muldoone obtained his undergraduate degree in Biomedical Engineering at Tulane
                  University prior to attending St George's University School of Medicine</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #2 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="assets/images/team/2.jpg" alt="member img">
                <div class="member__hover">
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name"><a href="doctors-single-doctor1.php">Richard Muldoone</a></h5>
                <p class="member__job">Cardiology Specialist</p>
                <p class="member__desc">Brian specializes in treating skin, hair, nail, and mucous membrane. He also
                  address cosmetic issues, helping to revitalize the appearance of the skin</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #3 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="assets/images/team/3.jpg" alt="member img">
                <div class="member__hover">
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name"><a href="doctors-single-doctor1.php">Maria Andaloro</a></h5>
                <p class="member__job">Pediatrician</p>
                <p class="member__desc">Andaloro graduated from medical school and completed 3 years residency program
                  in pediatrics. She passed rigorous exams by the American Board of Pediatrics.</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #4 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="assets/images/team/4.jpg" alt="member img">
                <div class="member__hover">
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name"><a href="doctors-single-doctor1.php">Dupree Black</a></h5>
                <p class="member__job">Urologist</p>
                <p class="member__desc">Black diagnose and treat diseases of the urinary tract in both men and women. He
                  also diagnose and treat anything involving the reproductive tract in men.</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #5 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="assets/images/team/5.jpg" alt="member img">
                <div class="member__hover">
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name"><a href="doctors-single-doctor1.php">Markus skar</a></h5>
                <p class="member__job">Laboratory</p>
                <p class="member__desc">Skar play a very important role in your health care. People working in the
                  clinical laboratory are responsible for conducting tests that provide crucial information.</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #6 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="assets/images/team/6.jpg" alt="member img">
                <div class="member__hover">
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name"><a href="doctors-single-doctor1.php">Kiano Barker</a></h5>
                <p class="member__job">Pathologist </p>
                <p class="member__desc">Barker help care for patients every day by providing their doctors with the
                  information needed to ensure appropriate care. He also valuable resources for other physicians.</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
        </div> <!-- /.row -->
        <div class="row">
          <div class="col-12 text-center">
            <nav class="pagination-area">
              <ul class="pagination justify-content-center">
                <li><a class="current" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#"><i class="icon-arrow-right"></i></a></li>
              </ul>
            </nav><!-- .pagination-area -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Team layout 1  -->

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
                    <a href="tel:090078601" class="phone__number">
                      <i class="icon-phone"></i> <span>090078601</span>
                    </a>
                  </li>
                  <li class="color-body">A/117 Gulshan-e-Iqbal karachi.</li>
                </ul>
                <div class="d-flex align-items-center">
                  <a href="contact-us.php" class="btn btn__primary btn__link mr-30">
                    <i class="icon-arrow-right"></i> <span>Get Directions</span>
                  </a>
                </div>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->

      </div><!-- /.footer-secondary -->
    </footer><!-- /.Footer -->
   
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from 7oroof.com/demos/medcity/doctors-standard.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jul 2021 23:23:35 GMT -->
</html>