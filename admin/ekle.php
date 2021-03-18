 <?php require_once 'header.php'; 
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

<?php } ?>




 <?php require_once 'footer.php'; ?>