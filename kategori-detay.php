<?php

require_once 'header.php';
require_once 'bootstrap.php';

$category = $_GET["category"];

$dql = "SELECT b, e FROM blog b JOIN b.id e JOIN b.reporter  ORDER BY b.created DESC";
$query = $entityManager->createQuery($dql);
$bugs = $query->getResult();



$query = $baglanti->prepare("SELECT * FROM blog
LEFT JOIN blog_to_kategori ON blog.blog_id = blog_to_kategori.blog_id WHERE blog_to_kategori.kategori_id=:katid
ORDER BY blog.blog_id
  ");
$query->execute(array(
        "category"=>$category
));
$goster = $query->fetchAll(PDO::FETCH_ASSOC);
?>
    <br><br>
    <main id="main">
        <section id="course-details" class="course-details">
            <div class="container" data-aos="fade-up">
                <?php
                foreach ($goster as $row) {
                    ?>
                    <div class="">
                        <img style="height: 250px" src="admin/resimler/blog/<?php echo $row['blog_resim'] ?>"
                             class="img-fluid" alt="...">
                        <p>
                        <h3>
                            <a href="blog-detay-<?= seo($row['blog_baslik']) . '-' . $row['blog_id'] ?>"><?php echo $row['blog_baslik'] ?></a>
                        </h3>
                        </p>
                    </div>
                    <p><?php
                        $aciklama = $row['blog_aciklama'];   # yazının bi bölümünü alıyor
                        $bolaciklama = substr($aciklama, 0, 50);
                        echo $bolaciklama;
                        ?></p>
                    <?php
                }
                ?>
            </div>
        </section><!-- End Cource Details Section -->
    </main><!-- End #main -->
<?php require_once 'footer.php'; ?>