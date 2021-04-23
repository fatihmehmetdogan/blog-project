<?php
require_once 'admin/baglanti.php';
require_once 'function.php';
require_once 'bootstrap.php';

/* @var $entityManager Doctrine\ORM\EntityManager */
$SettingsRepository = $entityManager->getRepository('settings');
$settingss = $SettingsRepository->findAll();

/* @var $entityManager Doctrine\ORM\EntityManager */
$SliderRepository = $entityManager->getRepository('slider');
$sliders = $SliderRepository->findAll();

/* @var $entityManager Doctrine\ORM\EntityManager */
$CategoryRepository = $entityManager->getRepository('category');
$categorys = $CategoryRepository->findAll();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index">Blog Sayfası</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Anasayfa</a></li>
          <!--<li><a href="hakkimizda.php">Hakkımızda</a></li>-->
          <!--<li><a href="ekip.php">Ekibimiz</a></li>-->
          <!--<li><a href="galeri.php">Galeri</a></li>-->
         <!-- <li><a href="blog.php">Blog</a></li>-->
            <li class="drop-down"><a href="">Kategoriler</a>
                <ul>
                    <?php
                    foreach ($categorys as $category) {

                        echo '<li>
                        <a href="kategori-detay.php?category='.$category->getId().'">'.$category->getCategoryTitle().'</a>
            </li>';

                   } ?>
                </ul>
            </li>
            <li><a href="iletisim.php">İletişim</a></li>
        </ul>

      </nav><!-- .nav-menu -->



    </div>
  </header><!-- End Header -->


