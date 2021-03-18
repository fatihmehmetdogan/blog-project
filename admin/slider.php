 <?php require_once 'header.php'; 
require_once 'sidebar.php';

#degerleri çekme php ile 

$slidersor=$baglanti->prepare("SELECT * FROM slider where slider_id=?");
$slidersor->execute(array(1));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC); # PDO ile güvenli bağlanti yapmamızı sağlar veritabanına bağlanıp verilerimiz çekiyoruz

?>
   
  <div class="content-wrapper">
   
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
        <div class="col-md-12">  
      <!-- general form elements -->
            <div class="card card-primary">
              <?php 
              if (@$_GET['durum']=="okey") { ?>
                <p style="color:green; ">İşlem Başarılı</p>  
              <?php } elseif (@$_GET['durum']=="no") { ?>
                <p style="color:red; ">İşlem Başarısız</p>  
                
             <?php } ?>
              <div class="card-header">
                <h3 class="card-title">Slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Slider Resim</label>
                    <img style="width:300px" src="resimler/slider/<?php echo $slidercek['slider_resim'] ?>">
                  </div>
                  <input type="hidden" name="eskiresim" value="<?php echo $slidercek['slider_resim']?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Resim</label>
                    <input name="resim" value="<?php echo $slidercek['slider_resim'] ?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Başlık</label>
                    <input name="baslik" value="<?php echo $slidercek['slider_baslik'] ?>" type="text" class="form-control" placeholder="Lütfen sitenizin başlığını giriniz.">
                  </div>

                     <div class="form-group">
                    <label for="exampleInputEmail1">Slider Buton ismi</label>
                    <input name="buton" value="<?php echo $slidercek['slider_buton'] ?>" type="text" class="form-control" placeholder="Lütfen sitenizin butonunu giriniz.">
                  </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">Slider Buton linki</label>
                    <input name="link" value="<?php echo $slidercek['slider_link'] ?>" type="text" class="form-control" placeholder="Lütfen sitenizin butonu linnmkini giriniz.">
                  </div>

                 
                
                   <div class="form-group">
                    <label for="exampleInputEmail1">Slider Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor" ><?php echo $slidercek['slider_aciklama'] ?></textarea>
                  </div>
                
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="sliderkaydet" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

 <?php require_once 'footer.php'; ?>