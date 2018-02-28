<!DOCTYPE html>
<html lang="en">
<head>
  <title>Watchout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../layout.css">
  <script src="../bootstrap/jquery-3.2.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php?content=home">Wacthout</a>
    </div>
  </div>
</nav>

<br>
<br>
<br>
<br>
<br>
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
      <div align="center"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Login Admin</button></div>
        
<br>
<br>
<br>
<br>
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
          <h2 class="modal-title" align="center">Login Admin</h2>
          <p align="center"><sup><i>Please, fill your information with correctly!</i></sup></p>
        </div>
        <div class="modal-body">
          <form action="../config/prosesloginadmin.php" method="POST" class="form-horizontal">
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
        </div>
        
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Submit</button>
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
        
  <footer>

  <p align="center">2017 © Erma Noviana | 2015230014. All Rights Reserved.</p>
  <p align="center">Powered by: <a data-toggle="tooltip" data-placement="right" title="Click me!" href="index.php">Watchout.com</a></p>

  </footer>

<script>
  $(document).ready(function() 
  {
    $('[data-toggle="tooltip"]').tooltip();   
  });

// When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
  }

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}

</script>


</body>
</html>
