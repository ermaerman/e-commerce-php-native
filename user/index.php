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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      </button>
      <a class="navbar-brand" href="index.php?content=home">Watchout</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="index.php?content=">Categories
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?content=woman">Woman</a></li>
            <li><a href="index.php?content=man">Man</a></li>
            <li><a href="index.php?content=kids">Kids</a></li> 
          </ul>
        </li>
        <li><a href="index.php?content=about">About Us</a></li>
        <li><a href="index.php?content=buy">How to buy?</a></li>
        <li><a href="index.php?content=contact">Contact Us</a></li>
        <li><a href="index.php?content=faq">FAQ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge">0</span></a></li>
      <li><a href="#">My Account</a></li>
      <li><a href="../config/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
    </div>
  </div>
</nav>



  <div>
      <div>
         <?php
            if ($content=='home')
              include 'awal.php';
            else if ($content=='woman')
              include 'woman.php';
            else if ($content=='woman2')
              include 'woman2.php';
            else if ($content=='man')
              include 'man.php';
            else if ($content=='kids')
              include 'kids.php';
            else if ($content=='contact')
              include 'contact';
            else if ($content=='about')
              include 'about.php';
            else if ($content=='buy')
              include 'buy.php';
            else if ($content=='buy2')
              include 'buy2.php';
            else if ($content=='buy3')
              include 'buy3.php';
            else if ($content=='buy4')
              include 'buy4.php';
            else if ($content=='buy5')
              include 'buy5.php';
            else if ($content=='buy6')
              include 'buy6.php';
            else if ($content=='buy7')
              include 'buy7.php';
            else if ($content=='buy8')
              include 'buy8.php';
            else if ($content=='buy9')
              include 'buy9.php';
            else if ($content=='buy10')
              include 'buy10.php';
            else if ($content=='buy11')
              include 'buy11.php';
            else if ($content=='buy12')
              include 'buy12.php';
            else if ($content=='faq')
              include 'faq.php';
            else if ($content=='signup')
              include 'signup.php';
         ?>


 

<br>



<footer class="container-fluid text-center">
  <div class="container-fluid text-left">
    <table>
      <tr>
        <td width="10%"><b>Watchouters</b></td>
        <td width="10%"><b>Customer Service</b></td>
        <td width="10%"><b>Features</b></td>
        <td width="10%"><b>More Information</b></td>
      </tr>

      <tr>
        <td><a href="index.php?content=about" data-toggle="tooltip" data-placement="right" title="About Us">About Us</a></td>
        <td><a href="index.php?content=contact" data-toggle="tooltip" data-placement="right" title="Contact Us">Contact Us</a></td>
        <td><a href="index.php?content=ecoupon" data-toggle="tooltip" data-placement="right" title="eCoupon">eCoupon</a></td>
        <td>
          <table width="120px">
            <tr>
              <td><a href="http://www.facebook.com"><img align="left" src="../gambar/pic10.png" height="20px" width="20px"></a></td>
              <td><a href="http://www.twitter.com"><img align="left" src="../gambar/pic11.png" height="20px" width="20px"></a></td>
              <td><a href="http://www.gmail.com"><img align="left" src="../gambar/pic12.png" height="20px" width="25px"></a></td>
              <td><a href="http://www.instagram.com"><img align="left" src="../gambar/pic13.png" height="20px" width="20px"></a></td>
              <td><a href="http://www.whatsapp.com"><img align="left" src="../gambar/pic14.png" height="20px" width="20px"></a></td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td><a href="index.php?content=about" data-toggle="tooltip" data-placement="right" title="Detailed Expenditure and Low Cost">Detailed Expenditure and Low Cost</a></td>
        <td><a href="index.php?content=contact" data-toggle="tooltip" data-placement="right" title="Store Location">Store Location</a></td>
        <td><a href="index.php?content=ecoupon" data-toggle="tooltip" data-placement="right" title="Write & Win">Write & Win</a></td>
      </tr>

      <tr>
        <td><a href="index.php?content=about" data-toggle="tooltip" data-placement="right" title="Behind The Scenes">Behind The Scenes</a></td>
        <td><a href="index.php?content=contact" data-toggle="tooltip" data-placement="right" title="Central Service">Central Service</a></td>
        <td><a href="index.php?content=ecoupon" data-toggle="tooltip" data-placement="right" title="Watchout Point">Watchout Point</a></td>
      </tr>

      <tr>
        <td></td>
        <td><a href="index.php?content=contact" data-toggle="tooltip" data-placement="right" title="How to Buy?">How to Buy?</a></td>
        <td></td>
        <td><a href="index.php?content=ecoupon" data-toggle="tooltip" data-placement="right" title="Contact Us"></a><b>Contact Us</b></td>
      </tr>

      <tr>
        <td></td>
        <td><a href="index.php?content=contact" data-toggle="tooltip" data-placement="right" title="Product Returns">Product Returns</a></td>
        <td></td>
        <td>021-88354242</td>
      </tr>

      <tr>
        <td></td>
        <td><a href="index.php?content=contact" data-toggle="tooltip" data-placement="right" title="Terms and Conditions">Terms and Conditions</a></td>
        <td></td>
        <td><sub><i>Central Office: Monday - Friday 09:00-16:00</i></sub></td>
      </tr>

      <tr>
        <td></td>
        <td><a href="index.php?content=contact" data-toggle="tooltip" data-placement="right" title="Privacy Policy">Privacy Policy</a></td>
        <td></td>
        <td><sub><i>Saturday 09:00-12:00</i></sub></td>
      </tr>

      <tr>
        <td></td>
        <td><a href="index.php?content=contact" data-toggle="tooltip" data-placement="right" title="Safety Tips of Transactions">Safety Tips of Transactions</a></td>
        <td></td>
        <td><sub><i>Natas Street, RT 011/02 Blok F No.88 Jakarta 17188</i></sub></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td><sub><i>Shop: Everyday 09:00-16:00</i></sub></td>
      </tr>
    </table>

<br>
<br>

    <table width="100%">
      <tr>
        <td><b>We accept payments from</b></td>
        <td><b>Our Banking</b></td>
      </tr>

      <tr>
        <td width="75%">
          <img width="70" height="50" src="../gambar/pic18.png">&nbsp;&nbsp;
          <img width="55" height="20" src="../gambar/pic19.png">&nbsp;&nbsp;
          <img width="85" height="30" src="../gambar/pic20.png">&nbsp;&nbsp;
          <img width="30" height="30" src="../gambar/pic21.png">&nbsp;&nbsp;
          <img width="40" height="30" src="../gambar/pic22.png">&nbsp;&nbsp;
          <img width="70" height="40" src="../gambar/pic23.png">&nbsp;&nbsp;
        </td>
        <td><img width="85" height="30" src="../gambar/pic20.png">&nbsp;&nbsp;<i>7144-555-38383888</i></td>
      </tr>
    </table>
  </div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-arrow-up"></span> Go to TOP</button>

<hr>

  <p>2017 © Erma Noviana | 2015230014. All Rights Reserved.</p>
  <p>Powered by: <a data-toggle="tooltip" data-placement="right" title="Click me!" href="index.php?content=home">Watchout.com</a></p>

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
