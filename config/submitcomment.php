
<?php

if($_POST["tombol"]=="Kirim")
{
$nama=$_POST["nama"];
$email=$_POST["email"];
$website=$_POST["website"];
$komentar=$_POST["komentar"];
 
if(empty($nama))
$_POST["nama"]='anonymous';
if(empty($komentar)){
echo "<meta http-equiv='refresh' content='2; url=index.php?content=faq'>";
die("komentar harus diisi");}
}
 
//connect database
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'watchout';
$koneksi = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbname,$koneksi);

if(!$koneksi)
die("Tidak dapat melakukan koneksi ke server MySQL");
 
//Menampilkan data
mysql_select_db("watchout", $koneksi);
 
$sql="INSERT INTO faq (nama, email, website, komentar, date) VALUES ('$_POST[nama]','$_POST[email]','$_POST[website]', '$_POST[komentar]', NOW())";
 
if (!mysql_query($sql,$koneksi))
 {
 die('Error: ' . mysql_error());
 }
echo "<meta http-equiv='refresh' content='0; url=../index.php?content=faq'>";
 
//Memutuskan koneksi
mysql_close($koneksi);
?>