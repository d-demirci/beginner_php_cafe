<?php include 'baglan.php';


if (isset($_POST['login'])) 
{


  $admin_kadi=($_POST['admin_kadi']);
  $admin_sifre=md5($_POST['admin_sifre']);
  if ($admin_kadi && $admin_sifre) 

  {

   $sorgula=$db->query("select * from admin where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre'");
   $verisay=$sorgula->rowCount();



   if ($verisay>0) 
   {
    $_SESSION['admin_kadi'] =$admin_kadi;
    header('Location:../index.php');

  }
  else{

    header('Location:../login.php?login=no');
  }
}     
}




if (isset($_POST['anayemek'])) 
{

  $anayemek_ad=$_POST["anayemek_ad"];
  $anayemek_fiyat=$_POST["anayemek_fiyat"];
  $anayemek_detay=$_POST["anayemek_detay"];
  $anayemek_resimyol=$_POST["anayemek_resimyol"];
  $menukaydet=$db->prepare("INSERT INTO anayemek (anayemek_ad, anayemek_fiyat, anayemek_detay, anayemek_resimyol) VALUES 
 (:anayemek_ad,:anayemek_fiyat,:anayemek_detay,:anayemek_resimyol)");
  $kontrol=$menukaydet->execute(array(":anayemek_ad"=>$anayemek_ad, ":anayemek_fiyat"=>$anayemek_fiyat, ":anayemek_detay"=>$anayemek_detay,":anayemek_resimyol"=>$anayemek_resimyol));
 


  if ($kontrol) {

   header('Location:../anamenu.php?durum=ok'); 
 }
 else{

  header('Location:../anamenu.php?durum=no'); 
}
}



if ($_GET['anayemeksil']="ok") 
{
 $menusil=$db->prepare("delete from anayemek where anayemek_id=:anayemek_id");
$kontrol=$menusil->execute(array( 'anayemek_id'=> $_GET['anayemek_id']
));
 if ($kontrol) {

   header('Location:../anayemek.php?durum=ok'); 
 }
 else{

  header('Location:../anayemek.php?durum=no'); 
}
}





if (isset($_POST['yemekkaydet'])) 
{

   $anayemek_ad=$_POST["anayemek_ad"];
  $anayemek_fiyat=$_POST["anayemek_fiyat"];
  $anayemek_detay=$_POST["anayemek_detay"];
  $anayemek_resimyol=$_POST["anayemek_resimyol"];
  $menukaydet=$db->prepare("INSERT INTO gmenu_anayemek (anayemek_ad, anayemek_fiyat, anayemek_detay, anayemek_resimyol) VALUES 
 (:anayemek_ad,:anayemek_fiyat,:anayemek_detay,:anayemek_resimyol)");
  $kontrol=$menukaydet->execute(array(":anayemek_ad"=>$anayemek_ad, ":anayemek_fiyat"=>$anayemek_fiyat, ":anayemek_detay"=>$anayemek_detay,":anayemek_resimyol"=>$anayemek_resimyol));
 


  if ($kontrol) {

   header('Location:../anamenu.php?durum=ok'); 
 }
 else{

  header('Location:../anamenu.php?durum=no'); 
}
}
if ($_GET['yemeksil']="ok") 
{
 $menusil=$db->prepare("delete from gmenu_anayemek where anayemek_id=:anayemek_id");
$kontrol=$menusil->execute(array('anayemek_id'=> $_GET['anayemek_id']
));
 if ($kontrol) {

   header('Location:../anayemek.php?durum=ok'); 
 }
 else{

  header('Location:../anayemek.php?durum=no'); 
}
}



if (isset($_POST['icecekkaydet'])) 
{

  $icecek_ad=$_POST["icecek_ad"];
  $icecek_fiyat=$_POST["icecek_fiyat"];
  $icecek_detay=$_POST["icecek_detay"];
  $icecek_resimyol=$_POST["icecek_resimyol"];
  $menukaydet=$db->prepare("INSERT INTO gmenuicecek (icecek_ad, icecek_fiyat, icecek_detay, icecek_resimyol) VALUES 
 (:icecek_ad,:icecek_fiyat,:icecek_detay,:icecek_resimyol)");
  $kontrol=$menukaydet->execute(array(":icecek_ad"=>$icecek_ad, ":icecek_fiyat"=>$icecek_fiyat, ":icecek_detay"=>$icecek_detay,":icecek_resimyol"=>$icecek_resimyol));
 


  if ($kontrol) {

   header('Location:../anamenu.php?durum=ok'); 
 }
 else{

  header('Location:../anamenu.php?durum=no'); 
}
}



if ($_GET['iceceksil']="ok") 
{
 $menusil=$db->prepare("delete from gmenu_icecek where icecek_id=:icecek_id");
$kontrol=$menusil->execute(array('icecek_id'=> $_GET['icecek_id']
));
 if ($kontrol) {

   header('Location:../anayemek.php?durum=ok'); 
 }
 else{

  header('Location:../anayemek.php?durum=no'); 
}
}






if (isset($_POST['iceceklerkaydet'])) 
{

  $icecek_ad=$_POST["icecek_ad"];
  $icecek_fiyat=$_POST["icecek_fiyat"];
  $icecek_detay=$_POST["icecek_detay"];
  $icecek_resimyol=$_POST["icecek_resimyol"];
  $menukaydet=$db->prepare("INSERT INTO icecekler (icecek_ad, icecek_fiyat, icecek_detay, icecek_resimyol) VALUES 
 (:icecek_ad,:icecek_fiyat,:icecek_detay,:icecek_resimyol)");
  $kontrol=$menukaydet->execute(array(":icecek_ad"=>$icecek_ad, ":icecek_fiyat"=>$icecek_fiyat, ":icecek_detay"=>$icecek_detay,":icecek_resimyol"=>$icecek_resimyol));
 


  if ($kontrol) {

   header('Location:../anamenu.php?durum=ok'); 
 }
 else{

  header('Location:../anamenu.php?durum=no'); 
}
}



if ($_GET['iceceklersil']="ok") 
{
 $menusil=$db->prepare("delete from icecekler where icecek_id=:icecek_id");
$kontrol=$menusil->execute(array('icecek_id'=> $_GET['icecek_id']
));
 if ($kontrol) {

   header('Location:../anayemek.php?durum=ok'); 
 }
 else{

  header('Location:../anayemek.php?durum=no'); 
}
}


if (isset($_POST['kahvaltikaydet'])) 
{

  $kahvalti_ad=$_POST["kahvalti_ad"];
  $kahvalti_fiyat=$_POST["kahvalti_fiyat"];
  $kahvalti_detay=$_POST["kahvalti_detay"];
  $kahvalti_resimyol=$_POST["kahvalti_resimyol"];
  $menukaydet=$db->prepare("INSERT INTO kahvalti (kahvalti_ad, kahvalti_fiyat, kahvalti_detay, kahvalti_resimyol) VALUES 
 (:kahvalti_ad,:kahvalti_fiyat,:kahvalti_detay,:kahvalti_resimyol)");
  $kontrol=$menukaydet->execute(array(":kahvalti_ad"=>$kahvalti_ad, ":kahvalti_fiyat"=>$kahvalti_fiyat, ":kahvalti_detay"=>$kahvalti_detay,":kahvalti_resimyol"=>$kahvalti_resimyol));
 


  if ($kontrol) {

   header('Location:../anamenu.php?durum=ok'); 
 }
 else{

  header('Location:../anamenu.php?durum=no'); 
}
}



if ($_GET['kahvaltisil']="ok") 
{
 $menusil=$db->prepare("delete from kahvalti where kahvalti_id=:kahvalti_id");
$kontrol=$menusil->execute(array('kahvalti_id'=> $_GET['kahvalti_id']
));
 if ($kontrol) {

   header('Location:../anayemek.php?durum=ok'); 
 }
 else{

  header('Location:../anayemek.php?durum=no'); 
}
}



if (isset($_POST['tatlikaydet'])) 
{

  $tatli_ad=$_POST["tatli_ad"];
  $tatli_fiyat=$_POST["tatli_fiyat"];
  $tatli_detay=$_POST["tatli_detay"];
  $tatli_resimyol=$_POST["tatli_resimyol"];
  $menukaydet=$db->prepare("INSERT INTO gmenu_tatli (tatli_ad, tatli_fiyat, tatli_detay, tatli_resimyol) VALUES 
 (:tatli_ad,:tatli_fiyat,:tatli_detay,:tatli_resimyol)");
  $kontrol=$menukaydet->execute(array(":tatli_ad"=>$tatli_ad, ":tatli_fiyat"=>$tatli_fiyat, ":tatli_detay"=>$tatli_detay,":tatli_resimyol"=>$tatli_resimyol));
 


  if ($kontrol) {

   header('Location:../anamenu.php?durum=ok'); 
 }
 else{

  header('Location:../anamenu.php?durum=no'); 
}
}



if ($_GET['tatlisil']="ok") 
{
 $menusil=$db->prepare("delete from gmenu_tatli where tatli_id=:tatli_id");
$kontrol=$menusil->execute(array('tatli_id'=> $_GET['tatli_id']
));
 if ($kontrol) {

   header('Location:../anayemek.php?durum=ok'); 
 }
 else{

  header('Location:../anayemek.php?durum=no'); 
}
}


if (isset($_POST['tatlilarkaydet'])) 
{

  $tatli_ad=$_POST["tatli_ad"];
  $tatli_detay=$_POST["tatli_detay"];
   $tatli_fiyat=$_POST["tatli_fiyat"];
  $tatli_resimyol=$_POST["tatli_resimyol"];
  $menukaydet=$db->prepare("INSERT INTO tatlılar (tatli_ad, tatli_detay, tatli_fiyat, tatli_resimyol) VALUES 
 (:tatli_ad,:tatli_detay,:tatli_fiyat,:tatli_resimyol)");
  $kontrol=$menukaydet->execute(array(":tatli_ad"=>$tatli_ad,  ":tatli_detay"=>$tatli_detay,":tatli_fiyat"=>$tatli_fiyat,":tatli_resimyol"=>$tatli_resimyol));
 


  if ($kontrol) {

   header('Location:../anamenu.php?durum=ok'); 
 }
 else{

  header('Location:../anamenu.php?durum=no'); 
}
}



if ($_GET['tatlilarsil']="ok") 
{
 $menusil=$db->prepare("delete from tatlılar where tatli_id=:tatli_id");
$kontrol=$menusil->execute(array('tatli_id'=> $_GET['tatli_id']
));
 if ($kontrol) {

   header('Location:../anayemek.php?durum=ok'); 
 }
 else{

  header('Location:../anayemek.php?durum=no'); 
}
}



if ($kontrol) {

   header('Location:../index.php?durum=ok'); 
 }
 else{

  header('Location:../index.php?durum=no'); 
}


?>