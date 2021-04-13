<?php require_once 'header.php';
require_once 'sidebar.php';

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
                <h3 class="card-title">BLOG</h3>
                <a href="blog-ekle.php">
<button style="float:right" type="submit" class="btn btn-info">Yeni BLOG ekle</button></a>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>BLOG Resim</th>
                       <th>BLOG Başlık</th>
                      <th>BLOG Sıra</th>
                      <th>Düzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
while ($query2 = $query->execute([
    'blog_order'=>'jon'
])) { ?>
                    <tr>
                      <td><img style="width:150px" src="resimler/blog/<?php echo $query2['blog_image'] ?>"></td>
                          <td><?php echo $query2['blog_title'] ?></td>
                      <td><?php echo $query2['blog_order'] ?></td>
                      <td><a href="blog-duzenle.php?id=<?php echo $query2['blog_id'] ?>"><button type="submit" class="btn btn-success">Düzenle</button></td>
                         <td>
                           <form action="islem.php" method="post">
                          <button  name="blogsil" type="submit" class="btn btn-danger">Sil</button>
                          <input name="id" value="<?php echo $query2['blog_id'] ?>" type="hidden">
                           <input name="eskiresim" value="<?php echo $query2['blog_image'] ?>" type="hidden">
                           </form>
                        </td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php require_once 'footer.php'; ?>