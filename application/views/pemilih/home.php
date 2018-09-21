<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PEMIRA KM PHB">
  <meta name="author" content="FREDY NUR APRIYANTO">
  <title><?php echo $title;?></title>
  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/presets/preset1.css');?>" rel="stylesheet">  
  <link href="<?php echo base_url('assets/css/sweetalert.css');?>">
  <link href="<?php echo base_url('assets/css/home.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/responsive.css');?>" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="<?php echo base_url('assets/js/html5shiv.js');?>"></script>
    <script src="<?php echo base_url('assets/js/respond.min.js');?>"></script>
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/pemilu.ico');?>">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header>
    <div id="home-slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(<?php echo base_url('assets/images/slider/1.png');?>)">
          
          <img class="logo-poltek" src="<?php echo base_url('assets/images/poltek.png')?>" alt="Logo BPM" style="width:80px;height:80px;margin-top:7px;margin-left: 10px;padding-top: 0; position: fixed;">
          <img class="logo-bpm" src="<?php echo base_url('assets/images/bpm.png')?>" alt="Logo BPM" style="width:70px;height:70px;margin-top:10px;margin-left: 90px;padding-top: 0; position: fixed;">
          <img class="center-block animated fadeInDownBig" src="<?php echo base_url('assets/images/pemilu.png');?>" alt="Pemilihan Raya" />
          <div class="caption">
            <h1 class="animated fadeInLeftBig">PEMILIHAN <span>RAYA</span></h1>
            <p class="animated fadeInRightBig"><span>POLITEKNIK HARAPAN BERSAMA TAHUN 2017</span></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#login" data-toggle="modal"><i class="fa fa-sign-in"></i> Login</a>
          </div>
        </div>

        <div class="item" style="background-image: url(<?php echo base_url('assets/images/slider/3.jpg');?>)">
          <img class="logo-poltek" src="<?php echo base_url('assets/images/poltek.png')?>" alt="Logo BPM" style="width:80px;height:80px;margin-top:7px;margin-left: 10px;padding-top: 0; position: fixed;">
          <img class="logo-bpm" src="<?php echo base_url('assets/images/bpm.png')?>" alt="Logo BPM" style="width:70px;height:70px;margin-top:10px;margin-left: 90px;padding-top: 0; position: fixed;">
          <img class="center-block animated fadeInDownBig" src="<?php echo base_url('assets/images/pemilu.png');?>" alt="Ayo Memilih" />
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Ayo <span>Memilih</span></h1>
            <p class="animated fadeInRightBig"><span>PEMILIHAN RAYA KM PHB TAHUN 2017</span></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#login" data-toggle="modal"><i class="fa fa-sign-in"></i> Login</a>
          </div>
        </div>

      </div>

      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#"><i class="fa fa-hand-o-up"></i></a>

    </div><!--/#home-slider-->

    <!--Modal-->
    <div class="modal fade" id="login" role="modal">
      <div class="modal-dialog modal-xs">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center">Halaman Login</h4>
          </div>

          <div class="modal-body">
            <div class="center-block">
              <img src="<?php echo base_url('assets/images/pemilu.png');?>" alt="Poltek Harber" />

              <?php echo form_open('auth/login');?>
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Username or NIM" autofocus="autofocus">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-info form-control" name="submit" value="Login">
              <?php echo form_close();?>

            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-small" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  </header><!--/#home-->

  <footer>
    <p>&copy; 2017 BPM KM PHB Developed by <a href="http://smitcomunity.com/" target="__blank" style="color:white;">SMIT TEAM</p>
  </footer>

</body>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/sweetalert.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/main.js');?>"></script>

</html>
