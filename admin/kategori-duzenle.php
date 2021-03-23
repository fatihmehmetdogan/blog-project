<?php
require_once 'header.php';
require_once 'sidebar.php';

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
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                         <div class="form-group">
                    <label for="exampleInputEmail1">kategori Resim</label>
                    <img style="width:150px" src="resimler/kategori/<?php echo $kategoricek['kategori_resim'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">kategori Resim</label>
                    <input name="resim"  type="file" class="form-control">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">kategori başlık</label>
                    <input value="<?php echo $kategoricek['kategori_baslik'] ?>" name="baslik"  type="text" class="form-control"  placeholder="Lütfen başlık  giriniz.">
                  </div> 

          <input type="hidden" name="katid" value="<?php echo $kategoricek['kategori_id']?>">


                    <div class="form-group">
                    <label for="exampleInputEmail1">kategori sıra</label>
                    <input value="<?php echo $kategoricek['kategori_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">kategori Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor">
                       <?php echo $kategoricek['kategori_aciklama'] ?> 
                    </textarea>
                  </div> 
                   
                  <input type="hidden" name="id" value="<?php echo $kategoricek['kategori_id'] ?>">

                    
                   
                </div>
                <!-- /.card-body -->
 
                <div class="card-footer">
                  <button name="kategoriduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
            <!-- /.card -->
 </div>
        </div>
    
      </div>
    </section>
    <!-- /.content -->
  </div>






 <?php require_once 'footer.php'; ?>