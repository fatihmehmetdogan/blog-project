<?php
require_once 'header.php';
require_once 'sidebar.php';
require_once 'baglanti.php';

 ?>
<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">KATEGORİ </h3>
              </div>
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">KATEGORİ  Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">KATEGORİ başlık</label>
                    <input name="baslik"  type="text" class="form-control"  placeholder="Lütfen kategori başlık  giriniz.">
                  </div> 
             
                    <div class="form-group">
                    <label for="exampleInputEmail1">KATEGORİ  sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen kategori sıra  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">KATEGORİ  Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <button name="kategorikaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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