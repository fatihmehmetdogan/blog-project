<?php require_once 'header.php';
$iceriksor=$baglanti->prepare("SELECT * FROM icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
'icerik_id'=>$_GET['icerik_id']
));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);


 ?>
<br><br> 
  <main id="main">

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img src="admin/resimler/icerik/<?php echo $icerikcek['icerik_resim'] ?>" class="img-fluid" alt="">
            <h3><?php echo $icerikcek['icerik_baslik'] ?></h3>
            <p>
             <?php echo $icerikcek['icerik_aciklama'] ?>
            </p>
              </div>                
            </div class="col-lg-4">
              
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Eklenme Tarihi: </h5>
              <p> <?php echo $icerikcek['icerik_zaman'] ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Ekleyen: </h5>
              <p>Yazılım Yolcusu</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>İletişim</h5>
              <p>info@blog.com</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

    <!-- ======= Cource Details Tabs Section ======= -->
    

  </main><!-- End #main -->
<?php require_once 'footer.php'; ?>