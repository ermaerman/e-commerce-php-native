<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'watchout';
$koneksi = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbname,$koneksi);

echo 
'<div class="container"><br>
  <h2 align="center">View Payment Confirmation</h2><br>            
  <table class="table table-bordered">
    <thead align="center">
      <tr>
        <td><b>ID</b></td>
		<td><b>Order Number</b></td>
		<td><b>Destination of Bank</b></td>
		<td><b>Name of Sender</b></td>
		<td><b>Date of Transfer</b></td>
    <td><b>Amount</b></td>
    <td><b>Method of Transfer</b></td>
		<td><b>Validation</b></td>
		<td width="100"><b>Action</b></td>
      </tr>
    </thead>
    </tbody>
</div>
<button type="button" class="btn btn-warning btn-block" value="Cetak" onclick="cetak()"><span class="glyphicon glyphicon-print"></span> Print Data</button>
<br>
<br>


</body>



<script type="text/javascript">
function cetak(){
 print();
}
</script>
        

        
 
      </div>
      </div>
    </div>
  </div>
</div>
</div>
        
 
';

  $sql = "SELECT * FROM `payment`";
  $lihatdata = mysql_query($sql);
  while ($data = mysql_fetch_array($lihatdata)) {
    echo '<tr>';
    echo '<td align="center">'.$data[0].'</td>';
    echo '<td>'.$data[1].'</td>';
    echo '<td>'.$data[2].'</td>';
    echo '<td>'.$data[3].'</td>';
    echo '<td>'.$data[4].'</td>';
    echo '<td>'.$data[5].'</td>';
    echo '<td>'.$data[6].'</td>';
    echo '<td>'.$data[7].'</td>';
	echo '<td width="200" align="center"><a href="../config/deleteconfirm-payment.php?id='.$data[0].'"> <span class="glyphicon glyphicon-trash"></span> Delete</a> | <a href="../config/validation.php"><span class="glyphicon glyphicon-ok"></span> Validation</a></td>';
    echo '</tr>';
  }
echo '</table>';

mysql_close($koneksi);

?>
</body>
</html>