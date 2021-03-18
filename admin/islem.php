<?php 

require_once 'baglanti.php';

if (isset($_POST['ayarkaydet'])) {     # ayarkaydet adında bi name var mı böyle bi değer geliyorsa
$kaydet=$baglanti->prepare("UPDATE ayarlar SET

ayar_baslik=:ayar_baslik,
ayar_aciklama=:ayar_aciklama,
ayar_anahtar=:ayar_anahtar,
ayar_adres=:ayar_adres,
ayar_telefon=:ayar_telefon,
ayar_email=:ayar_email
	");
$update=$kaydet->execute(array(

'ayar_baslik'=>htmlspecialchars($_POST['baslik']),
'ayar_aciklama'=>htmlspecialchars($_POST['aciklama']),
'ayar_anahtar'=>htmlspecialchars($_POST['anahtar']),
'ayar_adres'=>htmlspecialchars($_POST['adres']),
'ayar_telefon'=>htmlspecialchars($_POST['telefon']),
'ayar_email'=>htmlspecialchars($_POST['email'])

));

if ($update) {
Header("Location:ayarlar.php?sayfa=ayarlar&durum=okey");   #yönlendirme
}else{
	Header("Location:ayarlar.php?sayfa=ayarlar&durum=no");   #yönlendirme
}
} 
if (isset($_POST['hakkimizdakaydet'])) {     # ayarkaydet adında bi name var mı böyle bi değer geliyorsa

if ($_FILES['resim'] ["size"]>0) {
	
$uploads_dir='resimler/hakkimizda';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,1000000);
$sayi2=rand(1,1000000);
$sayi3=rand(1,1000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name,"$uploads_dir/$resimadi");

$kaydet=$baglanti->prepare("UPDATE hakkimizda SET

hakkimizda_baslik=:hakkimizda_baslik,
hakkimizda_aciklama=:hakkimizda_aciklama,
hakkimizda_resim=:hakkimizda_resim
	");
$update=$kaydet->execute(array(

'hakkimizda_baslik'=>htmlspecialchars($_POST['baslik']),
'hakkimizda_aciklama'=>$_POST['aciklama'],
'hakkimizda_resim'=>$resimadi

));

if ($update) {
Header("Location:hakkimizda.php?durum=okey");   #yönlendirme
}else{
	Header("Location:hakkimizda.php?durum=no");   #yönlendirme	
}

}

else{
	$kaydet=$baglanti->prepare("UPDATE hakkimizda SET

hakkimizda_baslik=:hakkimizda_baslik,
hakkimizda_aciklama=:hakkimizda_aciklama

	");
$update=$kaydet->execute(array(

'hakkimizda_baslik'=>htmlspecialchars($_POST['baslik']),
'hakkimizda_aciklama'=>$_POST['aciklama']
));

if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/hakkimizda/$eskiresim"); # eski resmi silme
Header("Location:hakkimizda.php?durum=okey");   #yönlendirme
}else{
	Header("Location:hakkimizda.php?durum=no");   #yönlendirme
	
}
}


}






if (isset($_POST['sliderkaydet'])) {     # ayarkaydet adında bi name var mı böyle bi değer geliyorsa

if ($_FILES['resim'] ["size"]>0) {  #resim yükleme
	
$uploads_dir='resimler/slider';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,1000000);
$sayi2=rand(1,1000000);
$sayi3=rand(1,1000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name,"$uploads_dir/$resimadi");

$kaydet=$baglanti->prepare("UPDATE slider SET

slider_baslik=:slider_baslik,
slider_aciklama=:slider_aciklama,
slider_buton=:slider_buton, 
slider_link=:slider_link,
slider_resim=:slider_resim
	");
$update=$kaydet->execute(array(

'slider_baslik'=>$_POST['baslik'],
'slider_aciklama'=>$_POST['aciklama'],
'slider_buton'=>$_POST['buton'],
'slider_link'=>$_POST['link'],
'slider_resim'=>$resimadi

));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/slider/$eskiresim"); # eski resmi silme
Header("Location:slider.php?durum=okey");   #yönlendirme
}else{
	Header("Location:slider.php?durum=no");   #yönlendirme
	
}

}

else{
	$kaydet=$baglanti->prepare("UPDATE slider SET

slider_baslik=:slider_baslik,
slider_aciklama=:slider_aciklama,
slider_buton=:slider_buton,
slider_link=:slider_link

	");
$update=$kaydet->execute(array(

'slider_baslik'=>$_POST['baslik'],
'slider_aciklama'=>$_POST['aciklama'],
'slider_buton'=>$_POST['buton'],
'slider_link'=>$_POST['link']
));


if ($update) {
Header("Location:slider.php?durum=okey");   #yönlendirme
}else{
	Header("Location:slider.php?durum=no");   #yönlendirme	
}



}


}







if (isset($_POST['ekipkaydet'])) {     # ayarkaydet adında bi name var mı böyle bi değer geliyorsa
$kaydet=$baglanti->prepare("UPDATE ayarlar SET

ayar_baslik=:ayar_baslik,
ayar_aciklama=:ayar_aciklama,
ayar_anahtar=:ayar_anahtar,
ayar_adres=:ayar_adres,
ayar_telefon=:ayar_telefon,
ayar_email=:ayar_email
	");
$update=$kaydet->execute(array(

'ayar_baslik'=>htmlspecialchars($_POST['baslik']),
'ayar_aciklama'=>htmlspecialchars($_POST['aciklama']),
'ayar_anahtar'=>htmlspecialchars($_POST['anahtar']),
'ayar_adres'=>htmlspecialchars($_POST['adres']),
'ayar_telefon'=>htmlspecialchars($_POST['telefon']),
'ayar_email'=>htmlspecialchars($_POST['email'])

));

if ($update) {
Header("Location:ayarlar.php?sayfa=ayarlar&durum=okey");   #yönlendirme
}else{
	Header("Location:ayarlar.php?sayfa=ayarlar&durum=no");   #yönlendirme
}
} 








if (isset($_POST['ekipkaydet'])) {     # ayarkaydet adında bi name var mı böyle bi değer geliyorsa

$uploads_dir='resimler/ekip';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,1000000);
$sayi2=rand(1,1000000);
$sayi3=rand(1,1000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name,"$uploads_dir/$resimadi");

$kaydet=$baglanti->prepare("INSERT into ekip SET

ekip_isim=:ekip_isim,
ekip_konum=:ekip_konum,
ekip_sira=:ekip_sira,
ekip_aciklama=:ekip_aciklama,
ekip_resim=:ekip_resim
	");
$insert=$kaydet->execute(array(

'ekip_isim'=>htmlspecialchars($_POST['isim']),
'ekip_konum'=>htmlspecialchars($_POST['konum']),
'ekip_sira'=>htmlspecialchars($_POST['sira']),
'ekip_aciklama'=>$_POST['aciklama'],
'ekip_resim'=>$resimadi
));

if ($insert) {
Header("Location:ekip.php?sayfa=ekip&durum=okey");   #yönlendirme
}else{
	Header("Location:ekip.php?sayfa=ekip&durum=no");   #yönlendirme
}
} 






if (isset($_POST['ekipduzenle'])) {     # ayarkaydet adında bi name var mı böyle bi değer geliyorsa

if ($_FILES['resim'] ["size"]>0) {  #resim yükleme
	
$uploads_dir='resimler/ekip';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,1000000);
$sayi2=rand(1,1000000);
$sayi3=rand(1,1000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name,"$uploads_dir/$resimadi");

$kaydet=$baglanti->prepare("UPDATE ekip SET

ekip_isim=:ekip_isim,
ekip_konum=:ekip_konum,
ekip_sira=:ekip_sira,
ekip_aciklama=:ekip_aciklama,
ekip_resim=:ekip_resim
WHERE ekip_id={$_POST['id']}  # ekip id ye göre güncelleme yapmamı sağlıyor
	");
$update=$kaydet->execute(array(

'ekip_isim'=>htmlspecialchars($_POST['isim']),
'ekip_konum'=>htmlspecialchars($_POST['konum']),
'ekip_sira'=>htmlspecialchars($_POST['sira']),
'ekip_aciklama'=>$_POST['aciklama'],
'ekip_resim'=>$resimadi 

));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/ekip/$eskiresim"); # eski resmi silme
Header("Location:ekip.php?durum=okey");   #yönlendirme
}else{
	Header("Location:ekip.php?durum=no");   #yönlendirme
	
}

}
 # resim yoksa

else{
	$kaydet=$baglanti->prepare("UPDATE ekip SET

ekip_isim=:ekip_isim,
ekip_konum=:ekip_konum,
ekip_sira=:ekip_sira,
ekip_aciklama=:ekip_aciklama
WHERE ekip_id={$_POST['id']}

	");
$update=$kaydet->execute(array(

'ekip_isim'=>htmlspecialchars($_POST['isim']),
'ekip_konum'=>htmlspecialchars($_POST['konum']),
'ekip_sira'=>htmlspecialchars($_POST['sira']),
'ekip_aciklama'=>$_POST['aciklama']
));


if ($update) {
Header("Location:ekip.php?durum=okey");   #yönlendirme
}else{
	Header("Location:ekip.php?durum=no");   #yönlendirme	
}



}


}




# silme

if (isset($_POST['ekipsil'])) {
	
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/ekip/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM ekip where ekip_id=:ekip_id");
$sil->execute(array(

'ekip_id'=>$_POST['id']

));

if ($sil) {
	Header("Location:ekip.php?durum=okey");
}
else{
	Header("Location:ekip.php?durum=no");

}
}




?>