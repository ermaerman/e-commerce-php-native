<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'watchout';
$koneksi = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbname,$koneksi);

echo 
'<div class="container"><br>
  <h2 align="center">View Users & Admin</h2><br>            
  <table class="table table-bordered">
    <thead align="center">
      <tr>
        <td><b>ID</b></td>
		<td><b>Nama Lengkap</b></td>
		<td><b>Username</b></td>
		<td><b>Password</b></td>
		<td><b>Alamat</b></td>
		<td><b>Email</b></td>
		<td><b>Nomor Telepon</b></td>
		<td><b>Level</b></td>
		<td width="100"><b>Action</b></td>
      </tr>
    </thead>
    </tbody>
</div>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"> Add Admin</button><hr>
<button type="button" class="btn btn-danger btn-block" value="Cetak" onclick="cetak()"><span class="glyphicon glyphicon-print"></span> Print Data</button>
<br>
<br>


</body>

<div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title" align="center">Add Admin</h2>
          <p align="center"><sup><i>Please, fill your information with correctly!</i></sup></p>
        </div>
        <div class="modal-body">
          <form action="../config/tambahuser.php" method="POST" class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-sm-2" name="namalengkap" for="namalengkap">Name:</label>
              <div class="col-sm-10">
                <input type="namalengkap" name="namalengkap" class="form-control" placeholder="Enter your full name" required>
              </div>
            </div>
            <br>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-2" name="username" for="username">Username:</label>
              <div class="col-sm-10">
                <input type="username" name="username" class="form-control" placeholder="Enter your username" required>
              </div>
            </div>
                       <br>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-2" name="password" for="password">Password:</label>
              <div class="col-sm-10">          
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
              </div>
            </div>
                       <br>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-2" name="alamat" for="alamat">Address:</label>
              <div class="col-sm-10">
                <input type="alamat" name="alamat" class="form-control" placeholder="Enter your address" required>
              </div>
            </div>
                       <br>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-2" name="email" for="email">Email:</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
              </div>
            </div>
                       <br>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-2" name="no_telepon" for="no_telepon">Telephon:</label>
              <div class="col-sm-10">
                <input type="no_telepon" name="no_telepon" class="form-control" placeholder="Enter your telephon number" required>
              </div>
            </div>
        </div>
        <br>
        <br>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Register</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
        </form>
      </div>
      </div>
    </div></div></div>
  </div>

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

  $sql = "SELECT * FROM `user`";
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
	echo '<td align="center"><a href="../config/deleteuser.php?id='.$data[0].'"> <span class="glyphicon glyphicon-trash"></span> Delete</a></td>';
    echo '</tr>';
  }
echo '</table>';

mysql_close($koneksi);

?>
</body>
</html>