 <html>
 <head><title></title><head>
 <body>
 <?php

# VERİTABANI BA?LANTISI
$dbuser = "root";   // buraya mysql kullanıcı adınız
$dbpass = "";		// buraya mysql şifreniz
$dbadi  = "ziyaretci_defteri"; // buraya tablo adı
error_reporting(0);
$baglantı=mysql_connect("localhost",$dbuser,$dbpass);
mysql_select_db("merhaba",$baglantı);
$isim=$_POST['isim'];
$email=$_POST['email'];
$gorus=$_POST['gorus'];
 $continu=1;
 # isim boş ise hata gönder
 

 if ($continu == 1) {
	 $sql=mysql_query("INSERT INTO ziyaretci_defteri (isim, email, gorus, tarih) VALUES ('$isim', '$email','$gorus',NOW())");
    function go ($url, $time = 3){ // Time değeri yoksa 3 sn alır.
   
  if ($time) header("Refresh: {$time}; url={$url}");
  else header("Location: {$url}");
 }
  
 // Fonksiyonu çağıralım
 go("http://localhost/kullanici.php", 1); // 10 sn bekledikten sonra yönlendirme yapar.
  

	 echo("Yorumunuzun onayını bekleyiniz. !") ; //gonderilme islemi tamamlandiginda cikacak yazi
	
	
 } 
	
 

 ?>


 </body>
 </html>