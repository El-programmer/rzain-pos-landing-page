<!DOCTYPE html>
<html lang="<?= $lang?>">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= translate('Welcome to')?> <?= translate('site title')?></title>

  <!-- icofont-css-link -->
  <link rel="stylesheet" href="css/icofont.min.css">
  <!-- Owl-Carosal-Style-link -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <?php if($lang == 'ar') {?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-rtl.css">
  <!-- Aos-Style-link -->
  <link rel="stylesheet" href="css/aos.css">
  <!-- Coustome-Style-link -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-Style-link -->
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/custom-rtl.css">
  
  <?php }else{ ?>

  <!-- Bootstrap-Style-link -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Aos-Style-link -->
  <link rel="stylesheet" href="css/aos.css">
  <!-- Coustome-Style-link -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-Style-link -->
  <link rel="stylesheet" href="css/responsive.css">
  
  
  <?php } ?>

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>

  <!-- Page-wrapper-Start -->
  <div class="page_wrapper">

    <!-- Preloader -->
    <div id="preloader">
      <div id="loader"></div>
    </div>

    <!-- Header Start -->
    <header>
      <!-- container start -->
      <div class="container">
        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="image">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
              <div class="toggle-wrap">
                <span class="toggle-bar"></span>
              </div>
            </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">
                  <?= translate("Home"); ?>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features">
                  <?= translate("Features"); ?>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#how_it_work">
                  <?= translate("How it works"); ?>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#customer-saies">
                  <?= translate("Testimonials"); ?>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#blog">
                  <?= translate("Blog"); ?>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  <?= translate("Contact"); ?>
                </a>
              </li>
              
            <li class="nav-item">
                <a class="nav-link" href="<?= $lang == 'ar' ? '/en' : '/ar' ?>">
                    <?= $lang == 'ar' ? 'English' : 'العربيه' ?>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link dark_btn" href="#getstarted">
                  <?= translate("GET STARTED"); ?>
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- navigation end -->
      </div>
      <!-- container end -->
    </header>






    <!-- Banner-Section-Start -->
    <section class="banner_section">
      <!-- hero bg -->
      <div class="hero_bg"> <img src="images/hero-bg.png" alt="image"> </div>
      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1500">
            <!-- banner text -->
            <div class="banner_text">
              <!-- h1 -->
              <h1>
                <?= translate("Welcome to"); ?> <span>
                  <?= translate("Rzain ERP Solutions."); ?>
                </span>
              </h1>
              <!-- p -->
              <h3>
                <?= translate("Where Every Step Is a Leap Forward"); ?>
              </h3>
            </div>

            <div class="trial_box">
              <!-- form -->
              <form action="" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="<?= translate("Enter your email"); ?>">
                </div>
                <div class="form-group">
                  <button class="btn">
                    <?= translate("SUBMIT"); ?>
                  </button>
                </div>
              </form>
            </div>

            <!-- list -->
            <div class="trial_box_list">
              <ul>
                <li><i class="icofont-check-circled"></i>
                  <?= translate("Free trial 14 days"); ?>
                </li>
                <li><i class="icofont-check-circled"></i>
                  <?= translate("No credit card require"); ?>
                </li>
              </ul>
            </div>

            <!-- users -->
            <!-- <div class="used_app">
          <ul>
            <li><img src="images/used01.png" alt="image" ></li>
            <li><img src="images/used02.png" alt="image" ></li>
            <li><img src="images/used03.png" alt="image" ></li>
            <li><img src="images/used04.png" alt="image" ></li>
          </ul>
          <p>12M + <br> used this app</p>
        </div> -->
          </div>

          <!-- banner images start -->
          <div class="col-lg-3 col-md-6" data-aos="fade-in" data-aos-duration="1500">
            <div class="banner_images image_box1">
              <span class="banner_image1"> <img class="moving_position_animatin" src="images/bannerimage1.png"
                  alt="image"> </span>
              <span class="banner_image2"> <img class="moving_animation" src="images/bannerimage2.png" alt="image">
              </span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-in" data-aos-duration="1500">
            <div class="banner_images image_box2">
              <span class="banner_image3"> <img class="moving_animation" src="images/bannerimage3.png" alt="image">
              </span>
              <span class="banner_image4"> <img class="moving_position_animatin" src="images/bannerimage4.png"
                  alt="image"> </span>
            </div>
          </div>
          <!-- banner slides end -->

        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- Banner-Section-end -->




    <!-- ModernUI-Section-Start -->
    <section class="row_am modern_ui_section">
      <!-- section bg -->
      <div class="modernui_section_bg">
          <img src="images/section-bg.png" alt="image" />
        </div>
      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <div class="col-lg-6">
            <!-- UI content -->
            <div class="ui_text">
              <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <h2>
                  <?= translate("Rzain ERP Solutions, Where Every Step Is a Leap Forward"); ?>
                  <span>
                    <?= translate("Where Every Step Is a Leap Forward"); ?>
                  </span>
                </h2>
              </div>
              <ul class="design_block">
                <li data-aos="fade-up" data-aos-duration="1500">
                  <h4>
                    <?= translate("Forge Your Path to Effortless Business"); ?>
                  </h4>
                </li>
                <li data-aos="fade-up" data-aos-duration="1500">
                  <h4>
                    <?= translate("Craft Your Journey to Seamless Operations Success"); ?>
                  </h4>
                </li>
                <li data-aos="fade-up" data-aos-duration="1500">
                  <h4>
                    <?= translate("Shape Your Business Destiny with our ERP System"); ?>
                  </h4>
                </li>
                <li data-aos="fade-up" data-aos-duration="1500">
                  <h4>
                    <?= translate("Navigate Your Enterprise with ERP Ease"); ?>
                  </h4>
                  <p></p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <!-- UI Image -->
            <div
                class="ui_images"
                data-aos="fade-in"
                data-aos-duration="1500"
              >
                <img
                  class="moving_position_animatin"
                  src="images/laptop.png"
                  alt="image"
                />
              </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- ModernUI-Section-end -->




    <!-- Features-Section-Start -->
    <section class="row_am features_section" id="features">
      <!-- section bg -->
      <div class="feature_section_bg"> <img src="images/section-bg.png" alt="image"> </div>
      <!-- container start -->
      <div class="container">
        <div class="features_inner">

          <!-- feature image -->
          <!-- <div class="feature_img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
            <img src="images/device-feature.png" alt="image">
          </div> -->

          <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
            <h2><span>
                <?= translate("Features"); ?>
              </span>
              <!--<?= translate("Features that makes app different!"); ?>-->
            </h2>
            <!-- p -->
            <p></p>
          </div>

          <!-- story -->
          <div class="features_block">
            <div class="row">
              <div class="col-md-3">
                <div class="feature_box" data-aos="fade-up" data-aos-duration="1500">
                  <div class="image text-center">
                    <img src="images/secure_data.png" alt="image">
                  </div>
                  <div class="text">
                    <h5>
                      <?= translate("Forge Your Path to Effortless Business"); ?>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="feature_box" data-aos="fade-up" data-aos-duration="1700">
                  <div class="image text-center">
                    <img src="images/functional.png" alt="image">
                  </div>
                  <div class="text">
                    <h5>
                      <?= translate("Craft Your Journey to Seamless Operations Success"); ?>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="feature_box" data-aos="fade-up" data-aos-duration="1900">
                  <div class="image text-center">
                    <img src="images/live-chat.png" alt="image">
                  </div>
                  <div class="text">
                    <h5>
                      <?= translate("Shape Your Business Destiny with our ERP System"); ?>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="feature_box" data-aos="fade-up" data-aos-duration="1900">
                  <div class="image text-center">
                    <img src="images/support.png" alt="image">
                  </div>
                  <div class="text">
                    <h5>
                      <?= translate("Navigate Your Enterprise with ERP Ease"); ?>
                    </h5>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
      <!-- container end -->
    </section>
    <!-- Features-Section-end -->


    <!-- About-App-Section-Start -->
    <section class="row_am about_app_section">
      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <div class="col-lg-6">

            <!-- about images -->
            <div class="about_img" data-aos="fade-in" data-aos-duration="1500">
              <div class="frame_img">
                <img class="moving_position_animatin" src="images/about-frame.png" alt="image">
              </div>
              <div class="screen_img">
                <img class="moving_animation" src="images/about-screen.png" alt="image">
              </div>
            </div>
          </div>
          <div class="col-lg-6">

            <!-- about text -->
            <div class="about_text">
              <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">

                <!-- h2 -->
                <h2>
                  <?= translate("Join the Rzain Revolution: Play Your Part in a Brighter Future."); ?>
                </h2>
                <!-- p -->
                <p>
                  <?= translate("Ditch the frustration and get your business singing in harmony. Rzain ERP helps you streamline workflows, make smarter decisions with real-time data, and become a leader in your field. Discover the heart of your success with Rzain's powerful tools. Contact us today and see how we can transform your business."); ?>
                </p>
                <p>
                  <?= translate("Is clunky software slowing you down? Rzain ERP is more than just software - it's the key to making your business run smoothly. We offer custom-fit solutions that grow with your company, boosting efficiency and setting you up for lasting success. Whether you're just starting out or aiming for new heights, Rzain helps you every step of the way."); ?>
                </p>
              </div>

              <a href="#" class="btn puprple_btn" data-aos="fade-in" data-aos-duration="1500">
                <?= translate("START FREE TRIAL"); ?>
              </a>
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- About-App-Section-end -->



 <!-- How-It-Workes-Section-Start -->
    <section class="row_am how_it_works" id="how_it_work">
      <!-- section bg -->
      <div class="how_section_bg"> <img src="images/section-bg.png" alt="image"> </div>
      <!-- container start -->
      <div class="container">
        <div class="how_it_inner">
          <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
            <h2><span>
                <?= translate("How it works"); ?>
              </span> -
              <?= translate("4 easy steps"); ?>
            </h2>
            <!-- p -->
            <p>
              <?= translate("Lorem Ipsum is simply dummy text of the printing and typese tting indus orem Ipsum has beenthe standard dummy."); ?>
            </p>
          </div>
          <div class="step_block">
            <!-- UL -->
            <ul>
              <!-- step -->
              <li>
                <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                  <h4>
                    <?= translate("Schedule a free consultation with our ERP experts."); ?>
                  </h4>
                  <p>
                    <?= translate("Together, we'll map out your business goals, identify challenges, and tailor a solution that perfectly fits your needs."); ?>
                  </p>
                </div>
                <div class="step_number number1">
                  <h3>01</h3>
                </div>
                <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                  <img src="images/1.png" alt="image" />
                </div>
              </li>

              <!-- step -->
              <li>
                <div class="step_text" data-aos="fade-left" data-aos-duration="1500">
                  <h4>
                    <?= translate("Effortless Integration:"); ?>
                  </h4>
                  <span></span>
                  <p>
                    <?= translate("Our team will customize Rzain ERP to seamlessly integrate with your existing systems, ensuring a smooth transition."); ?>
                  </p>
                </div>
                <div class="step_number number2">
                  <h3>02</h3>
                </div>
                <div class="step_img" data-aos="fade-right" data-aos-duration="1500">
                  <img src="images/2.png" alt="image" />
                </div>
              </li>

              <!-- step -->
              <li>
                <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                  <h4>
                    <?= translate("Expert Guidance"); ?>
                  </h4>
                  <span> </span>
                  <p>
                    <?= translate("Experienced professionals will guide you through every step of implementation, making sure everything runs efficiently."); ?>
                  </p>
                </div>
                <div class="step_number number3">
                  <h3>03</h3>
                </div>
                <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                  <img src="images/3.png" alt="image" />
                </div>
              </li>

              <!-- step -->
              <li>
                <div class="step_img" data-aos="fade-right" data-aos-duration="1500">
                  <img src="images/4.png" alt="image" />
                </div>
                <div class="step_number number2">
                  <h3>04</h3>
                </div>
                <div class="step_text" data-aos="fade-left" data-aos-duration="1500">
                  <h4>
                    <?= translate("Empower Your Team"); ?>
                  </h4>
                  <span></span>
                  <p>
                    <?= translate("We go beyond software. Comprehensive training gets everyone on board, and our ongoing support ensures you maximize Rzain ERP's benefits."); ?>
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <!-- video section start -->
        <div class="yt_video" data-aos="fade-in" data-aos-duration="1500">
          <div class="thumbnil">
            <img src="images/yt_thumb.png" alt="image">
            <a class="popup-youtube play-button" data-url="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1"
              data-toggle="modal" data-target="#myModal" title="XJj2PbenIsU">
              <span class="play_btn">
                <img src="images/play_icon.png" alt="image">
                <div class="waves-block">
                  <div class="waves wave-1"></div>
                  <div class="waves wave-2"></div>
                  <div class="waves wave-3"></div>
                </div>
              </span>
              <?= translate("Let’s see virtually how it works"); ?>
              <span>
                <?= translate("Watch video"); ?>
              </span>
            </a>
          </div>
        </div>
        <!-- video section end -->
      </div>
      <!-- container end -->
    </section>
    <!-- How-It-Workes-Section-end -->



    <!-- Testimonial-Section start -->
    <section class="row_am testimonial_section" id="customer-saies">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <!-- h2 -->
          <h2>
            <?= translate("What our") ?> <span>
              <?= translate("customer say") ?>
            </span>
          </h2>
          <!-- p -->
          <p></p>
        </div>
        <div class="testimonial_block" data-aos="fade-in" data-aos-duration="1500">
          <div id="testimonial_slider" class="owl-carousel owl-theme">
            <!-- user 1 -->
            <?php foreach(translate("testimonials") as $item) { ?>
            <div class="item">
              <div class="testimonial_slide_box">
                <div class="rating">
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                </div>
                <p class="review">
                  “
                  <?= $item['review'] ?> ”
                </p>
                <div class="testimonial_img">
                  <img src="<?= $item['image'] ?>" alt="image">
                </div>
                <h3>
                  <?= $item['name'] ?>
                </h3>
                <span class="designation">
                  <?= $item['designation'] ?>
                </span>
              </div>
            </div>

            <?php } ?>

          </div>

          <!-- total review -->
          <div class="total_review">
            <div class="rating">
              <span><i class="icofont-star"></i></span>
              <span><i class="icofont-star"></i></span>
              <span><i class="icofont-star"></i></span>
              <span><i class="icofont-star"></i></span>
              <span><i class="icofont-star"></i></span>
              <p>5.0 / 5.0</p>
            </div>
            <h3>2578</h3>
            <a href="#">
              <?=  translate("TOTAL USER REVIEWS")?> <i class="icofont-arrow-right"></i>
            </a>
          </div>

          <!-- avatar faces -->
          <div class="avatar_faces">
            <img src="images/avatar_testimonial.png" alt="image">
          </div>
        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- Testimonial-Section end -->




    <!-- Testimonial-Section end -->

    <!-- Pricing-Section -->
    <section class="row_am pricing_section d-none" id="pricing">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <!-- h2 -->
          <h2>Best & simple pricing</h2>
          <!-- p -->
          <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
            standard dummy.</p>
        </div>
        <!-- toggle button -->
        <div class="toggle_block" data-aos="fade-up" data-aos-duration="1500">
          <span class="month active">Monthly</span>
          <div class="tog_block">
            <span class="tog_btn"></span>
          </div>
          <span class="years">Yearly</span>
          <span class="offer">50% off</span>
        </div>

        <!-- pricing box  monthly start -->
        <div class="pricing_pannel monthly_plan active" data-aos="fade-up" data-aos-duration="1500">
          <!-- row start -->
          <div class="row">
            <!-- pricing box 1 -->
            <div class="col-md-4">
              <div class="pricing_block">
                <div class="icon">
                  <img src="images/standard.png" alt="image">
                </div>
                <div class="pkg_name">
                  <h3>Standard</h3>
                  <span>For the basics</span>
                </div>
                <span class="price">$15</span>
                <ul class="benifits">
                  <li>
                    <p>Up to 5 Website</p>
                  </li>
                  <li>
                    <p>50 GB disk space</p>
                  </li>
                  <li>
                    <p>10 Customize sub pages</p>
                  </li>
                  <li>
                    <p>2 Domains access</p>
                  </li>
                  <li>
                    <p>Support on request</p>
                  </li>
                </ul>
                <a href="#" class="btn white_btn">BUY NOW</a>
              </div>
            </div>

            <!-- pricing box 2 -->
            <div class="col-md-4">
              <div class="pricing_block highlited_block">
                <div class="icon">
                  <img src="images/unlimited.png" alt="image">
                </div>
                <div class="pkg_name">
                  <h3>Unlimited</h3>
                  <span>For the professionals</span>
                </div>
                <span class="price">$99</span>
                <ul class="benifits">
                  <li>
                    <p>Unlimited Website</p>
                  </li>
                  <li>
                    <p>200 GB disk space</p>
                  </li>
                  <li>
                    <p>20 Customize sub pages</p>
                  </li>
                  <li>
                    <p>10 Domains access</p>
                  </li>
                  <li>
                    <p>24/7 Customer support</p>
                  </li>
                </ul>
                <a href="#" class="btn white_btn">BUY NOW</a>
              </div>
            </div>

            <!-- pricing box 3 -->
            <div class="col-md-4">
              <div class="pricing_block">
                <div class="icon">
                  <img src="images/premium.png" alt="image">
                </div>
                <div class="pkg_name">
                  <h3>Premium</h3>
                  <span>For small team</span>
                </div>
                <span class="price">$55</span>
                <ul class="benifits">
                  <li>
                    <p>Up to 10 Website</p>
                  </li>
                  <li>
                    <p>100 GB disk space</p>
                  </li>
                  <li>
                    <p>15 Customize sub pages</p>
                  </li>
                  <li>
                    <p>4 Domains access</p>
                  </li>
                  <li>
                    <p>24/7 Customer support</p>
                  </li>
                </ul>
                <a href="#" class="btn white_btn">BUY NOW</a>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- pricing box monthly end -->

        <!-- pricing box yearly start -->
        <div class="pricing_pannel yearly_plan">
          <div class="row">

            <!-- pricing box 1 -->
            <div class="col-md-4">
              <div class="pricing_block">
                <div class="icon">
                  <img src="images/standard.png" alt="image">
                </div>
                <div class="pkg_name">
                  <h3>Standard</h3>
                  <span>For the basics</span>
                </div>
                <span class="price">$150</span>
                <ul class="benifits">
                  <li>
                    <p>Up to 10 Website</p>
                  </li>
                  <li>
                    <p>100 GB disk space</p>
                  </li>
                  <li>
                    <p>25 Customize sub pages</p>
                  </li>
                  <li>
                    <p>4 Domains access</p>
                  </li>
                  <li>
                    <p>Support on request</p>
                  </li>
                </ul>
                <a href="#" class="btn white_btn">BUY NOW</a>
              </div>
            </div>

            <!-- pricing box 2 -->
            <div class="col-md-4">
              <div class="pricing_block highlited_block">
                <div class="icon">
                  <img src="images/unlimited.png" alt="image">
                </div>
                <div class="pkg_name">
                  <h3>Unlimited</h3>
                  <span>For the professionals</span>
                </div>
                <span class="price">$999</span>
                <ul class="benifits">
                  <li>
                    <p>Unlimited Website</p>
                  </li>
                  <li>
                    <p>400 GB disk space</p>
                  </li>
                  <li>
                    <p>40 Customize sub pages</p>
                  </li>
                  <li>
                    <p>20 Domains access</p>
                  </li>
                  <li>
                    <p>24/7 Customer support</p>
                  </li>
                </ul>
                <a href="#" class="btn white_btn">BUY NOW</a>
              </div>
            </div>

            <!-- pricing box 3 -->
            <div class="col-md-4">
              <div class="pricing_block">
                <div class="icon">
                  <img src="images/premium.png" alt="image">
                </div>
                <div class="pkg_name">
                  <h3>Premium</h3>
                  <span>For small team</span>
                </div>
                <span class="price">$550</span>
                <ul class="benifits">
                  <li>
                    <p>Up to 20 Website</p>
                  </li>
                  <li>
                    <p>200 GB disk space</p>
                  </li>
                  <li>
                    <p>25 Customize sub pages</p>
                  </li>
                  <li>
                    <p>8 Domains access</p>
                  </li>
                  <li>
                    <p>24/7 Customer support</p>
                  </li>
                </ul>
                <a href="#" class="btn white_btn">BUY NOW</a>
              </div>
            </div>

          </div>
        </div>
        <!-- pricing box yearly end -->

        <p class="contact_text" data-aos="fade-up" data-aos-duration="1500">Not sure what to choose ? <a
            href="#">contact us</a> for custom packages</p>
      </div>
      <!-- container start end -->
    </section>
    <!-- Pricing-Section end -->
    <!-- FAQ-Section start -->
    <section class="row_am faq_section">
      <!-- section bg -->
      <div class="faq_bg"> <img src="images/section-bg.png" alt="image"> </div>
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <!-- h2 -->
          <h2><span>
              <?= translate("Connect Everything, Work Smarter"); ?>
            </span> , <?= translate("Work Smarter") ?></h2>
          <!-- p -->
          <p></p>
        </div>
        <!-- faq data -->
        <div class="faq_panel">
          <div class="accordion" id="accordionExample">
            <!-- PHP loop for FAQ items -->
            <?php foreach (translate("features-fqs") as $i => $item ): ?>
            <div class="card" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-header" id="heading-<?=$i ?>">
                <h2 class="mb-0">
                  <button type="button" class="btn btn-link active" data-toggle="collapse"
                    data-target="#collapse-<?=$i ?>">
                    <i class="icon_faq icofont-plus"></i>
                    <?= $item['title']??''; ?>
                  </button>
                </h2>
              </div>
              <div id="collapse-<?=$i ?>" class="collapse <?= $i == 0? 'show' : '' ?>" aria-labelledby="headingOne"
                data-parent="#accordionExample">
                <div class="card-body">
                  <p>
                    <?= $item['text']??'' ?>
                  </p>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- End of PHP loop -->
          </div>
        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- FAQ-Section end -->
    
    
    
    
    
    <section class="row_am features_section" id="features">
      <!-- section bg -->
      <div class="feature_section_bg"> <img src="images/section-bg.png" alt="image"> </div>
      <!-- container start -->
      <div class="container">
        <div class="features_inner py-5">
          <div class="section_title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
            data-aos-delay="300">
            <!-- h2 -->
            <h2><span>
                <?= translate("Features"); ?>
              </span>
              <?= translate("that makes app different!"); ?>
            </h2>
            <!-- p -->
            <p>
            </p>
          </div>

          <!-- story -->
          <div class="features_block">
            <div class="row" style="justify-content: space-between;">
              <div class="col-md-3">
                <div class="feature_box aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                  <div class="image text-center">
                    <img src="images/secure_data.png" alt="image">
                  </div>
                  <div class="text">
                    <h5>
                      <?= translate("Discover How Rzain Can Help You Achieve Your Business Goals!"); ?>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="feature_box aos-init aos-animate" data-aos="fade-up" data-aos-duration="1700">
                  <div class="image text-center">
                    <img src="images/functional.png" alt="image">
                  </div>
                  <div class="text">
                    <h5>
                      <?= translate("Get a Personalized Quote & Request a Free Rzain ERP Demo"); ?>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="feature_box aos-init aos-animate" data-aos="fade-up" data-aos-duration="1900">
                  <div class="image text-center">
                    <img src="images/live-chat.png" alt="image">
                  </div>
                  <div class="text">
                    <h5>
                      <?= translate("Schedule Your Free Consultation Today!"); ?>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- container end -->
    </section>



    <!-- Download-Free-App-section-Start -->
    <section class="row_am free_app_section" id="getstarted">
      <!-- container start -->
      <div class="container">
        <div class="free_app_inner" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
          <!-- row start -->
          <div class="row">
            <!-- content -->
            <div class="col-md-6">
              <div class="free_text">
                <div class="section_title">
                  <h2>
                    <?= translate("Let’s download free from apple and play store"); ?>
                  </h2>
                  <p>
                    <?= translate("Instant free download from apple and play store orem Ipsum is simply dummy text of the printing. and typese tting indus orem Ipsum has beenthe standard"); ?>
                  </p>
                </div>
                <ul class="app_btn">
                  <li>
                    <a href="#">
                      <img src="images/appstore_blue.png" alt="image">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="images/googleplay_blue.png" alt="image">
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- images -->
            <div class="col-md-6">
              <div class="free_img">
                <img src="images/download-screen01.png" alt="image">
                <img class="mobile_mockup" src="images/download-screen02.png" alt="image">
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- Download-Free-App-section-end -->





    <!-- Story-Section-Start -->
    <section class="row_am latest_story d-none" id="blog">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
          <h2>Read latest <span>story</span></h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
            standard dummy.</p>
        </div>
        <!-- row start -->
        <div class="row">
          <!-- story -->
          <div class="col-md-4">
            <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
              <div class="story_img">
                <img src="images/story01.png" alt="image">
                <span>45 min ago</span>
              </div>
              <div class="story_text">
                <h3>Cool features added!</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                  industry lorem Ipsum has.</p>
                <a href="#">READ MORE</a>
              </div>
            </div>
          </div>

          <!-- story -->
          <div class="col-md-4">
            <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
              <div class="story_img">
                <img src="images/story02.png" alt="image">
                <span>45 min ago</span>
              </div>
              <div class="story_text">
                <h3>Top rated app! Yupp.</h3>
                <p>Simply dummy text of the printing and typesetting industry lorem Ipsum has Lorem Ipsum is.</p>
                <a href="#">READ MORE</a>
              </div>
            </div>
          </div>

          <!-- story -->
          <div class="col-md-4">
            <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
              <div class="story_img">
                <img src="images/story03.png" alt="image">
                <span>45 min ago</span>
              </div>
              <div class="story_text">
                <h3>Creative ideas on app.</h3>
                <p>Printing and typesetting industry lorem Ipsum has Lorem simply dummy text of the.</p>
                <a href="#">READ MORE</a>
              </div>
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- Story-Section-end -->

    <!-- Trusted Section start -->
    <section class="row_am trusted_section">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
          <!-- h2 -->
          <h2>
            <?= translate("Trusted by <span>150+</span> companies"); ?>
          </h2>
          <!-- p -->
          <p>
            <?= translate("Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe standard dummy."); ?>
          </p>
        </div>

        <!-- logos slider start -->
        <div class="company_logos">
          <div id="company_slider" class="owl-carousel owl-theme">
            <div class="item">
              <div class="logo">
                <img src="images/paypal.png" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="images/spoty.png" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="images/shopboat.png" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="images/slack.png" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="images/envato.png" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="images/paypal.png" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="images/spoty.png" alt="image">
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="images/shopboat.png" alt="image">
              </div>
            </div>
          </div>
        </div>
        <!-- logos slider end -->
      </div>
      <!-- container end -->
    </section>
    <!-- Trusted Section ends -->


    <!-- Contact Us Section Start -->
    <section class="contact_page_section my-5 py-5" id="contact">
      <div class="container">
        <div class="contact_inner">
          <div class="contact_form">
            <div class="section_title">
              <h2>
                <?= translate("Leave a <span>message</span>"); ?>
              </h2>
              <p>
                <?= translate("Fill up form below, our team will get back soon"); ?>
              </p>
            </div>
            <form action="">
              <div class="form-group">
                <input type="text" placeholder="<?= translate(" Name"); ?>" class="form-control">
              </div>
              <div class="form-group">
                <input type="email" placeholder="<?= translate(" Email"); ?>" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" placeholder="<?= translate(" Phone"); ?>" class="form-control">
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="<?= translate(" Your message"); ?>"></textarea>
              </div>
              <div class="form-group mb-0">
                <button type="submit" class="btn puprple_btn">
                  <?= translate("SEND MESSAGE"); ?>
                </button>
              </div>
            </form>
          </div>
          <div class="contact_info">
            <div class="icon"><img src="images/contact_message_icon.png" alt="image"></div>
            <div class="section_title">
              <h2>
                <?= translate("Have any <span>question?</span>"); ?>
              </h2>
              <p>
                <?= translate("If you have any question about our product, service, payment or company, Visit our <a href=\"#\">FAQs page.</a>"); ?>
              </p>
            </div>
            <a href="#" class="btn puprple_btn">
              <?= translate("READ FAQ"); ?>
            </a>
            <ul class="contact_info_list">
              <li>
                <div class="img">
                  <img src="images/mail_icon.png" alt="image">
                </div>
                <div class="text">
                  <span>
                    <?= translate("Email Us"); ?>
                  </span>
                  <a href="mailto:example@gmail.com">example@gmail.com</a>
                </div>
              </li>
              <li>
                <div class="img">
                  <img src="images/call_icon.png" alt="image">
                </div>
                <div class="text">
                  <span>
                    <?= translate("Call Us"); ?>
                  </span>
                  <a href="tel:+1(888)553-46-11">+1 (888) 553-46-11</a>
                </div>
              </li>
              <li>
                <div class="img">
                  <img src="images/location_icon.png" alt="image">
                </div>
                <div class="text">
                  <span>
                    <?= translate("Visit Us"); ?>
                  </span>
                  <p>5687, Business Avenue, New York, USA 5687</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Us Section End -->

    <!-- News-Letter-Section-Start -->
    <section class="newsletter_section">
      <!-- container start -->
      <div class="container">
        <div class="newsletter_box">
          <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
            <!-- h2 -->
            <h2>
              <?= translate("Subscribe newsletter"); ?>
            </h2>
            <!-- p -->
            <p>
              <?= translate("Be the first to recieve all latest post in your inbox"); ?>
            </p>
          </div>
          <form action="" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="<?= translate(" Enter your email"); ?>">
            </div>
            <div class="form-group">
              <button class="btn">
                <?= translate("SUBMIT"); ?>
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- News-Letter-Section-end -->
    
    


    <!-- Footer-Section start -->
    <footer>
      <!-- section bg -->
      <div class="footer_bg"> <img src="images/section-bg.png" alt="image"> </div>
      <div class="top_footer">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">
            <!-- footer link 1 -->
            <div class="col-lg-4 col-md-6 col-12">
              <div class="abt_side">
                <div class="logo"> <img src="images/footer_logo.png" alt="image"></div>
                <ul>
                  <li><a href="#">
                      <?= translate("support@example.com"); ?>
                    </a></li>
                  <li><a href="#">
                      <?= translate("+1-900-123 4567"); ?>
                    </a></li>
                </ul>
                <ul class="social_media">
                  <li><a href="#"><i class="icofont-facebook"></i></a></li>
                  <li><a href="#"><i class="icofont-twitter"></i></a></li>
                  <li><a href="#"><i class="icofont-instagram"></i></a></li>
                  <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                </ul>
              </div>
            </div>

            <!-- footer link 2 -->
            <div class="col-lg-3 col-md-6 col-12">
              <div class="links">
                <h3>
                  <?= translate("Useful Links"); ?>
                </h3>
                <ul>
                  <li><a href="#">
                      <?= translate("Home"); ?>
                    </a></li>
                  <li><a href="#">
                      <?= translate("About us"); ?>
                    </a></li>
                  <li><a href="#">
                      <?= translate("Services"); ?>
                    </a></li>
                  <li><a href="#">
                      <?= translate("Blog"); ?>
                    </a></li>
                  <li><a href="#">
                      <?= translate("Contact us"); ?>
                    </a></li>
                </ul>
              </div>
            </div>

            <!-- footer link 3 -->
            <div class="col-lg-3 col-md-6 col-12">
              <div class="links">
                <h3>
                  <?= translate("Help & Support"); ?>
                </h3>
                <ul>
                  <li><a href="#">
                      <?= translate("FAQs"); ?>
                    </a></li>
                  <li><a href="#">
                      <?= translate("Support"); ?>
                    </a></li>
                  <li><a href="#">
                      <?= translate("How it works"); ?>
                    </a></li>
                  <li><a href="#">
                      <?= translate("Terms & conditions"); ?>
                    </a></li>
                  <li><a href="#">
                      <?= translate("Privacy policy"); ?>
                    </a></li>
                </ul>
              </div>
            </div>

            <!-- footer link 4 -->
            <div class="col-lg-2 col-md-6 col-12">
              <div class="try_out">
                <h3>
                  <?= translate("Let’s Try Out"); ?>
                </h3>
                <ul class="app_btn">
                  <li>
                    <a href="#">
                      <img src="images/appstore_blue.png" alt="image">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="images/googleplay_blue.png" alt="image">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </div>

      <!-- last footer -->
      <div class="bottom_footer">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">
            <div class="col-md-6">
              ©
              <p>
                <?= translate("Copyrights")?>2024.
                <?= translate("All rights reserved."); ?>
              </p>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </div>

      <!-- go top button -->
      <div class="go_top">
        <span><img src="images/go_top.png" alt="image"></span>
      </div>
    </footer>
    <!-- Footer-Section end -->

    <!-- VIDEO MODAL -->
    <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button id="close-video" type="button" class="button btn btn-default text-right" data-dismiss="modal">
            <i class="icofont-close-line-circled"></i>
          </button>
          <div class="modal-body">
            <div id="video-container" class="video-container">
              <iframe id="youtubevideo" src="" width="640" height="360" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

    <div class="purple_backdrop"></div>

  </div>
  <!-- Page-wrapper-End -->

  <!-- Jquery-js-Link -->
  <script src="js/jquery.js"></script>
  <!-- owl-js-Link -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- bootstrap-js-Link -->
  <script src="js/bootstrap.min.js"></script>
  <!-- aos-js-Link -->
  <script src="js/aos.js"></script>
  <!-- main-js-Link -->
  <script src="js/main.js"></script>

</body>

</html>