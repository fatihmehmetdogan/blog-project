  <?php require_once 'header.php'; 
require_once 'sidebar.php';
?>

<?php if ($_GET['sayfa']=="blog") {

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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Blog Düzenle</h3>
              </div>
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
        <input name="resim" value="<?php echo $blogcek['blog_resim'] ?>">
        <input name="id" value="<?php echo $blogcek['blog_id'] ?>">
                <div class="card-footer">
                  <button name="blogduzenle" style="float: right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form>
            </div>

          </div>
        </div>
        
      </div>
    </section>
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
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">kategori Resim</label>
                    <img style="width: 150px" src="resimler/kategori/<?php echo $kategoricek['kategori_resim'] ?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">kategori Resim</label>
                    <input name="resim"type="file"  class="form-control">
                  </div>
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
        <input type="hidden" name="id" value="<?php echo $kategoricek['kategori_id'] ?>">
                <div class="card-footer">
                  <button name="kategoriduzenle" style="float: right" type="submit" class="btn btn-primary">Kaydet</button>
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