<?php require_once 'header.php';
require_once 'sidebar.php';
require_once '../bootstrap.php';


 ?>
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">
 <?php
if (@$_GET['durum']=="okey") { ?>
  <p style="color:green ; ">İşlem başarılı</p>
<?php } elseif (@$_GET['durum']=="no") { ?>
  <p style="color:red ; ">İşlem başarısız</p>
<?php }  ?>
              <div class="card-header">
                <h3 class="card-title">Slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="form-group">
                    <label for="exampleInputEmail1">Slider Resim</label>
                    <img style="width:200px" src="resimler/slider/">
                  </div>
                  <input type="hidden" name="eskiresim" value="">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Slider Başlık</label>
                    <input name="baslik" value="" type="text" class="form-control"  placeholder="Lütfen sitenizin başlığını giriniz.">
                     <div class="form-group">
                    <label for="exampleInputEmail1">Slider  Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div>
                </div>

                    <!-- /.card-body -->
                <div class="card-footer">
                  <button name="sliderkaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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