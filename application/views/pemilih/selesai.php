<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pemira Politeknik Harapan Bersama">
  <meta name="author" content="FREDY NUR APRIYANTO">
  <title><?php echo $title;?></title>
  <link href="<?php echo base_url('assets/css/reset.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/sweetalert/sweetalert2.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/pemilih.css');?>" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="<?php echo base_url('assets/js/html5shiv.js');?>"></script>
    <script src="<?php echo base_url('assets/js/respond.min.js');?>"></script>
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/pemilu.ico');?>">
</head><!--/head-->

<body style="background-image:url('<?php echo base_url('assets/images/selesai.jpg');?>');background-size: cover;">
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2 text-center" style="background-color: rgba(0,0,0,0.3);height:300px;margin-top:15%;">
			<h2 style="color:#fff;">Terima Kasih Atas Partisipasinya!</h2>
			<br />
			<p style="font-family: 'Times New Roman'; color:#fff;font-size: 20px;">Satu suara dari Anda ikut menentukan perubahan di masa depan</p><br />
			<a href="<?php echo base_url('pemilih/pemilih/logout');?>" class="btn btn-success"><i class="fa fa-sign-out"></i> KELUAR</a>
			<br /><br /><br /><br /><br />
		    <p class="text-center" style="color:#fff;font-family: 'Times New Roman';">&copy; <?php echo date('Y');?> BPM KM PHB Developed by SMIT TEAM</p>
		</div>
	</div>

</body>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert2.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/main.js');?>"></script>

</html>
