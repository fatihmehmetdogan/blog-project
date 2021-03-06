<?php
session_start();
require_once 'baglanti.php';
require_once '../bootstrap.php';

if (isset($_POST['ayarkaydet'])) {     # ayarkaydet adında bi name var mı böyle bi değer geliyorsa
    $kaydet = $baglanti->prepare("UPDATE ayarlar SET
    ayar_baslik=:ayar_baslik,
    ayar_aciklama=:ayar_aciklama,
    ayar_adres=:ayar_adres,
    ayar_telefon=:ayar_telefon,
    ayar_email=:ayar_email
	");
    $update = $kaydet->execute(array(
        'ayar_baslik' => htmlspecialchars($_POST['baslik']),
        'ayar_aciklama' => htmlspecialchars($_POST['aciklama']),
        'ayar_adres' => htmlspecialchars($_POST['adres']),
        'ayar_telefon' => htmlspecialchars($_POST['telefon']),
        'ayar_email' => htmlspecialchars($_POST['email'])
    ));
    if ($update) {
        Header("Location:ayarlar.php?sayfa=ayarlar&durum=okey");   #yönlendirme
    } else {
        Header("Location:ayarlar.php?sayfa=ayarlar&durum=no");   #yönlendirme
    }
}
if (isset($_POST['hakkimizdakaydet'])) {
    if ($_FILES['resim'] ["size"] > 0) {
        $uploads_dir = 'resimler/hakkimizda';
        @$tmp_name = $_FILES['resim'] ["tmp_name"];
        @$name = $_FILES['resim'] ["name"];
        $sayi1 = rand(1, 10000000);
        $sayi2 = rand(1, 10000000);
        $sayi3 = rand(1, 10000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");
        $kaydet = $baglanti->prepare("UPDATE hakkimizda SET 
        hakkimizda_baslik=:hakkimizda_baslik,
        hakkimizda_aciklama=:hakkimizda_aciklama,
        hakkimizda_resim=:hakkimizda_resim
	");
        $update = $kaydet->execute(array(
            'hakkimizda_baslik' => htmlspecialchars($_POST['baslik']),
            'hakkimizda_aciklama' => $_POST['aciklama'],
            'hakkimizda_resim' => $resimadi
        ));
        if ($update) {
            $eskiresim = $_POST['eskiresim'];
            unlink("resimler/hakkimizda/$eskiresim");
            Header("Location:hakkimizda.php?durum=okey");
        } else {
            Header("Location:hakkimizda.php?durum=no");
        }
    } else {
        $kaydet = $baglanti->prepare("UPDATE hakkimizda SET 
        hakkimizda_baslik=:hakkimizda_baslik,
        hakkimizda_aciklama=:hakkimizda_aciklama
	");
        $update = $kaydet->execute(array(
            'hakkimizda_baslik' => htmlspecialchars($_POST['baslik']),
            'hakkimizda_aciklama' => $_POST['aciklama']
        ));
        if ($update) {
            Header("Location:hakkimizda.php?durum=okey");
        } else {
            Header("Location:hakkimizda.php?durum=no");
        }
    }
}
if (isset($_POST['sliderkaydet'])) {
    if ($_FILES['resim'] ["size"] > 0) {  #resim yükleme
        $uploads_dir = 'resimler/slider';
        @$tmp_name = $_FILES['resim'] ["tmp_name"];
        @$name = $_FILES['resim'] ["name"];
        $sayi1 = rand(1, 1000000);
        $sayi2 = rand(1, 1000000);
        $sayi3 = rand(1, 1000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");
        $kaydet = $baglanti->prepare("UPDATE slider SET
        slider_baslik=:slider_baslik,
        slider_aciklama=:slider_aciklama,
        slider_buton=:slider_buton, 
        slider_link=:slider_link,
        slider_resim=:slider_resim
	");
        $update = $kaydet->execute(array(
            'slider_baslik' => $_POST['baslik'],
            'slider_aciklama' => $_POST['aciklama'],
            'slider_buton' => $_POST['buton'],
            'slider_link' => $_POST['link'],
            'slider_resim' => $resimadi
        ));
        if ($update) {
            $eskiresim = $_POST['eskiresim'];
            unlink("resimler/slider/$eskiresim"); # eski resmi silme
            Header("Location:slider.php?durum=okey");   #yönlendirme
        } else {
            Header("Location:slider.php?durum=no");   #yönlendirme
        }
    } else {
        $kaydet = $baglanti->prepare("UPDATE slider SET
        slider_baslik=:slider_baslik,
        slider_aciklama=:slider_aciklama
	");
        $update = $kaydet->execute(array(
            'slider_baslik' => $_POST['baslik'],
            'slider_aciklama' => $_POST['aciklama']
        ));
        if ($update) {
            Header("Location:slider.php?durum=okey");   #yönlendirme
        } else {
            Header("Location:slider.php?durum=no");   #yönlendirme
        }
    }
}

if (isset($_POST['blogkaydet'])) {
    $katid = $_POST['katid'];
    $uploads_dir = 'resimler/blog';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];
    $sayi1 = rand(1, 10000000);
    $sayi2 = rand(1, 10000000);
    $sayi3 = rand(1, 10000000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimadi = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");
    $baslik = $_POST['baslik'];
    $sira = $_POST['sira'];
    $aciklama = $_POST['aciklama'];
    $Blog = new blog();
    $Blog->setBlogTitle($baslik);
    $Blog->setBlogContent($aciklama);
    $Blog->setBlogImage($resimadi);
    $Blog->setBlogOrder($sira);

    $entityManager->persist($Blog);
    $entityManager->flush();

    $id = $baglanti->lastInsertId();
    foreach ($katid as $kategoriId) {
        $kaydet2 = $baglanti->prepare("INSERT INTO blog_to_kategori SET blog_id=:blog_id, kategori_id=:kategori_id");
        $insert2 = $kaydet2->execute(array(
            'blog_id' => $id,
            'kategori_id' => $kategoriId
        ));
    }
        Header("Location:blog.php");
}

if (isset($_POST['blogduzenle'])) {
    $uploads_dir = 'resimler/blog';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];
    $sayi1 = rand(1, 10000000);
    $sayi2 = rand(1, 10000000);
    $sayi3 = rand(1, 10000000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimadi = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");
    $id = $_POST['id'];
    $baslik = $_POST['baslik'];
    $sira = $_POST['sira'];
    $aciklama = $_POST['aciklama'];
    $Blog = $entityManager->find('blog', $id);
    $Blog->setBlogTitle($baslik);
    $Blog->setBlogImage($resimadi);
    $Blog->setBlogOrder($sira);
    $Blog->setBlogContent($aciklama);
    $entityManager->flush();
    Header("Location:blog.php");
    }
if (isset($_POST['blogsil'])) {
    $katid = $_POST['katid'];
    $eskiresim = $_POST['eskiresim'];
    unlink("resimler/blog/$eskiresim");
    $id = $_POST['id'];
    $blog = $entityManager->find('blog', $id);
    $entityManager->remove($blog);
    $entityManager->flush();
    Header("Location:blog.php");

}
if (isset($_POST['kategorikaydet'])) {
    $uploads_dir = 'resimler/kategori';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];
    $sayi1 = rand(1, 10000000);
    $sayi2 = rand(1, 10000000);
    $sayi3 = rand(1, 10000000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimadi = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");
    $katid = ['katid'];
    $baslik = $_POST['baslik'];
    $sira = $_POST['sira'];
    $Category = new category();

    $Category->setCategoryTitle($baslik);
    $Category->setCategoryImage($resimadi);
    $Category->setCategoryOrder($sira);

    /* @var $entityManager Doctrine\ORM\EntityManager */
    $entityManager->persist($Category);
    $entityManager->flush();
    Header("Location:kategori.php");
}

if (isset($_POST['kategoriduzenle'])) {
    $uploads_dir = 'resimler/kategori';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];
    $sayi1 = rand(1, 10000000);
    $sayi2 = rand(1, 10000000);
    $sayi3 = rand(1, 10000000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimadi = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");
    $id = $_POST['id'];
    $baslik = $_POST['baslik'];
    $sira = $_POST['sira'];
    $Category = $entityManager->find('category', $id);
    $Category->setCategoryTitle($baslik);
    $Category->setCategoryImage($resimadi);
    $Category->setCategoryOrder($sira);
    $entityManager->flush();
    Header("Location:kategori.php");

}
if (isset($_POST['kategorisil'])) {
    $katid = $_POST['katid'];
    $eskiresim = $_POST['eskiresim'];
    unlink("resimler/kategori/$eskiresim");
    $id = $_POST['id'];
    $category = $entityManager->find('category', $id);
    $entityManager->remove($category);
    $entityManager->flush();
    Header("Location:kategori.php");
}
if (isset($_POST['blogyorumkaydet'])) {
    $link = $_SERVER['HTTP_REFERER'];             # link i alıyor hangi sayfada olduğunu yorumun
    $kaydet = $baglanti->prepare("INSERT into yorumlar SET 
yorum_kategori=:yorum_kategori,
blog_id=:blog_id,
yorum_adsoyad=:yorum_adsoyad,
yorum_detay=:yorum_detay
	");
    $insert = $kaydet->execute(array(
        'yorum_kategori' => htmlspecialchars($_POST['kategori']),
        'blog_id' => htmlspecialchars($_POST['id']),
        'yorum_adsoyad' => htmlspecialchars($_POST['adsoyad']),
        'yorum_detay' => htmlspecialchars($_POST['detay'])
    ));
    if ($insert) {
        Header("Location:$link?durum=okey");
    } else {
        Header("Location:$link?durum=no");
    }
}
if (isset($_GET['yorumonayla'])) {
    $duzenle = $baglanti->prepare("UPDATE yorumlar SET 
                yorum_onay=:yorum_onay
                WHERE yorum_id={$_GET['id']}");
    $update = $duzenle->execute(array(
        'yorum_onay' => 1
    ));
    if ($update) {
        Header("Location:yorumlar.php?durum=okey");
    } else {
        Header("Location:yorumlar.php?durum=no");
    }
}
if (isset($_GET['yorumsil'])) {
    $sil = $baglanti->prepare("DELETE  FROM yorumlar where yorum_id=:yorum_id");
    $sil->execute(array(
        'yorum_id' => $_GET['id']
    ));
    if ($sil) {
        Header("Location:yorumlar.php?durum=okey");
    } else {
        Header("Location:yorumlar.php?durum=no");
    }
}
if (isset($_POST['girisyap'])) {
    $email = htmlspecialchars($_POST['email']);
    $sifre = htmlspecialchars($_POST['sifre']);
    $kullanicisor = $baglanti->prepare("SELECT * FROM kullanici  where kullanici_email=:kullanici_email and kullanici_sifre=:kullanici_sifre");
    $kullanicisor->execute(array(
        'kullanici_email' => $email,
        'kullanici_sifre' => $sifre
    ));
    $var = $kullanicisor->rowCount();           #değerleri bastırıyor kaç tane varsa

    if ($var == "0") {
        Header("Location:giris.php?durum=hata");
    } else {
        $_SESSION['giris'] = $email;
        Header("Location:index.php?durum=okey");
    }
}
?>