<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="gambar/jam1.jpg">
      </div>
      <div class="item">
        <img src="gambar/jam2.jpg">      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <marquee>
    <?php
      $file = "note/note1.txt";
      $fileopen = fopen($file, 'r') or die ("Cannot read file!");
      while (!feof($fileopen))
      {
        $bariskalimat = fgets($fileopen, 1024);
        echo $bariskalimat."<br>";
      }
    ?>
  </marquee>
  
<br>

<div class="row">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="gambar/jam3.jpg" class="img-responsive" style="width:100%" alt="Image">
          <div class="caption">
            <table width="100%" height="60">
              <tr>
                <td align="left"><span class="label label-primary">New</span> <b><a href="index.php?content=man" data-toggle="tooltip" data-placement="top" title="Click Me!">Yazole</a></b> | <i>Men letter wrist watch</i></td>
                <td align="right"><sub><strike>Rp.1.300.000,-</strike></sub></td>
              </tr>
              <tr>
                <td align="left"><b>Rp.1.100.000,-</b></td>
                <td align="right"><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">Buy</button></td>
              </tr>
            </table>
          </div>
      </div>
      
<br>
      
      <div class="thumbnail">
        <img src="gambar/jam4.jpg" class="img-responsive" style="width:100%" alt="Image">
          <div class="caption">
            <table width="100%" height="60">
              <tr>
                <td align="left"><span class="label label-danger">Sale</span> <b><a href="index.php?content=woman" data-toggle="tooltip" data-placement="top" title="Click Me!">Geneva</a></b> | <i>Analog strap leather</i></td>
                <td align="right"><sub><strike>Rp.900.000,-</strike></sub></td>
              </tr>
              <tr>
                <td align="left"><b>Rp.300.000,-</b></td>
                <td align="right"><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">Buy</button></td>
              </tr>
            </table>
          </div>
      </div>
    </div>
  
    <div class="col-sm-4"> 
      <div class="thumbnail">
        <img src="gambar/jam5.jpg" class="img-responsive" style="width:100%" alt="Image">
          <div class="caption">
            <table width="100%" height="60">
              <tr>
                <td align="left"><b><a href="index.php?content=woman" data-toggle="tooltip" data-placement="top" title="Click Me!">Casio</a></b> | <i>LTP-1170N-9ARDF Gold</i></td>
                <td align="right"></td>
              </tr>
              <tr>
                <td align="left"><b>Rp.700.000,-</b></td>
                <td align="right"><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">Buy</button></td>
              </tr>
            </table>
          </div>
      </div>

<br>

      <div class="thumbnail">
        <img src="gambar/jam6.jpg" class="img-responsive" style="width:100%" alt="Image">
          <div class="caption">
            <table width="100%" height="60">
              <tr>
                <td align="left"><span class="label label-warning">Premium</span> <b><a href="index.php?content=man" data-toggle="tooltip" data-placement="top" title="Click Me!">JEEP</a></b> | <i>JPW60309</i></td>
                <td align="right"></td>
              </tr>
              <tr>
                <td align="left"><b>Rp.3.250.000,-</b></td>
                <td align="right"><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">Buy</button></td>
              </tr>
            </table>
          </div>
      </div>
</div>
    
  <div class="col-sm-2">
    <img src="gambar/logo.jpg" class="img-responsive" style="width:100%" alt="Image">
  </div>
  <div class="col-sm-2">
    <img src="gambar/pic1.jpg" class="img-responsive" style="width:100%" alt="Image"><br>
  </div>

  <div class="col-sm-4">
    <div class="well">
      <p>Gonna be a while? Grab a watch! With Watchout.com you can get your own watch. Have a break, have a watch.</p>
    </div>
    <div class="well">
      <p>
        <?php
          $file = "note/note2.txt";
          $fileopen = fopen($file, 'r') or die ("Cannot read file!");
          while (!feof($fileopen))
          {
            $bariskalimat = fgets($fileopen, 1024);
            echo $bariskalimat."<br>";
          }
        ?>
      </p>
    </div>
    <div class="well">
      <p>
        <?php
          $file = "note/note3.txt";
          $fileopen = fopen($file, 'r') or die ("Cannot read file!");
          while (!feof($fileopen))
          {
            $bariskalimat = fgets($fileopen, 1024);
            echo $bariskalimat."<br>";
          }
        ?>
      </p>
    </div>
  </div>
  </div>
  
  <hr>
  
  <div class="row">
    <div class="col-sm-1">
      <img src="gambar/pic2.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-1">
      <img src="gambar/pic3.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-1">
      <img src="gambar/pic4.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-1">
      <img src="gambar/pic5.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-1">
      <img src="gambar/pic6.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-1">
      <img src="gambar/pic7.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-1">
      <img src="gambar/pic8.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-1">
      <img src="gambar/pic9.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p><i>Don't worry, your satisfaction is our top priority!</i></p>
    </div>
  </div>
</div>


      
    </div>
  </div>