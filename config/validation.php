<?php
 
 include 'koneksi.php';


 $input="UPDATE payment SET validation='ok'";
 $data=mysqli_query($konek,$input) or die (mysqli_error($konek));

 if($data){
  echo "<br><strong><center><i>Validation proses ..";
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?content=confirm">'; 
 }

?>