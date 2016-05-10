<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Tangerang Rent Car</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/assets/css/carousel.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url() ?>public/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url() ?>public/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- NAVBAR
  ================================================== -->
    <body>
      <div class="navbar-wrapper">
        <div class="container">

          <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Tangerang Rent Car</a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><?php echo anchor('membercontroller/home','Beranda')?></li>
                  <li><?php echo anchor('membercontroller/kendaraan','Kendaraan')?></li>
                  <li><a href="#">Layanan</a></li>
                  <li><a href="#about">Persyaratan</a></li>
                  <li><a href="#contact">Reservasi</a></li>
                </ul>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><?php echo anchor('membercontroller/dashboard','Dashboard')?></li>
                  </ul>
                </div><!--/.navbar-collapse -->
              </div>
            </div>
          </nav>
        </div>
      </div>


      <!-- Carousel
      ================================================== -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide" src="<?php echo base_url() ?>public/assets/img/1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Pilihan Terbaik Untuk Menyewa Mobil Di Tangerang</h1>
                <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="second-slide" src="<?php echo base_url() ?>public/assets/img/2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="third-slide" src="<?php echo base_url() ?>public/assets/img/3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="fourth-slide" src="<?php echo base_url() ?>public/assets/img/4.jpg" alt="Fourth slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><!-- /.carousel -->


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="">
            <img class="img-responsive" src="<?php echo base_url() ?>public/assets/upload/<?php echo $showDetail['gambar'] ?>" alt="<?php echo base_url() ?>public/assets/upload/<?php echo $showDetail['gambar'] ?>" width="500px"/>
          </div>

          <div class="table-responsive" style="float:left;margin-left: 548px;margin-top: -298px;">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Merk</th>
                  <th>Tipe</th>
                  <th>Tahun</th>
                  <th>Kapasitas</th>
                  <th>Harga Sewa</th>
                  <th>Platnomor</th>
                  <th>Booking</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $showDetail['merk_mobil'] ?></td>
                  <td><?php echo $showDetail['tipe_mobil'] ?></td>
                  <td><?php echo $showDetail['tahun'] ?></td>
                  <td><?php echo $showDetail['kapasitas'] ?></td>
                  <td><?php echo $showDetail['harga'] ?></td>
                  <td><?php echo $showDetail['platnomor'] ?></td>
                  <td><?php echo anchor('membercontroller/checkout/'.$showDetail['mobil_id'],'Sewa',array('class'=>'btn btn-primary btn-xs')) ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div><!-- /.row -->
        <hr class="featurette-divider">
        <!-- FOOTER -->
        <footer>
          <p class="pull-right"><a href="#">Back to top</a></p>
          <p>&copy; 2015 Alfiyana Putra. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot; <a href="#">About</a> &middot; <a href="#">Contact</a></p>
        </footer>

      </div><!-- /.container -->

     <script src="<?php echo base_url() ?>public/assets/js/jquery.min.js"></script>
     <script src="<?php echo base_url() ?>public/assets/js/bootstrap.min.js"></script>

</body>
</html>
