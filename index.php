<?php 
include "./inc/function.php";

$recaptcha_client_key = sm_recaptcha_client_key();
 ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="pxdraft">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Tapsi - Portfolio Template">
    <meta name="description" content="Tapsi - Portfolio Template">
    <!-- title -->
    <title>Segun Mayor - Portfolio</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo 'assets/img/sm_200.png'; ?>">
    <!-- theme css -->
    
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/color-3.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/regular.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/solid.min.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/svg-with-js.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/v4-font-face.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/v4-shims.min.css" rel="stylesheet">
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/v5-font-face.min.css" rel="stylesheet">
       <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.css" integrity="sha512-riTSV+/RKaiReucjeDW+Id3WlRLVZlTKAJJOHejihLiYHdGaHV7lxWaCfAvUR0ErLYvxTePZpuKZbrTbwpyG9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!-- Body Start -->

<body>
     <!-- overlay -->
      <div class="overlay"></div>
    <!-- Header Top -->
    <header class="main-header d-lg-none">
        <div class="container">
            <!-- Brand -->
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <img class="logo-dark" title="" alt="" src="assets/img/sm_200.png">
                    <!-- <img class="logo-light" title="" alt="" src="assets/img/sm_200_white.png"> -->
                </a>
            </div>
            <div class="ms-auto">
                <button class="toggler-menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
    <!-- End Header Top -->
    <div class="header-left-fixed one-page-nav">
        <!-- Brand -->
        <div class="logo">
            <a class="navbar-brand" href="#">
                <img class="logo-dark" title="" alt="" src="assets/img/sm_200.png">
                <img class="logo-light" title="" alt="" src="assets/img/sm_200_white.png">
            </a>
        </div>
        <!-- / -->
        <ul class="main-menu">
            <li>
                <a data-scroll-nav="0" href="#home">
                    <span class="m-icon">
                        <i class="bi-house-door"></i>
                    </span>
                    <span class="m-text">Home</span>
                </a>
            </li>
            <li>
                <a data-scroll-nav="1" href="#services">
                    <span class="m-icon">
                        <i class="bi-person"></i>
                    </span>
                    <span class="m-text">About</span>
                </a>
            </li>
            <!-- <li>
                <a data-scroll-nav="2" href="#services">
                    <span class="m-icon">
                        <i class="bi bi-briefcase"></i>
                    </span>
                    <span class="m-text">Services</span>
                </a>
            </li> -->
            <li>
                <a data-scroll-nav="3" href="#work">
                    <span class="m-icon">
                        <i class="bi bi-columns"></i>
                    </span>
                    <span class="m-text">Portfolio</span>
                </a>
            </li>
            <li>
                <a data-scroll-nav="4" href="#contactus">
                    <span class="m-icon">
                        <i class="bi bi-telephone"></i>
                    </span>
                    <span class="m-text">Contact</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Main -->
    <main class="wrapper">
        <!-- Home -->
        <section id="home" data-scroll-index="0" class="home-section">
            <div class="container">
                <div class="row align-items-center min-vh-100 flex-row-reverse">
                    <div class="col-lg-6 ps-xl-5 mb-5 mb-lg-0">
                        <div class="home-intro">
                            <h6>👋 Hi, I’ m</h6>
                            <h1>Segun <span><img src="assets/img/m.jpg" title="" alt=""></span>Mayor</h1>
                            <h2>I'm a <span id="type-it"></span></h2>
                            <p class="pe-lg-5">I partner with startups and organizations to build digital products that help clients overcome challenges and create lasting connections with millions of people every day.</p>
                            <div class="btn-bar">
                                <a class="px-btn px-btn-theme" href="assets/pdf/segun_mayor_cv_fs.pdf" download>Download cv <i class="bi-download"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="home-image text-center">
                            <div class="hi-icon-top">
                                <svg width="123" height="123" viewBox="0 0 123 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M44.4879 2.72729C18.0681 -8.74866 -8.74539 18.0655 2.73027 44.486L4.62443 48.8556C6.3577 52.8463 7.2521 57.1507 7.2521 61.5015C7.2521 65.8524 6.3577 70.1568 4.62443 74.1475L2.7272 78.5141C-8.74847 104.935 18.065 131.749 44.491 120.273L48.8574 118.375C52.848 116.642 57.1523 115.748 61.5031 115.748C65.8538 115.748 70.1581 116.642 74.1488 118.375L78.5152 120.273C104.932 131.749 131.748 104.935 120.273 78.511L118.376 74.1445C116.642 70.1537 115.748 65.8493 115.748 61.4985C115.748 57.1476 116.642 52.8432 118.376 48.8525L120.273 44.486C131.748 18.0655 104.935 -8.74866 78.5121 2.72729L74.1457 4.62457C70.1551 6.35788 65.8508 7.25231 61.5 7.25231C57.1492 7.25231 52.8449 6.35788 48.8543 4.62457L44.4879 2.72729Z" fill="var(--px-theme)" />
                                </svg>
                            </div>
                            <div class="hi-icon-bottom">
                                <svg width="123" height="123" viewBox="0 0 123 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M44.4879 2.72729C18.0681 -8.74866 -8.74539 18.0655 2.73027 44.486L4.62443 48.8556C6.3577 52.8463 7.2521 57.1507 7.2521 61.5015C7.2521 65.8524 6.3577 70.1568 4.62443 74.1475L2.7272 78.5141C-8.74847 104.935 18.065 131.749 44.491 120.273L48.8574 118.375C52.848 116.642 57.1523 115.748 61.5031 115.748C65.8538 115.748 70.1581 116.642 74.1488 118.375L78.5152 120.273C104.932 131.749 131.748 104.935 120.273 78.511L118.376 74.1445C116.642 70.1537 115.748 65.8493 115.748 61.4985C115.748 57.1476 116.642 52.8432 118.376 48.8525L120.273 44.486C131.748 18.0655 104.935 -8.74866 78.5121 2.72729L74.1457 4.62457C70.1551 6.35788 65.8508 7.25231 61.5 7.25231C57.1492 7.25231 52.8449 6.35788 48.8543 4.62457L44.4879 2.72729Z" fill="var(--px-theme)" />
                                </svg>
                            </div>
                            <img src="assets/img/home-banner-m2.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Home -->
        <!-- About -->
        <section id="about" data-scroll-index="1" class="section about-section gray-bg-1">
            <div class="container">
                <div class="about-me">
                    <div class="row align-items-start">
                        <div class="col-lg-5 pb-4 pb-lg-0">
                            <div class="title-01">
                                <span>About Me</span>
                            </div>
                            <div class="about-me-text pb-5">
                                <h3>My name is Segun Mayor</h3>
                                <h5><span>I Am Available</span> For software   Projects</h5>
                                <p>I'm a full stack software engineerwith specialty in creating software programs and maintainance of application code  using best practices.</p>
                                <!-- <div class="row pt-2">
                                    <div class="col-auto">
                                        <div class="a-count">
                                            <span class="count">5k</span>
                                            <div class="a-count-text">Projects <br>Completed.</div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="a-count">
                                            <span class="count">3k</span>
                                            <div class="a-count-text">Satisfied <br>Clients.</div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <hr>
                            <div class="title-01 mt-5">
                                <span>Experience</span>
                            </div>
                            <div class="resume-box">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-briefcase"></i>
                                        </div>
                                        <span class="time">2019 - Present</span>
                                        <h5>Senior Software Engineer - Datakript Teknologies</h5>
                                        <p>Lead team of engineers to ensure successful delivery of quality and functionality of software projects according to requirements. </p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-briefcase"></i>
                                        </div>
                                        <span class="time">2016 - 2018</span>
                                        <h5>Fullstack Software Engineer - Zowasel Ltd</h5>
                                        <p>Work within a team of engineers to deliver high quality software solutions. I take a different role in different projects as assigned to me from project planning to final delivery. Responsible for developing applications, Restful Apis, managing databases and sometimes deploying completed applications following best practices.</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-briefcase"></i>
                                        </div>
                                        <span class="time">2018</span>
                                        <h5>Frontend Software Developer (Remote) - Contractium Ltd</h5>
                                        <p>Work with team of engineer as a frontend developer in creating cryptocurrency applications.</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-briefcase"></i>
                                        </div>
                                        <span class="time">2013 - 2015</span>
                                        <h5>Junior Software Developer - Teleios Technologies</h5>
                                        <p>Assist in developing of softwares, debugging and perform other necessary tasks as instructed by the team lead to acheiving a successful delivery of quality and functional softwares.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 sticky-lg-top ps-xl-5">
                            <div class="row align-items-start">
                                <div class="col-md-7 py-4">
                                    <div class="about-me-img">
                                        <img src="assets/img/mayor.jpeg" title="" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 py-4">
                                    <div class="about-content">
                                        <ul>
                                            <li>
                                                <div class="a-icon">
                                                    <i class="fab fa-skype"></i>
                                                </div>
                                                <div class="a-text">
                                                    <a class="text-reset stretched-link" href="https://join.skype.com/invite/K7kfYXR11CKw#">Skype me</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="a-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <div class="a-text">
                                                    <a class="text-reset stretched-link" href="mailto:enquiry@segunmayor.com">Mail Me</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="a-icon">
                                                    <i class="fab fa-whatsapp"></i>
                                                </div>
                                                <div class="a-text">
                                                    <a class="text-reset stretched-link" href="https://api.whatsapp.com/send?phone=2349092149449&text=Hi%2C%20I%20saw%20your%20profile%20and%20I%20would%20like%20to%20discuss%20some%20projects%20with%20you.">WhatsApp Me</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="a-icon">
                                                    <i class="fa fa-map"></i>
                                                </div>
                                                <div class="a-text">
                                                    <a class="text-reset stretched-link" href="https://github.com/segunmayor">Github</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="a-icon">
                                                    <i class="fa-solid fa-linkedin"></i>
                                                </div>
                                                <div class="a-text">
                                                    <a class="text-reset stretched-link" href="https://www.linkedin.com/in/segunmayor">Linkedin</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 py-4">
                                    <div class="title-01">
                                        <span>Skills</span>
                                    </div>
                                    <div class="skills">
                                        <div class="skill-lt">
                                            <h6 class="dark-color">C++</h6>
                                            <div class="skill-bar">
                                                <div class="skill-bar-in" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
                                                    <span>81%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-lt">
                                            <h6 class="dark-color">JavaScript</h6>
                                            <div class="skill-bar">
                                                <div class="skill-bar-in" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                                                    <span>92%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-lt">
                                            <h6 class="dark-color">Sql</h6>
                                            <div class="skill-bar">
                                                <div class="skill-bar-in" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                    <span>96%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-lt">
                                            <h6 class="dark-color">PHP</h6>
                                            <div class="skill-bar">
                                                <div class="skill-bar-in" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                                    <span>95%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-lt">
                                            <h6 class="dark-color">Python</h6>
                                            <div class="skill-bar">
                                                <div class="skill-bar-in" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                                    <span>78%</span>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="skill-lt">
                                            <h6 class="dark-color">TypeScript</h6>
                                            <div class="skill-bar">
                                                <div class="skill-bar-in" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                                    <span>94%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-lt">
                                            <h6 class="dark-color">Bash</h6>
                                            <div class="skill-bar">
                                                <div class="skill-bar-in" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                                    <span>97%</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About -->
        <!-- Services -->
        <!-- <section id="services" data-scroll-index="2" class="section services-section">
            <div class="container">
                <div class="section-heading">
                    <h3>
                        <span>MY SERVICES</span>
                    </h3>
                </div>
                <div class="row gy-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="icon"><i class="bi bi-phone"></i></div>
                            <div class="feature-content">
                                <h5>Web Design</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="icon"><i class="bi bi-laptop"></i></div>
                            <div class="feature-content">
                                <h5>Development</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="icon"><i class="bi bi-triangle"></i></div>
                            <div class="feature-content">
                                <h5>SEO Marketing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="icon"><i class="bi bi-columns"></i></div>
                            <div class="feature-content">
                                <h5>Web Design</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="icon"><i class="bi bi-distribute-vertical"></i></div>
                            <div class="feature-content">
                                <h5>Development</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="icon"><i class="bi bi-globe2"></i></div>
                            <div class="feature-content">
                                <h5>SEO Marketing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Services -->
        <!-- portfolio -->
        <section id="portfolio" data-scroll-index="3" class="section portfolio-section gray-bg-1">
            <div class="container">
                <div class="section-heading">
                    <h3>
                        <span>My Portfolio</span>
                    </h3>
                    <p><small>From list of projects...</small></p>
                </div>
                <div class="lightbox-gallery">
                    <div class="container">
<div class="row">
<div class="col">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" aria-current="page" href="#" id="web-tab" data-bs-toggle="tab" data-bs-target="#web" aria-selected="false">Web</a>
  </li>
  <!-- <li class="nav-item" role="presentation">
    <a class="nav-link" href="#" id="desktop-tab" data-bs-toggle="tab" data-bs-target="#desktop" aria-selected="false">Desktop</a>
  </li> -->
  <!-- <li class="nav-item" role="presentation">
    <a class="nav-link" href="#" id="newsletter-tab" data-bs-toggle="tab" data-bs-target="#newsletter" aria-selected="false">Newsletter</a>
  </li> -->
  <!-- <li class="nav-item" role="presentation">
    <a class="nav-link" href="#" tabindex="-1" id="mobile-tab" data-bs-toggle="tab" data-bs-target="#mobile" aria-selected="false">Mobile</a>
  </li> -->
</ul>
</div>
</div>
<div class="row">
    <div class="col">
        <div class="tab-contents" id="tabContents">
            <div class="tab-pane fade show active" id="web" role="tabpanel" aria-labelledby="web-tab">
                <div class="row g-3 g-lg-4 portfolio-content">
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>Web App Design</h6>
                                    <p>An agrotech based web application for farmers and consumers</p>
                                    <a class="gallery-link" href="assets/img/project1.jpg"><i class="bi-arrow-up-right-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/project1.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>Website Design</h6>
                                    <p>Website  Design</p>
                                    <a class="gallery-link" href="assets/img/project2.jpg"><i class="bi-arrow-up-right-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/project2.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>Web Design</h6>
                                    <p>Web Design</p>
                                    <a class="gallery-link" href="assets/img/project3.jpg"><i class="bi-arrow-up-right-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/project3.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>Web App Design</h6>
                                    <p>Web App Design</p>
                                    <a class="gallery-link" href="assets/img/project4.jpg"><i class="bi-arrow-up-right-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/project4.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>Web Design</h6>
                                    <p>Web Design</p>
                                    <a class="gallery-link" href="assets/img/project5.jpg"><i class="bi-arrow-up-right-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/project5.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>Web Design</h6>
                                    <p>Web Design</p>
                                    <a class="gallery-link" href="assets/img/project6.jpg"><i class="bi-arrow-up-right-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/project6.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>Web App Design</h6>
                                    <p>Law firm website designed for Lawlords Firm</p>
                                    <a class="gallery-link" href="assets/img/lawlords.jpg"><i class="bi-arrow-up-right-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/lawlords.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>Web Design</h6>
                                    <p>Scrapper used for scrapping all kinds of websites. Available as both Good Chrome and Mozilla Firefox extensions</p>
                                    <a class="gallery-link" href="assets/img/dkscrapper.jpg"><i class="bi-arrow-up-right-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/dkscrapper.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 grid-item">
                            <div class="portfolio-box">
                                <div class="portfolio-text">
                                    <h6>Web Design</h6>
                                    <p>Real estate website</p>
                                    <a class="gallery-link" href="assets/img/structhaus.jpg"><i class="bi-arrow-up-right-circle"></i></a>
                                </div>
                                <div class="portfolio-img">
                                    <img src="assets/img/structhaus.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
  <!-- <div class="tab-pane fade" id="desktop" role="tabpanel" aria-labelledby="desktop-tab">...</div> -->
  <!-- <div class="tab-pane fade" id="newsletter" role="tabpanel" aria-labelledby="newsletter-tab">...</div> -->
   <!-- <div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile-tab">...</div> -->
        </div>
    </div>
<div>
</div>
                </div>
            </div>
        </section>
        <!-- End portfolio -->
        <!-- Testimonials -->
        <!-- <section class="section testimonials-section">
            <div class="container">
                <div class="section-heading">
                    <h3>
                        <span>Testimonials</span>
                    </h3>
                </div>
                <div class="owl-carousel" data-items="3" data-nav-dots="true" data-lg-items="3" data-md-items="2" data-sm-items="1" data-xs-items="1" data-space="24" data-autoplay="false">
                    <div class="testimonials-box">
                        <div class="t-lead">
                            <img src="assets/img/avatar-1.jpg" title="" alt="">
                        </div>
                        <div class="t-text">
                            <h5>Customers and interested parties engaged.</h5>
                            <p>“I found it easy to capture my ideas and sketch visuals to sheare with my clints on the go”</p>
                            <div class="t-avatar">
                                <h6>Jennifer Lutheran</h6>
                                <span>CEO at pxdraft</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-box">
                        <div class="t-lead">
                            <img src="assets/img/avatar-2.jpg" title="" alt="">
                        </div>
                        <div class="t-text">
                            <h5>Customers and interested parties engaged.</h5>
                            <p>“I found it easy to capture my ideas and sketch visuals to sheare with my clints on the go”</p>
                            <div class="t-avatar">
                                <h6>Jennifer Lutheran</h6>
                                <span>CEO at pxdraft</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-box">
                        <div class="t-lead">
                            <img src="assets/img/avatar-3.jpg" title="" alt="">
                        </div>
                        <div class="t-text">
                            <h5>Customers and interested parties engaged.</h5>
                            <p>“I found it easy to capture my ideas and sketch visuals to sheare with my clints on the go”</p>
                            <div class="t-avatar">
                                <h6>Jennifer Lutheran</h6>
                                <span>CEO at pxdraft</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-box">
                        <div class="t-lead">
                            <img src="assets/img/avatar-2.jpg" title="" alt="">
                        </div>
                        <div class="t-text">
                            <h5>Customers and interested parties engaged.</h5>
                            <p>“I found it easy to capture my ideas and sketch visuals to sheare with my clints on the go”</p>
                            <div class="t-avatar">
                                <h6>Jennifer Lutheran</h6>
                                <span>CEO at pxdraft</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-box">
                        <div class="t-lead">
                            <img src="assets/img/avatar-3.jpg" title="" alt="">
                        </div>
                        <div class="t-text">
                            <h5>Customers and interested parties engaged.</h5>
                            <p>“I found it easy to capture my ideas and sketch visuals to sheare with my clints on the go”</p>
                            <div class="t-avatar">
                                <h6>Jennifer Lutheran</h6>
                                <span>CEO at pxdraft</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Testimonials -->
        <!-- contactus -->
        <section id="contactus" data-scroll-index="4" class="section contactus-section gray-bg-1">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-5 d-flex">
                        <div class="d-flex flex-column w-100">
                            <div class="contact-info">
                                <h3>Let’s Discuss Your Project</h3>
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="bi-chat-left-dots-fill"></i>
                                        </div>
                                        <div class="text">
                                            <label>Chat with me</label>
                                            <p>I am available to help. <span><a class="text-reset" href="mailto:enquiry@segunmayor.com">enquiry@segunmayor.com</a></span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="bi-compass"></i>
                                        </div>
                                        <div class="text">
                                            <label>Visit me</label>
                                            <p> Come say hello at my office HQ. <span>7, Alabi Street, <br> Ikeja - Lagos.</span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="bi-phone"></i>
                                        </div>
                                        <div class="text">
                                            <label>Call me</label>
                                            <p>Mon-Sat from 8am to 5pm. <span>+234 (91) 5997 3087</span></p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="google-map mt-5">
                                    <div class="ratio ratio-21x9">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d3963.419743222028!2d3.3498764!3d6.5946398!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x103b923b922f2a55%3A0x736586ede5b23124!2s7%20Alabi%20St%2C%20Opebi%2C%20Ikeja%20101233%2C%20Lagos!3m2!1d6.5946345!2d3.3524513!5e0!3m2!1sen!2sng!4v1702566032094!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 ps-xl-5">
                        <div class="contact-form">
                            <div class="contact-head">
                                <h4>Got Ideas? We've got the skills. Let's team up.</h4>
                                <p>Tell us more about yourself and what you're got in mind.</p>
                            </div>
                            <form id="contact_form" method="POST" action="./inc/action">
                                <input type="text" name="form_type" value="contact_form"   class="form_type">
                                <div class="row gx-3 gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input name="name" id="name" placeholder="Name *" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Your Email</label>
                                            <input name="email" id="email" placeholder="Email *" class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Subject</label>
                                            <input name="subject" id="subject" placeholder="Subject *" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Your message</label>
                                            <textarea name="message" id="message" placeholder="Your message *" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="send">
                                            <button data-callback="onSubmitContactForm" data-action="submit" data-sitekey="<?php echo $recaptcha_client_key ?>" class="g-recaptcha px-btn w-100" type="submit" value="Send"> Send Message</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div name="form_response" class="form-response"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End contactus -->
        
    </main>
     <!-- popup -->
            <div class="portfolio-popup">
                <div class="wrapper-popup">
                    <!-- <img src="#" alt="portfolio" class="popup" /> -->
                </div>
            </div>
         <!-- ./popup -->
    <!-- Main -->
    <!-- Snigle 1 -->
    <!-- <div id="project_1" class="px-modal mfp-hide">
        <div class="single-project-box">
            <div class="row align-items-start">
                <div class="col-lg-7">
                    <div class="row g-2">
                        <div class="col-6">
                            <img class="border" src="assets/img/project-2.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-3.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-4.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-1.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <h4>Website Design for Marketing Agency Startup</h4>
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="about-content">
                        <ul>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Type:</span>
                                <span>Website</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Langages:</span>
                                <span>PHP, HTML, CSS, JS</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Platform:</span>
                                <span>WordPress</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Country:</span>
                                <span>USA</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Live URL:</span>
                                <span>www.example.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Snigle 1 -->
    <!-- Snigle 2 -->
    <!-- <div id="project_2" class="px-modal mfp-hide">
        <div class="single-project-box">
            <div class="row align-items-start">
                <div class="col-lg-7">
                    <div class="row g-2">
                        <div class="col-6">
                            <img class="border" src="assets/img/project-2.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-3.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-4.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-1.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <h4>Website Design for Marketing Agency Startup</h4>
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="about-content">
                        <ul>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Type:</span>
                                <span>Website</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Langages:</span>
                                <span>PHP, HTML, CSS, JS</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Platform:</span>
                                <span>WordPress</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Country:</span>
                                <span>USA</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Live URL:</span>
                                <span>www.example.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Snigle 2 -->
    <!-- Snigle 3 -->
    <!-- <div id="project_3" class="px-modal mfp-hide">
        <div class="single-project-box">
            <div class="row align-items-start">
                <div class="col-lg-7">
                    <div class="row g-2">
                        <div class="col-6">
                            <img class="border" src="assets/img/project-3.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-2.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-4.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-1.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <h4>Website Design for Marketing Agency Startup</h4>
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="about-content">
                        <ul>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Type:</span>
                                <span>Website</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Langages:</span>
                                <span>PHP, HTML, CSS, JS</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Platform:</span>
                                <span>WordPress</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Country:</span>
                                <span>USA</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Live URL:</span>
                                <span>www.example.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Snigle 3 -->
    <!-- Snigle 4 -->
    <!-- <div id="project_4" class="px-modal mfp-hide">
        <div class="single-project-box">
            <div class="row align-items-start">
                <div class="col-lg-7">
                    <div class="row g-2">
                        <div class="col-6">
                            <img class="border" src="assets/img/project-4.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-2.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-3.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-1.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <h4>Website Design for Marketing Agency Startup</h4>
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="about-content">
                        <ul>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Type:</span>
                                <span>Website</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Langages:</span>
                                <span>PHP, HTML, CSS, JS</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Platform:</span>
                                <span>WordPress</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Country:</span>
                                <span>USA</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Live URL:</span>
                                <span>www.example.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Snigle 4 -->
    <!-- Snigle 5 -->
    <!-- <div id="project_5" class="px-modal mfp-hide">
        <div class="single-project-box">
            <div class="row align-items-start">
                <div class="col-lg-7">
                    <div class="row g-2">
                        <div class="col-6">
                            <img class="border" src="assets/img/project-4.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-2.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-3.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-1.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <h4>Website Design for Marketing Agency Startup</h4>
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="about-content">
                        <ul>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Type:</span>
                                <span>Website</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Langages:</span>
                                <span>PHP, HTML, CSS, JS</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Platform:</span>
                                <span>WordPress</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Country:</span>
                                <span>USA</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Live URL:</span>
                                <span>www.example.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Snigle 5 -->
    <!-- Snigle 5 -->
    <!-- <div id="project_6" class="px-modal mfp-hide">
        <div class="single-project-box">
            <div class="row align-items-start">
                <div class="col-lg-7">
                    <div class="row g-2">
                        <div class="col-6">
                            <img class="border" src="assets/img/project-4.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-2.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-3.jpg" title="" alt="">
                        </div>
                        <div class="col-6">
                            <img class="border" src="assets/img/project-1.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <h4>Website Design for Marketing Agency Startup</h4>
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="about-content">
                        <ul>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Type:</span>
                                <span>Website</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Langages:</span>
                                <span>PHP, HTML, CSS, JS</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Platform:</span>
                                <span>WordPress</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Country:</span>
                                <span>USA</span>
                            </li>
                            <li class="d-flex">
                                <span class="col-4 col-lg-3">Live URL:</span>
                                <span>www.example.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Snigle 6 -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-info">
                <div class="footer-avatar">
                    <img src="assets/img/mask2.jpg" title="" alt="">
                </div>
                <h6>Segun Mayor</h6>
            </div>
            <ul class="nav social-link">
                <li>
                    <a href="https://twitter.com/segunmayor_"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/mmesoma_sm/"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/mayor4331"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="https://www.pinterest.com/messo_eli/"><i class="fab fa-pinterest"></i></a>
                </li>
            </ul>
            <p class="copyright">© 2023 copyright all right reserved</p>
        </div>
    </footer>
    <!-- End Footer -->
      <script src="./popup.js"></script>
     <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- <script src="https://kit.fontawesome.com/24972f9e43.js"></script> -->
    <script src="assets/js/custom.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/brands.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/conflict-detection.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/regular.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/solid.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/v4-shims.min.js"></script>
    <!-- <script src="assets/js/jquery-3.5.1.min.js"></script> -->
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scrollIt.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script>
   function onSubmitContactForm(token) {
     document.getElementById("contact_form").submit();
   }
 </script>


    
    <!-- end -->
</body>
<!-- Body End -->

</html>