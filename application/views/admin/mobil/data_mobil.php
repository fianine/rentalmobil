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

    <title>Dashboard Tangerang Rent Car</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url() ?>public/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>public/admin/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url() ?>public/admin/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><?php echo anchor('AuthController/logout','Logout',array('class'=>'logout'));?></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><?php echo anchor('admincontroller/dashboard','Dashboard')?></li>
            <li><?php echo anchor('admincontroller/datamember','Data Member')?></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><?php echo anchor('admincontroller/datamobil','Data Mobil')?></li>
            <li><?php echo anchor('admincontroller/dataverified','Konfirmasi')?></li>
            <li><?php echo anchor('admincontroller/datasewa','Data Penyewaan') ?></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <h2 class="sub-header">Data Mobil</h2>
          <div>
            <?php echo anchor('admincontroller/tambahdatamobil','Tambah Data Mobil',array('class'=>'btn btn-primary'))?>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Merk Mobil</th>
                  <th>Tipe</th>
                  <th>Tahun</th>
                  <th>Kapasitas</th>
                  <th>Harga Sewa</th>
                  <th>Platnomor</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
                <?php if($lihatdatamobil): ?>
                  <?php $no=1; foreach($lihatdatamobil as $d): ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $d['merk_mobil'] ?></td>
                  <td><?php echo $d['tipe_mobil'] ?></td>
                  <td><?php echo $d['tahun'] ?></td>
                  <td><?php echo $d['kapasitas'] ?></td>
                  <td><?php echo $d['harga'] ?></td>
                  <td><?php echo $d['platnomor'] ?></td>
                  <td><?php echo anchor('admincontroller/hapusmobil/' . $d['mobil_id'],'Hapus',array('class'=>'btn btn-danger btn-xs')) ?></td>
                </tr>
                <?php $no++; endforeach; ?>
              <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() ?>public/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>public/assets/js/bootstrap.min.js"></script>
</html>
