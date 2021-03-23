<?php
require_once 'header.php';
require_once 'sidebar.php';
 ?>

<div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">BLOG</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">BLOG Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">BLOGbaşlık</label>
                    <input name="baslik"  type="text" class="form-control"  placeholder="Lütfen başlık  giriniz.">
                  </div> 
             
                    <div class="form-group">
                    <label for="exampleInputEmail1">İBLOG sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">BLOG Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div>
                   
                 
                  <input type="hidden" name="katid" value="<?php echo $_GET['katid'] ?>">

    <label><input type="checkbox" name="katid[]" value="katid"/> PHP</label><br/>
    <label><input type="checkbox" name="katid[]" value="katid"/> SQL</label><br/>
    <label><input type="checkbox" name="katid[]" value="katid"/> YAPAY ZEKA</label><br/>
    <label><input type="checkbox" name="katid[]" value="katid"/> YAZILIM</label><br/>
    

                    
                   
                </div>
                <!-- /.card-body -->
 
                <div class="card-footer">
                  <button name="blogkaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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