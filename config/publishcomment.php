<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'watchout';
$koneksi = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbname,$koneksi);

if(!$koneksi)
die("Cannot acces database SQL");
 
mysql_select_db("watchout", $koneksi);
?>
 
<?php
function getcomment($art_id){
$commentquery = mysql_query("SELECT * FROM faq") or die(mysql_error());
$commentNum = mysql_num_rows($commentquery);
echo "<h4>" . "Current comment(s)..." . "</h4>";
echo "<b>" . $commentNum . " comment(s) so far. Leave a comment..." .
"</b>" . "<br />" . "<br />";
echo "<hr>";
 
while($row = mysql_fetch_array($commentquery))
 {
 echo "<b>" . $row['nama'] . "</b>" . " " . " | " . " " . "<i>" .
$row['date'] . "</i>" . "<br />" . "<br />" . $row['komentar'] . "<br />";
 echo "<hr>";
 }
}
?>