<?php require_once 'header.php'; 

$blogsor=$baglanti->prepare("SELECT * FROM blog order by blog_sira ASC" );
$blogsor->execute(array(
));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);
?>
<br><br>
  <main id="main">
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8">
            <img src="admin/resimler/blog/<?php echo $blogcek['blog_resim'] ?>" class="img-fluid" alt="">
            <h3><?php echo $blogcek['blog_baslik'] ?></h3>
            <p>
           <?php echo $blogcek['blog_aciklama'] ?>
            </p>




            <form action="admin/islem.php" method="post" >
              <div class="form-row">
                <div class="col-md-12 form-group">
                  <input type="text" name="adsoyad" class="form-control" id="name" placeholder="Adınız ve Soyadınız" data-rule="minlen:4" data-msg="Lütfen minimum 4 karakte giriniz" />
                  <div class="validate"></div>
                </div>
               
              </div>
             
              <div class="form-group">
                <textarea class="form-control" name="detay" rows="5" data-rule="required" data-msg="Mesajınızı yazın" placeholder="Mesajınız"></textarea>
                <div class="validate"></div>
              </div>
              <input type="hidden" name="id" value="<?php echo $blogcek['blog_id']?>">

            
             <input type="hidden" name="kategori" value="1"> 
              <div class="text-center"><button name="blogyorumkaydet" class="btn btn-info" type="submit">Gönder</button></div>
            </form>


          </div>
          <div class="col-lg-4">



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