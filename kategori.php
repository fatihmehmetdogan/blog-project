<?php require_once 'header.php';

$blogsor=$baglanti->prepare("SELECT * FROM blog where kategori_id=:kategori_id order by blog_sira ASC ");
$blogsor->execute(array(
'kategori_id'=>$_GET['kategori_id']
));

# kategori sayfasını içerik sayfası olarak kullanmasını yaptım
 ?>

<br><br>
  <main id="main" data-aos="fade-in">

   

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">


<?php

$kategorisor=$baglanti->prepare("SELECT * FROM kategori order by kategori_sira ASC");
$kategorisor->execute(array());

while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
?>
<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img style="height: 250px" src="admin/resimler/kategori/<?php echo $kategoricek['kategori_resim'] ?>" class="img-fluid" alt="...">
              <div class="course-content">


              <li><a href="kategori-detay-<?=seo($kategoricek['kategori_baslik']).'-'.$kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_baslik'] ?></a></li>
              
            </ul>
          </li>
            


            
              </div>
            </div>
          </div> <!-- End Course Item-->
<?php } ?>
        

        

        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->
<?php require_once 'footer.php'; ?>