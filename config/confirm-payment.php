<?php
 
 include 'koneksi.php';

 $ordernumber=$_POST['ordernumber'];
 $name=$_POST['name'];
 $date=$_POST['date'];
 $amount=$_POST['amount'];
 $method=$_POST['method'];


 $input="INSERT INTO payment(id,ordernumber,bank,name,date,amount,method) values('','$ordernumber','BCA 7144-555-38383888 a/n Watchout','$name','$date','$amount','$method')";
 $data=mysqli_query($konek,$input) or die (mysqli_error($konek));

 if($data){
  echo "<br><strong><center><i>Thank You. You're successfully confirm your payment.";
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?content=confirm">'; 
 }

?>