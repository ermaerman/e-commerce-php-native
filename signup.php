<style>
.button {
  border-radius: 4px;
  background-color: #2764c6;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style> 
        
<br>
<br>
<br>
<br>        
<br>
<br>
<br>
<br>
 <div>
    <div>
      <div align="center"><button type="button" class="button" data-toggle="modal" data-target="#myModal"><span> Sign Up </span></button></div>

<br>
<br>
<br>
<br>        
<br>
<br>
<br>
<br>
      <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title" align="center">SignUp</h2>
          <p align="center"><sup><i>This form is for new member of Watchout. Please, fill your information with correctly!</i></sup></p>
        </div>
        <div class="modal-body">
          <form action="config/tambahuser2.php" method="POST" class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-sm-2" name="namalengkap" for="namalengkap">Name:</label>
              <div class="col-sm-10">
                <input type="namalengkap" name="namalengkap" class="form-control" placeholder="Enter your full name" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="username" for="username">Username:</label>
              <div class="col-sm-10">
                <input type="username" name="username" class="form-control" placeholder="Enter your username" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="password" for="password">Password:</label>
              <div class="col-sm-10">          
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="alamat" for="alamat">Address:</label>
              <div class="col-sm-10">
                <input type="alamat" name="alamat" class="form-control" placeholder="Enter your address" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="email" for="email">Email:</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="no_telepon" for="no_telepon">Telephon:</label>
              <div class="col-sm-10">
                <input type="no_telepon" name="no_telepon" class="form-control" placeholder="Enter your telephon number" required>
              </div>
            </div>
        </div>
        
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Register</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>
</div>