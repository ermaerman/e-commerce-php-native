<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'watchout';
$koneksi = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbname,$koneksi);


$id=$_GET['id'];

$delete = "DELETE FROM faq WHERE id = '$id' ";
$query = mysql_query($delete) or die (mysql_error());

if($query ){
	header('location:../admin/admin.php?content=faq');
}

?>