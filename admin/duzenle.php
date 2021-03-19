  <?php require_once 'header.php'; 
require_once 'sidebar.php';

?>
<!-- get ile gelen sayfa değeri ekip e eşitse -->
  <?php if($_GET['sayfa']=="ekip"){ 

$ekipsor=$baglanti->prepare("SELECT * FROM ekip where ekip_id=:ekip_id"); # islem.php de yaptığımız aslında
$ekipsor->execute(array(
'ekip_id'=>$_GET['id']
));
$ekipcek=$ekipsor->fetch(PDO::FETCH_ASSOC);




    ?> 

  <div class="content-wrapper">
   
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
        <div class="col-md-12">  
      <!-- general form elements -->
            <div class="card card-primary">
             
              <div class="card-header">
                <h3 class="card-title">Ekip Düzenle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Resim</label>
                    <img style="width: 150px" src="resimler/ekip/<?php echo $ekipcek['ekip_resim'] ?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Resim</label>
                    <input name="resim"type="file"  class="form-control">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip İsim</label>
                    <input value="<?php echo $ekipcek['ekip_isim'] ?>" name="isim" type="text" class="form-control" placeholder="Lütfen ekip üye ismini giriniz.">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Konum</label>
                    <input value="<?php echo $ekipcek['ekip_konum'] ?>" name="konum" type="text" class="form-control" placeholder="Lütfen ekip üye ismini giriniz.">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Sıra</label>
                    <input value="<?php echo $ekipcek['ekip_sira'] ?>" name="sira" type="text" class="form-control" placeholder="Lütfen ekip üye ismini giriniz.">
                  </div>

                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor">
                      <?php echo $ekipcek['ekip_aciklama'] ?></textarea>>
                  </div>
                
                

                  </div>
                  
                </div>
                <!-- /.card-body -->
        <input name="resim" value="<?php echo $ekipcek['ekip_resim'] ?>">
        <input name="id" value="<?php echo $ekipcek['ekip_id'] ?>">
                <div class="card-footer">
                  <button name="ekipduzenle" style="float: right" type="submit" class="btn btn-primary">Kaydet</button>
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










<?php } elseif ($_GET['sayfa']=="blog") {

$blogsor=$baglanti->prepare("SELECT * FROM blog where blog_id=:blog_id"); # islem.php de yaptığımız aslında
$blogsor->execute(array(
'blog_id'=>$_GET['id']
));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);




 ?>
  
<div class="content-wrapper">
   
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
        <div class="col-md-12">  
      <!-- general form elements -->
            <div class="card card-primary">
             
              <div class="card-header">
                <h3 class="card-title">Blog Düzenle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog Resim</label>
                    <img style="width: 150px" src="resimler/blog/<?php echo $blogcek['blog_resim'] ?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Resim</label>
                    <input name="resim"type="file"  class="form-control">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Başlık</label>
                    <input value="<?php echo $blogcek['blog_baslik'] ?>" name="baslik" type="text" class="form-control" placeholder="Lütfen blog üye ismini giriniz.">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Sıra</label>
                    <input value="<?php echo $blogcek['blog_sira'] ?>" name="sira" type="text" class="form-control" placeholder="Lütfen blog üye ismini giriniz.">
                  </div>
 
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor">
                      <?php echo $blogcek['blog_aciklama'] ?></textarea>>
                  </div>
                
                

                  </div>
                  
                </div>
                <!-- /.card-body -->
        <input name="resim" value="<?php echo $blogcek['blog_resim'] ?>">
        <input name="id" value="<?php echo $blogcek['blog_id'] ?>">
                <div class="card-footer">
                  <button name="blogduzenle" style="float: right" type="submit" class="btn btn-primary">Kaydet</button>
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





<?php } elseif ($_GET['sayfa']=="kategori") { 
  

$kategorisor=$baglanti->prepare("SELECT * FROM kategori where kategori_id=:kategori_id");
$kategorisor->execute(array(
'kategori_id'=>$_GET['id']
));
$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);

?>

<div class="content-wrapper">
   
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
        <div class="col-md-12">  
            <div class="card card-primary">
             
              <div class="card-header">
                <h3 class="card-title">KategoriDüzenle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Başlık</label>
                    <input value="<?php echo $kategoricek['kategori_baslik'] ?>" 
                    name="baslik" type="text" class="form-control" 
                    placeholder="Lütfen kategori başlığı giriniz.">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">kategori Sıra</label>
                    <input value="<?php echo $kategoricek['kategori_sira'] ?>" 
                    name="sira" type="text" class="form-control" 
                    placeholder="Lütfen kategori sırasını giriniz.">
                  </div>
 
              


               
 
               
                 <div class="form-group">
                  <label>Kategori Durum</label>
                  <select name="durum" class="form-control select2" style="
                  width: 100%;">
  <option value="1" <?php if ($kategoricek['kategori_durum']=="1") {
                      echo "selected";
                    } ?> >Aktif</option>
                    <option value="2" <?php if ($kategoricek['kategori_durum']=="2") {
                      echo "selected";
                    } ?>  >Pasif</option>
                    
                  </select>
                </div>
                 

                 
                  
                </div>
                <!-- /.card-body -->
       
        <input type="hidden" name="id" value="<?php echo $kategoricek['kategori_id'] ?>">
                <div class="card-footer">
                  <button name="kategoriduzenle" style="float: right" type="submit" class="btn btn-primary">Kaydet</button>
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


<?php } ?>




 <?php require_once 'footer.php'; ?>