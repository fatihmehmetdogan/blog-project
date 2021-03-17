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
Header("Location:ayarlar.php?durum=okey");   #yönlendirme
}else{
	Header("Location:ayarlar.php?durum=no");   #yönlendirme
	
}


}
















?>