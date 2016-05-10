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
            <li><?php echo anchor('admincontroller/datamobil','Data Mobil')?></li>
            <li><?php echo anchor('admincontroller/dataverified','Konfirmasi')?></li>
            <li class="active"><?php echo anchor('admincontroller/datasewa','Data Penyewaan') ?></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <h2 class="sub-header">Data Detail Penyewaan</h2>

          <h3 class="sub-header">Detail Penyewa</h3>
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <td><strong>Atas Nama</strong></td><td><?php echo $user['nama'] ?></td>
              </tr>
              <tr>
                <td><strong>Email</strong></td><td><?php echo $user['email'] ?></td>
              </tr>
              <tr>
                <td><strong>No.Telp</strong></td><td><?php echo $user['no_telp'] ?></td>
              </tr>
              <tr>
                <td><strong>Alamat</strong></td><td><?php echo $user['alamat'] ?></td>
              </tr>
            </table>
          </div>

          <hr class="featurette-divider">

          <h3 class="sub-header">Detail Kendaraan</h3>
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <td><strong>Merk Mobil</strong></td><td><?php echo $order['merk_mobil'] ?></td>
              </tr>
              <tr>
                <td><strong>Platnomor</strong></td><td><?php echo $order['platnomor'] ?></td>
              </tr>
              <tr>
                <td><strong>Harga</strong></td><td><?php echo $order['harga'] ?></td>
              </tr>
              <tr>
                <td><strong>Total</strong></td><td><?php echo $order['total'] ?></td>
              </tr>
            </table>
          </div>

          <h3 class="sub-header">Konfirmasi Pembayaran</h3>
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <td><strong>No.Identitas</strong></td><td><?php echo $verified['no_identitas'] ?></td>
              </tr>
              <tr>
                <td><strong>Atas Nama</strong></td><td><?php echo $verified['atas_nama'] ?></td>
              </tr>
              <tr>
                <td><strong>Via Bank</strong></td><td><?php echo $verified['nama_bank'] ?></td>
              </tr>
              <tr>
                <td><strong>Jumlah Transfer</strong></td><td><?php echo $verified['jumlah_transfer'] ?></td>
              </tr>
              <tr>
                <td><strong>Jenis Transfer</strong></td><td><?php echo $verified['jenis_transfer'] ?></td>
              </tr>
              <tr>
                <td><strong>Tanggal Transfer</strong></td><td><?php echo $verified['tgl_transfer'] ?></td>
              </tr>
            </table>
          </div>

          <h3 class="sub-header">Status Konfirmasi</h3>
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <td><strong>Konfimasi</strong></td><td><?php echo $order['konfirmasi'] ?></td> <td><?php echo anchor('admincontroller/verified/'.$order['sewa_id'],'Verified',array('class'=>'btn btn-primary btn-xs')) ?></td>
              </tr>
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
