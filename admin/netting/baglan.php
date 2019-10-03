<!--
 <?php 
$username="root";
$password="04121989";
$sunucu="localhost";
$database="ozkoska";

$baglan=mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF8");

if (!$baglan) {
	echo "Baglantı hatası:".mysql_errno();
	exit();
}

else{
	echo " yaoptıkkkkk";
}
$db=mysql_select_db($database);

if (!$db) {
	echo "Veritabanı hatası:".mysql_error(); echo "<br>";
echo "Veritabanı bağlantı bilgileri /netting/baglan.php dosyasından düzenleyebilirisiniz.";
exit();
}


?> 

<?php
$servername = "localhost";
$database = "ozkoska";
$username = "root";
$password = "04121989";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?> -->

<meta charset="utf-8">
<?php

try { $db=new PDO("mysql:host=localhost; dbname=ozkoska",'root','04121989');

	

} catch (PDOException $e) {
	
	echo $e-> getMessage();
}

?>