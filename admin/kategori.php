<?php require_once 'header.php';
require_once 'sidebar.php';
$kategorisor=$baglanti->prepare("SELECT * FROM kategori order by kategori_sira ");
$kategorisor->execute(array(
));

 ?>
  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
       <?php
if (@$_GET['durum']=="okey") { ?>
  <p style="color:green ; ">İşlem başarılı</p>
<?php } elseif (@$_GET['durum']=="no") { ?>
  <p style="color:red ; ">İşlem başarısız</p>

<?php }  ?>
          <div class="col-12">
            <div class="card">          
              <div class="card-header">
                <h3 class="card-title">kategori</h3>
                <a href="kategori-ekle.php?katid=<">
<button style="float:right" type="submit" class="btn btn-info">Yeni kategori ekle</button></a>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>kategori Resim</th>
                       <th>kategori Başlık</th>
                      <th>kategori Sıra</th>
                    
                      <th>Düzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                      <td><img style="width:150px" src="resimler/kategori/<?php echo $kategoricek['kategori_resim'] ?>"></td>
                          <td><?php echo $kategoricek['kategori_baslik'] ?></td>
                      <td><?php echo $kategoricek['kategori_sira'] ?></td>
                      <td><a href="kategori-duzenle.php?id=<?php echo $kategoricek['kategori_id'] ?>"><button type="submit" class="btn btn-success">Düzenle</button></td>
                         <td>
                           <form action="islem.php" method="post">
                          <button  name="kategorisil" type="submit" class="btn btn-danger">Sil</button>
                          <input name="id" value="<?php echo $kategoricek['kategori_id'] ?>" type="hidden">
                           <input name="eskiresim" value="<?php echo $kategoricek['kategori_resim'] ?>" type="hidden">
                           </form>

                        </td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
 
        </div>
    
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php require_once 'footer.php'; ?>