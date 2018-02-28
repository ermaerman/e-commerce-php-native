<?php
 
 include 'koneksi.php';

 $namalengkap=$_POST['namalengkap'];
 $username=$_POST['username'];
 $password=md5($_POST['password']);
 $alamat=$_POST['alamat'];
 $email=$_POST['email'];
 $no_telepon=$_POST['no_telepon'];


 $input="INSERT INTO user(id,namalengkap,username,password,alamat,email,no_telepon,level) values('','$namalengkap','$username','$password','$alamat','$email','$no_telepon','user')";
 $data=mysqli_query($konek,$input) or die (mysqli_error($konek));

 if($data){
  echo "<br><strong><center><i>Thank You. You're successfully for register as new member of Watchout. Now, please Login first!";
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../index.php?content=home">'; 
 }

?>