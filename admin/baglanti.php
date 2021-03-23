<?php
try {
	$baglanti=new PDO('mysql:host=localhost; dbname=blogdb; 
		charset=utf8;', 'root', '');
	#echo "baglantı başarılı";
} catch (Exception $e) {
	echo "Hata yaptın :".$e->getMessage();
}














?>