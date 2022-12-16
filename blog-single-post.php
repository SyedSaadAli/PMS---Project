<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from 7oroof.com/demos/medcity/blog-single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jul 2021 23:23:37 GMT -->
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
                      <a href="tel:+92090078601" class="phone__number">
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
                    <i class="icon-location"></i><a href="#">Location: Karchi, Pakistan</a>
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
    <section class="page-title pt-30 pb-30 text-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <nav>

            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Single
    ========================= -->
    <section class="blog blog-single pt-0 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="post-item mb-0">
              <div class="post__img">
                <a href="#">
                  <img src="assets/images/blog/single/1.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post-img -->
              <div class="post__body pb-0">


                <h1 class="post__title mb-30">
                  6 Tips to Protect Your Mental Health When You’re Sick
                </h1>
                <div class="post__desc">
                  <p>Vast numbers of employees now work remotely, and it’s too late to develop a set of remote-work
                    policies if you didn’t already have one. But there are ways to make the remote-work experience
                    productive and engaging — for employees and the organization.</p>
                  <p> “At most organizations, scenario planning focuses on the necessary operational responses to ensure
                    business continuity. Few of these plans address the ability or bandwidth of employees to focus on
                    their work,” says Brian Kropp, Distinguished Vice President, Research, Gartner.</p>
                  <p>Use both direct conversations and indirect observations to get visibility into employees’
                    challenges
                    and concerns. Use every opportunity to make clear to employees that you support and care for them.
                    To
                    facilitate regular conversations between managers and employees, provide managers with guidance on
                    how
                    best to broach sensitive subjects arising from the COVID-19 pandemic, including alternative work
                    models, job security and prospects, impact on staffing and tension in the workplace.</p>
                  <p>Make sure employees have the technology they need to be successful, which may be more than just a
                    mobile phone and laptop. For example, if you expect employees to attend virtual meetings, do they
                    have
                    adequate cameras?</p>
                  <p>Even if you don’t have an extensive set of technology and collaborative tools available, you can
                    equip employees to function effectively when remote. But don’t just assume that people know how to
                    operate with virtual communications — or are comfortable in that environment. </p>
                </div><!-- /.blog-desc -->
              </div>
            </div><!-- /.post-item -->

            <div class="widget-nav d-flex justify-content-between mb-40">
              <a href="#" class="widget-nav__prev d-flex flex-wrap">
                <div class="widget-nav__img">
                  <img src="assets/images/blog/grid/2.jpg" alt="blog thumb">
                </div>
                <div class="widget-nav__content">
                  <span>Previous Post</span>
                  <h5 class="widget-nav__ttile mb-0">Unsure About Wearing a Face Mask?</h5>
                </div>
              </a><!-- /.widget-prev  -->
              <a href="#" class="widget-nav__next d-flex flex-wrap">
                <div class="widget-nav__img">
                  <img src="assets/images/blog/grid/3.jpg" alt="blog thumb">
                </div>
                <div class="widget-nav__content">
                  <span>Next Post</span>
                  <h5 class="widget-nav__ttile mb-0">Tips for Eating Healthy When You’re Home</h5>
                </div>
              </a><!-- /.widget-next  -->
            </div>
            <!-- <div class="blog-comments mb-70">
              <h5 class="blog-widget__title">Comments</h5>
              <ul class="comments-list list-unstyled">
                <li class="comment__item">
                  <div class="comment__avatar">
                    <img src="assets/images/blog/author/2.jpg" alt="avatar">
                  </div>
                  <div class="comment__content">
                    <h5 class="comment__author">Richard Muldoone</h5>
                    <span class="comment__date">Feb 28, 2017 - 08:07 pm</span>
                    <p class="comment__desc">The example about the mattress sizing page you mentioned in the last WBF
                      can be a perfect example
                      of new keywords and content, and broadening the funnel as well. I can only imagine the sale
                      numbers if that was the site of a mattress selling company.</p>
                    
                  </div>
                  <ul class="nested__comment list-unstyled">
                    <li class="comment__item">
                      <div class="comment__avatar">
                        <img src="assets/images/blog/author/3.jpg" alt="avatar">
                      </div>
                      <div class="comment__content">
                        <h5 class="comment__author">Mike Dooley</h5>
                        <span class="comment__date">Feb 28, 2017 - 08:22 pm</span>
                        <p class="comment__desc">The example about the mattress sizing page you mentioned in the last
                          WBF can be a perfect
                          example of new keywords and content, and broadening the funnel as well. I can only imagine the
                          sale numbers if that was the site of a mattress selling company.</p>
                        
                      </div>
                    </li> /.comment
                  </ul> /.nested-comment
                </li>/.comment
              </ul> /.comments-list
            </div> /.blog-comments -->
            <div class="blog-widget blog-comments-form mb-30">
              <h5 class="blog-widget__title">Leave A Reply</h5>
              <form>
                <div class="row">
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name:">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email:">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Website:">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Comment"></textarea>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap align-items-center">
                    <button type="submit" class="btn btn__primary btn__rounded btn__xl">
                      <span>Submit Comment</span> <i class="icon-arrow-right"></i>
                    </button>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.blog-comments-form -->
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar">

              <div class="widget widget-posts">
                <h5 class="widget__title">Recent Posts</h5>
                <div class="widget__content">
                  <!-- post item #1 -->
                  <div class="widget-post-item d-flex align-items-center">
                    <div class="widget-post__img">
                      <a href="#"><img src="assets/images/blog/grid/2.jpg" alt="thumb"></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget-post__content">
                      <span class="widget-post__date">Sep 19, 2022</span>
                      <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your Leadership</a>
                      </h4>
                    </div><!-- /.widget-post-content -->
                  </div><!-- /.widget-post-item -->
                  <!-- post item #2 -->
                  <div class="widget-post-item d-flex align-items-center">
                    <div class="widget-post__img">
                      <a href="#"><img src="assets/images/blog/grid/3.jpg" alt="thumb"></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget-post__content">
                      <span class="widget-post__date">July 7, 2022</span>
                      <h4 class="widget-post__title"><a href="#">Do Employee Surveys Tell About Employee?</a>
                      </h4>
                    </div><!-- /.widget-post-content -->
                  </div><!-- /.widget-post-item -->
                  <!-- post item #3 -->
                  <div class="widget-post-item d-flex align-items-center">
                    <div class="widget-post__img">
                      <a href="#"><img src="assets/images/blog/grid/6.jpg" alt="thumb"></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget-post__content">
                      <span class="widget-post__date">March 13, 2022</span>
                      <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your Leadership</a>
                      </h4>
                    </div><!-- /.widget-post-content -->
                  </div><!-- /.widget-post-item -->
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
              <div class="widget widget-categories">
                <h5 class="widget__title">Categories</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#"><span class="cat-count">4</span><span>Neurology</span></a></li>
                    <li><a href="#"><span class="cat-count">0</span><span>Cardiology</span></a></li>
                    <li><a href="#"><span class="cat-count">3</span><span>Pathology</span></a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Single -->

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
                    <li><a href="#">Laboratory Analysis</a></li>
                    <li><a href="#">Pediatric Clinic</a></li>
                    <li><a href="#">Cardiac Clinic</a></li>
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
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->

    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from 7oroof.com/demos/medcity/blog-single-post.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jul 2021 23:23:38 GMT -->
</html>