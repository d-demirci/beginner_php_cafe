<?php 
include $_SERVER['DOCUMENT_ROOT']."/admin/includes/baglan.php";

if (isset($_POST['rezervasyonkaydet'])) 
{

  $kisi_ad=$_POST["kisi_ad"];
  $kisi_sayisi=$_POST["kisi_sayisi"];
  $kisi_tel=$_POST["kisi_tel"];
  $rezervasyon_tarih=$_POST["rezervasyon_tarih"];
  $menukaydet=$db->prepare("INSERT INTO rezervasyon (kisi_ad, kisi_sayisi, rezervasyon_tarih,kisi_tel) VALUES 
 (:kisi_ad,:kisi_sayisi,:rezervasyon_tarih,:kisi_tel)");
  $kontrol=$menukaydet->execute(array(":kisi_ad"=>$kisi_ad, ":kisi_sayisi"=>$kisi_sayisi, ":rezervasyon_tarih"=>$rezervasyon_tarih, ":kisi_tel"=>$kisi_tel));
 
  if ($kontrol) {

   header('Location:reservation.php?durum=ok'); 
   echo "Kayıt Oluşturuldu";
 }
 else{

  header('Location:reservation.php?durum=no'); 
}
}



?>