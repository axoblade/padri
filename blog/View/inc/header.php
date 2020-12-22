<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Policy Analysis and Research Institute (PADRI) | Blog</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="<?=ROOT_URL?>assets/img/favicon.png" rel="icon">
  <link href="<?=ROOT_URL?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=ROOT_URL?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=ROOT_URL?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=ROOT_URL?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=ROOT_URL?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=ROOT_URL?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="a<?=ROOT_URL?>ssets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=ROOT_URL?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=ROOT_URL?>input/src/css/wysiwyg.css" rel="stylesheet">
  <link href="<?=ROOT_URL?>input/src/css/highlight.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <!-- Template Main CSS File -->
  <link href="<?=ROOT_URL?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern - v2.1.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:info@padri.co.ug">info@padri.co.ug</a>
        <i class="icofont-phone"></i><a href="tel://+256 752 643706">+256 752 643706</a>
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

<header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <!--<h1 class="text-light"><a href="index.html">Flattern</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="http://localhost:8888/padri"><img src="<?=ROOT_URL?>assets/img/logo.png" alt="PADRI" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        	<li><a href="../index.php">Home</a></li>
        	<li ><a href="../about.php">About us</a></li>
          <li><a href="../projects.php">Projects</a></li>
          <li><a href="../publications.php">Works</a></li>
          <li class="active"><a href="<?=ROOT_URL?>">Blog</a></li>
          <li><a href="../contact.php">Contact us</a></li>
          <?php if (!empty($_SESSION['is_logged'])): ?>
          	<li><a href="<?=ROOT_URL?>?p=admin&amp;a=logout">Logout</a></li>

          	<li><a href="<?=ROOT_URL?>?p=blog&amp;a=add">Add Blog</a></li>

                <?php else: ?>

                  <li><a href="<?=ROOT_URL?>?p=admin&amp;a=login">Login</a></li>
                   
                <?php endif ?> 
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
