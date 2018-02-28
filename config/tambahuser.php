<?php
 
 include 'koneksi.php';

 $namalengkap=$_POST['namalengkap'];
 $username=$_POST['username'];
 $password=md5($_POST['password']);
 $alamat=$_POST['alamat'];
 $email=$_POST['email'];
 $no_telepon=$_POST['no_telepon'];


 $input="INSERT INTO user(id,namalengkap,username,password,alamat,email,no_telepon,level) values('','$namalengkap','$username','$password','$alamat','$email','$no_telepon','admin')";
 $data=mysqli_query($konek,$input) or die (mysqli_error($konek));

 if($data){
  echo "<br><strong><center><sub>Thank You. You're successfully added a new admin.";
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?content=user">'; 
 }

?>