<?php require_once 'header.php';
require_once 'bootstrap.php';
/* @var $entityManager Doctrine\ORM\EntityManager */
$BlogRepository = $entityManager->getRepository('blog');
$blogs = $BlogRepository->findAll();

/* @var $entityManager Doctrine\ORM\EntityManager */
$SliderRepository = $entityManager->getRepository('slider');
$sliders = $SliderRepository->findAll();
?>
<?php
    foreach ($sliders as $slider) {
?>
    <!-- ======= Hero Section ======= -->
    <section style="background-image: admin/resimler/slider/<?php echo $slider->getSliderImage() ?>"
             id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1><?php echo $slider->getSliderTitle() ?>
                <h1>
                    <h2><?php echo $slider->getSliderContent() ?><h2>
    <?php } ?>
        </div>
    </section><!-- End Hero -->
    <main id="main">
        <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <?php

                    foreach ($blogs as $blog) { ?>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item">
                                <img style="height: 250px"
                                     src="admin/resimler/blog/<?php echo $blog->getBlogImage() ?>" class="img-fluid"
                                     alt="...">
                                <div class="course-content">
                                    <h3>
                                        <a href="blog-detay-<?= seo($blog->getBlogTitle()) . '-' . $blog->getId() ?>"><?php echo $blog->getBlogTitle() ?></a>
                                    </h3>
                                    <p><?php
                                        $aciklama = $blog->getBlogContent();   # yazının bi bölümünü alıyor
                                        $bolaciklama = substr($aciklama, 0, 50);
                                        echo $bolaciklama;
                                        ?></p>

                                </div>
                            </div>
                        </div> <!-- End Course Item-->

                    <?php } ?>

                </div>

            </div>
        </section><!-- End Courses Section -->

    </main><!-- End #main -->

<?php require_once 'footer.php'; ?>