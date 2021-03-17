 <?php require_once 'header.php'; 
require_once 'sidebar.php';

#degerleri çekme php ile 

$ayarsor=$baglanti->prepare("SELECT * FROM ayarlar where ayar_id=?");
$ayarsor->execute(array(1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC); # PDO ile güvenli bağlanti yapmamızı sağlar veritabanına bağlanıp verilerimiz çekiyoruz

?>
  
  <div class="content-wrapper">
   
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
        <div class="col-md-12">  
      <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ayarlar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Başlığı</label>
                    <input name="baslik" value="<?php echo $ayarcek['ayar_baslik'] ?>" type="text" class="form-control" placeholder="Lütfen sitenizin başlığını giriniz.">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Açıklama</label>
                    <input name="aciklama" value="<?php echo $ayarcek['ayar_aciklama'] ?>" type="text" class="form-control" placeholder="Lütfen sitenizin açıklamasını giriniz.">
                  </div>

                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Anahtar Kelime</label>
                    <input name="anahtar" value="<?php echo $ayarcek['ayar_anahtar'] ?>" type="text" class="form-control" placeholder="Lütfen sitenizin anahtar kelimelerini giriniz.">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Adresi</label>
                    <input name="adres" value="<?php echo $ayarcek['ayar_adres'] ?>" type="text" class="form-control" placeholder="Lütfen adresinizi giriniz.">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site telefon</label>
                    <input name="telefon" value="<?php echo $ayarcek['ayar_telefon'] ?>" type="text" class="form-control" placeholder="Lütfen telefonunuzu giriniz.">
                  </div>
               
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site email adresi</label>
                    <input name="email" value="<?php echo $ayarcek['ayar_email'] ?>" type="email" class="form-control" placeholder="Lütfen email adresinizi giriniz.">
                  </div>

                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="ayarkaydet" type="submit" class="btn btn-primary">Kaydet</button>
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