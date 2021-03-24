<?php
require_once 'header.php';
require_once 'sidebar.php';
$blogsor=$baglanti->prepare("SELECT * FROM blog where blog_id=:blog_id");
$blogsor->execute(array(
'blog_id'=>$_GET['id']
));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);
 ?>
<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">blog</h3>
              </div>
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                         <div class="form-group">
                    <label for="exampleInputEmail1">BLOG Resim</label>
                    <img style="width:150px" src="resimler/blog/<?php echo $blogcek['blog_resim'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">BLOG Resim</label>
                    <input name="resim"  type="file" class="form-control">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">BLOG başlık</label>
                    <input value="<?php echo $blogcek['blog_baslik'] ?>" name="baslik"  type="text" class="form-control"  placeholder="Lütfen başlık  giriniz.">
                  </div>
          <input type="hidden" name="katid" value="<?php echo $blogcek['kategori_id']?>"
                    <div class="form-group">
                    <label for="exampleInputEmail1">BLOG sıra</label>
                    <input value="<?php echo $blogcek['blog_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">BLOG Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor">
                       <?php echo $blogcek['blog_aciklama'] ?> 
                    </textarea>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $blogcek['blog_id'] ?>">
                </div>
                <div class="card-footer">
                  <button name="blogduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
 </div>
        </div>
      </div>
    </section>
  </div>
 <?php require_once 'footer.php'; ?>