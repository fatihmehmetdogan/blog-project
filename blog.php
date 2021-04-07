<?php require_once 'header.php';
$em=$this->getDoctrine()->getManager();
$query = $em->createQuery('SELECT u FROM blog');


?>
    <br><br>
    <main id="main" data-aos="fade-in">
        <!-- ======= Courses Section ======= -->
        <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <?php while ($users = $query->getResult()) { ?>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item">
                                <img style="height: 250px"
                                     src="admin/resimler/blog/<?php echo $users['blog_image'] ?>" class="img-fluid"
                                     alt="...">
                                <div class="course-content">
                                    <h3>
                                        <a href="blog-detay-<?= seo($users['blog_title']) . '-' . $users['blog_id'] ?>"><?php echo $users['blog_title'] ?></a>
                                    </h3>
                                    <p><?php
                                        $aciklama = $users['blog_content'];   # yazının bi bölümünü alıyor
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