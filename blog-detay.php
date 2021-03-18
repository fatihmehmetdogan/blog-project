<?php require_once 'header.php'; 

$blogsor=$baglanti->prepare("SELECT * FROM blog where blog_id=:blog_id");
$blogsor->execute(array(

'blog_id'=>$_GET['blog_id']

));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);

?>
<br><br>
  <main id="main">

  

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img src="admin/resimler/blog/<?php echo $blogcek['blog_resim'] ?>" class="img-fluid" alt="">
            <h3><?php echo $blogcek['blog_baslik'] ?></h3>
            <p>
           <?php echo $blogcek['blog_aciklama'] ?>
            </p>
          </div>
          <div class="col-lg-4">

            

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Eklenme Tarihi: </h5>
              <p><?php echo $blogcek['blog_zaman'] ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Ekleyen: </h5>
              <p>FMD</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>İletişim</h5>
              <p>info@blog.com</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

    

  </main><!-- End #main -->

  <?php require_once 'footer.php'; ?>