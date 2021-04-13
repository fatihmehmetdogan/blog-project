<?php
require_once 'header.php';
require_once 'sidebar.php';
require_once 'baglanti.php';
$kategoriBaglanti=$baglanti->prepare("SELECT * FROM category");
$kategoriBaglanti->execute(array());
$kategoriler=$kategoriBaglanti->fetchAll();
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
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">BLOG Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">BLOG başlık</label>
                    <input name="baslik"  type="text" class="form-control"  placeholder="Lütfen başlık  giriniz.">
                  </div> 
             
                    <div class="form-group">
                    <label for="exampleInputEmail1">BLOG sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">BLOG Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div>
                    <div class="form-group">
                        <b>KATEGORİLER</b> <br>
                    <?php
                        foreach($kategoriler as $category)
                        echo '<label><input type="checkbox"  name="katid[]" value="'.$category['id'].'"/>'.$category['category_title'].'</label><br/>';
                        ?>
                    </div>
                </div>
                <div class="card-footer">
                  <button name="blogkaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
 </div>
        </div>
      </div>
    </section>
  </div>
 <?php require_once 'footer.php'; ?>