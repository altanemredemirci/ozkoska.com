<?php 

include 'baglan.php';

/* LOGİN İŞLEMLERİ */
if(isset($_POST['login'])){

	$admin_kadi=$_POST['admin_ad'];
	$admin_sifre=($_POST['admin_sifre']);
	
	if($admin_kadi && $admin_sifre) {

		$sorgula=mysql_query("select * from admin where admin_ad='$admin_kadi' and admin_sifre='$admin_sifre'");
		$verisay=mysql_num_rows($sorgula);

		if ($verisay>0) {
			
			$_SESSION['admin_ad']=$admin_kadi; 

			header('Location:../index.php');
		}

		else {

			header('Location:../login.php?login=no');
		}
	}

	elseif (!$admin_kadi || !$admin_sifre) {
		
		header('Location:../login.php?login=no');
	}

	
}


/* FOOTER GÜNCELLEME */

if(isset($_POST['footerkaydet'])){

	

	$footerkaydet=$db->exec("UPDATE footer set footer_telefon='".$_POST['footer_telefon']."',footer_adres='".$_POST['footer_adres']."',footer_facebook='".$_POST['footer_facebook']."',footer_twitter='".$_POST['footer_twitter']."',footer_instagram='".$_POST['footer_instagram']."',footer_twitter='".$_POST['footer_twitter']."',footer_footer='".$_POST['footer_footer']."'");


	if(mysql_affected_rows())
	{
		header("Location:../footer.php?durum=ok");
	}

	else
	{
		header("Location:../footer.php?durum=no");	
	}

}











if (isset($_POST['ekle'])) {

	$ekle=$db->exec("insert into iletisim (tablo_ad,tablo_telefon,tablo_email,tablo_mesaj) VALUES ('".$_POST['tablo_ad']."','".$_POST['tablo_telefon']."','".$_POST['tablo_email']."','".$_POST['tablo_mesaj']."')");


	
	header("Location:../../index.php");

}

else {

	echo "MESAJ GÖNDERİLEMEDİ";
	header("Refresh: 3; url=http://www.ozkoska.com");
}



?>