<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'watchout';
$koneksi = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbname,$koneksi);

echo 
'<div class="container"><br>
  <h2 align="center">View FAQ</h2><br>            
  <table class="table table-bordered">
    <thead align="center">
      <tr>
        <td><b>ID</b></td>
		<td><b>Name</b></td>
		<td><b>Email</b></td>
		<td><b>Country</b></td>
		<td><b>Comment</b></td>
		<td><b>Time</b></td>
		<td width="100"><b>Action</b></td>
      </tr>
    </thead>
    </tbody>
</div>
<button type="button" class="btn btn-primary btn-block" value="Cetak" onclick="cetak()"><span class="glyphicon glyphicon-print"></span> Print Data</button>
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

  $sql = "SELECT * FROM `faq`";
  $lihatdata = mysql_query($sql);
  while ($data = mysql_fetch_array($lihatdata)) {
    echo '<tr>';
    echo '<td align="center">'.$data[0].'</td>';
    echo '<td>'.$data[1].'</td>';
    echo '<td>'.$data[2].'</td>';
    echo '<td>'.$data[3].'</td>';
    echo '<td>'.$data[4].'</td>';
    echo '<td>'.$data[5].'</td>';
	echo '<td align="center"><a href="../config/deletefaq.php?id='.$data[0].'"> <span class="glyphicon glyphicon-trash"></span> Delete</a></td>';
    echo '</tr>';
  }
echo '</table>';

mysql_close($koneksi);

?>
</body>
</html>