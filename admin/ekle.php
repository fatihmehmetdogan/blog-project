f <?php require_once 'header.php'; 
require_once 'sidebar.php';
?>
<?php if ($_GET['sayfa']=="blog") { ?>
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">BLOG</h3>
              </div>
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Resim</label>
                    <input name="resim"type="file"  class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Başlık</label>
                    <input name="baslik" type="text" class="form-control" placeholder="Lütfen blog başlığını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Sıra</label>
                    <input name="sira" type="text" class="form-control" placeholder="Lütfen blog sırasını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>>
                  </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button name="blogkaydet" style="float: right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php } elseif ($_GET['sayfa']=="kategori") { ?>
 <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kategori</h3>
              </div>
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Resim</label>
                    <input name="resim"type="file"  class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Başlık</label>
                    <input name="baslik"type="text"  class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Sıra</label>
                    <input name="sira" type="text" class="form-control" placeholder="Lütfen kategori sırasını giriniz.">
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
                <div class="card-footer">
                  <button name="kategorikaydet" style="float: right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php } ?>
 <?php require_once 'footer.php'; ?>