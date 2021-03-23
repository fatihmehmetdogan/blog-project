<?php require_once 'header.php';
require_once 'sidebar.php';
$blogsor=$baglanti->prepare("SELECT *
FROM blog LEFT JOIN blog_to_kategori ON blog.blog_id = blog_to_kategori.blog_id ORDER BY blog.blog_id");
$blogsor->execute(array(


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
                <h3 class="card-title">Kategori</h3>
                <a href="blog-ekle.php?katid=<?php echo $_GET['katid'] ?>">
<button style="float:right" type="submit" class="btn btn-info">Yeni BLOG ekle</button></a>
           <!-- 
     <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
           -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Kategori Resim</th>
                       <th>Kategori Başlık</th>
                      <th>Kategori Sıra</th>
                    
                      <th>Düzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 

while ($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) { ?>
         
                    <tr>
                      <td><img style="width:150px" src="resimler/blog/<?php echo $blogcek['blog_resim'] ?>"></td>
                          <td><?php echo $blogcek['blog_baslik'] ?></td>
                      <td><?php echo $blogcek['blog_sira'] ?></td>
                     
                    
                      <td><a href="blog-duzenle.php?id=<?php echo $blogcek['blog_id'] ?>"><button type="submit" class="btn btn-success">Düzenle</button></td>
                         <td>
                           <form action="islem.php" method="post">
                          <button  name="blogsil" type="submit" class="btn btn-danger">Sil</button>
                          <input name="id" value="<?php echo $blogcek['blog_id'] ?>" type="hidden">
                           <input name="eskiresim" value="<?php echo $blogcek['blog_resim'] ?>" type="hidden">

                                  <input name="katid" value="<?php echo $blogcek['kategori_id'] ?>" type="hidden">
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