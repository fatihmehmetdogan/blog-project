<?php
require_once 'header.php';
require_once 'sidebar.php';
require_once '../bootstrap.php';
/* @var $entityManager Doctrine\ORM\EntityManager */
$id = $_GET['id'];
$BlogRepository = $entityManager->getRepository('blog');
$blog = $BlogRepository->find($id);


?>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">blog</h3>
                            </div>
                            <form action="islem.php" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">BLOG Resim</label>
                                        <img style="width:150px"
                                             src="resimler/blog/<?php echo $blog->getBlogImage() ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">BLOG Resim</label>
                                        <input name="resim" type="file" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">BLOG başlık</label>
                                        <input value="<?php echo $blog->getBlogTitle() ?>" name="baslik" type="text"
                                               class="form-control" placeholder="Lütfen başlık  giriniz.">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">BLOG sıra</label>
                                        <input value="<?php echo $blog->getBlogOrder() ?>" name="sira" type="text"
                                               class="form-control" placeholder="Lütfen sıra  giriniz.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">BLOG Açıklama</label>
                                        <textarea name="aciklama" id="editor1" class="ckeditor">
                                         <?php echo $blog->getBlogContent() ?>
                    </textarea>
                                        <div class="form-group">
                                            <b>KATEGORİLER</b> <br>
                                            <?php
                                            foreach ($kategoriler as $kategori) {
                                                if (in_array($kategori['kategori_id'], $blogkategorilerarray)) {
                                                    echo '<label><input type="checkbox" checked  name="katid[]" value="' . $kategori['kategori_id'] . '"/>' . $kategori['kategori_baslik'] . '</label><br/>';
                                                } else {
                                                    echo '<label><input type="checkbox"  name="katid[]" value="' . $kategori['kategori_id'] . '"/>' . $kategori['kategori_baslik'] . '</label><br/>';
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $blog->getId()  ?>">
                                </div>
                                <div class="card-footer">
                                    <button name="blogduzenle" style="float:right" type="submit"
                                            class="btn btn-primary">Kaydet
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php require_once 'footer.php'; ?>