f <?php require_once 'header.php'; 
require_once 'sidebar.php';

?>
<!-- get ile gelen sayfa değeri ekip e eşitse -->
  <?php if($_GET['sayfa']=="ekip"){ ?> 

  <div class="content-wrapper">
   
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
        <div class="col-md-12">  
      <!-- general form elements -->
            <div class="card card-primary">
             
              <div class="card-header">
                <h3 class="card-title">Ekip</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Resim</label>
                    <input name="resim"type="file"  class="form-control">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip İsim</label>
                    <input name="isim" type="text" class="form-control" placeholder="Lütfen ekip üye ismini giriniz.">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Konum</label>
                    <input name="konum" type="text" class="form-control" placeholder="Lütfen ekip üye ismini giriniz.">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Sıra</label>
                    <input name="sira" type="text" class="form-control" placeholder="Lütfen ekip üye ismini giriniz.">
                  </div>

                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>>
                  </div>
                
                

                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="ekipkaydet" style="float: right" type="submit" class="btn btn-primary">Kaydet</button>
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

<?php } elseif ($_GET['sayfa']=="blog") { ?>
  <div class="content-wrapper">
   
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
        <div class="col-md-12">  
      <!-- general form elements -->
            <div class="card card-primary">
             
              <div class="card-header">
                <h3 class="card-title">BLOG</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Resim</label>
                    <input name="resim"type="file"  class="form-control">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Başlık</label>
                    <input name="baslik" type="text" class="form-control" placeholder="Lütfen ekip üye ismini giriniz.">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Sıra</label>
                    <input name="sira" type="text" class="form-control" placeholder="Lütfen ekip üye ismini giriniz.">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>>
                  </div>
                
                 

                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="blogkaydet" style="float: right" type="submit" class="btn btn-primary">Kaydet</button>
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
<?php } elseif ($_GET['sayfa']=="kategori") { ?>
  
 <div class="content-wrapper">
   
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
        <div class="col-md-12">  
      <!-- general form elements -->
            <div class="card card-primary">
             
              <div class="card-header">
                <h3 class="card-title">Kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Başlık</label>
                    <input name="baslik"type="text"  class="form-control">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Sıra</label>
                    <input name="sira" type="text" class="form-control" placeholder="Lütfen ekip üye ismini giriniz.">
                  </div>

                  <div class="form-group">
                  <label>Kategori Durum</label>
                  <select name="durum" class="form-control select2" style="width: 100%;">
                    <option value="1" selected="selected">Aktif</option>
                    <option value="2" selected="selected">Pasif</option>
                    
                  </select>
                </div>

                
                
                 

                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="kategorikaydet" style="float: right" type="submit" class="btn btn-primary">Kaydet</button>
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