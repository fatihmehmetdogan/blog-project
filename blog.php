<?php
require_once 'header.php';
require_once 'bootstrap.php';




?>
    <br><br>
    <main id="main" data-aos="fade-in">
        <!-- ======= Courses Section ======= -->
        <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <?php
                   {

                     ?>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item">
                                <img style="height: 250px"
                                     src="admin/resimler/blog/<?php echo $blog['blog_image'] ?>" class="img-fluid"
                                     alt="...">
                                <div class="course-content">
                                    <h3>
                                        <a href="blog-detay-<?= seo($blog['blog_title']) . '-' . $blog['blog_id'] ?>"><?php echo $blog['blog_title'] ?></a>
                                    </h3>
                                    <p><?php
                                        $aciklama = $blog['blog_content'];   # yazının bi bölümünü alıyor
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