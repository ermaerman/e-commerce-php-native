<?php
  //menyambungkan koneksi
  include '../config/koneksi.php';

  $content = $_GET['content'];
?>

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

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      </button>
      <a class="navbar-brand" href="admin.php?content=home">Watchout</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="admin.php?content=user">Users & Admin</a></li>
        <li><a href="admin.php?content=buy">Buy</a></li>
        <li><a href="admin.php?content=confirm">Payment Confirmation</a></li>
        <li><a href="admin.php?content=faq">FAQ</a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="../config/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br>

  <div>
      <div>
         <?php
            if ($content=='home')
              include 'home-admin.php';
            else if ($content=='user')
              include 'user.php';
            else if ($content=='confirm')
              include 'confirm.php';
            else if ($content=='payment')
              include 'payment.php';
            else if ($content=='faq')
              include 'faq.php';
         ?>

       </div>
   </div>

<footer class="container-fluid text-center">
  <div class="container-fluid text-left">
   
<p><b>Translate this page</b></p>

<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<p><i>You can translate the content of this page by selecting a language in the select box.</i></p>

  </div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-arrow-up"></span> Go to TOP</button>

<hr>

  <p>2017 © Erma Noviana | 2015230014. All Rights Reserved.</p>
  <p>Powered by: <a data-toggle="tooltip" data-placement="right" title="Click me!" href="index.php">Watchout.com</a></p>

</footer>

<script type="text/javascript">
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
