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

<body>

	<header class="row">
		<div class="col-sm-3">
			<img src="<?php echo base_url('assets/images/poltek.png')?>" alt="Logo Poltek" id="logopoltek">
		</div>
		<div class="col-sm-6">
			<h3>PEMILIHAN RAYA</h3>
			<h3>POLITEKNIK HARAPAN BERSAMA</h3>
			<h3>TAHUN 2017</h3>
		</div>
		<div class="col-sm-3">
			<img src="<?php echo base_url('assets/images/bpm.png')?>" alt="Logo BPM" id="logopemira">
		</div>
	  
	</header>

	<div id="content">
		<h3>Pemilihan Ketua BEM dan Wakil Ketua BEM</h3>
		<p class="text-center">(klik foto untuk memilih)</p>
		<div class="row">
			<div class="col-md-1"></div>
			<?php if($presma==null){ ?>
				<div class="col-md-5">
					<img src="<?php echo base_url('assets/images/calon1.png');?>" alt="Foto Calon">
				</div>
				<div class="col-md-5">
					<img src="<?php echo base_url('assets/images/calon.png');?>" alt="Foto Calon">
				</div>
			<?php } else { 
				foreach($presma as $p){ ?>
					<div class="col-md-5">
						<img src="<?php echo base_url('uploads/'.$p->picture);?>" alt="Foto Calon" onclick="functionPilih('<?php echo base_url('pemilih/pemilih/pilihanPresma/'.$p->id);?>')">
						<h3 class="text-center"><?php echo $p->nama_pres." & ".$p->nama_wapres?></h3>
						<br />
						<h4 class="text-center">Visi :</h4>
						<p class="text-center visimisi"><?php echo $p->visi;?></p>
						<h4 class="text-center">Misi :</h4>
						<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">
							<p class="visimisi">
								<?php echo nl2br($p->misi);?>
							</p>
						</div>
					</div>
			<?php } 
				} ?>
		</div>
	</div>

	<footer>
	    <p class="text-center">&copy; 2017 BPM KM PHB Developed by <a href="http://smitcomunity.com/" target="__blank" style="color:#000;">SMIT TEAM</p>
	</footer>

</body>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert2.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/main.js');?>"></script>
<script>
	function functionPilih(url){
		swal({
		  title: 'Apakah Anda Yakin?',
		  text: "Anda akan memilih calon tersebut!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Ya, Pilih!',
		  cancelButtonText: 'Tidak, Batalkan!',
		  confirmButtonClass: 'btn btn-success',
		  cancelButtonClass: 'btn btn-danger',
		  buttonsStyling: false
		}).then(function () {
			swal("Berhasil!", "Calon Berhasil Anda Pilih!", "success");
			window.location = url;

		}, function (dismiss) {
		  // dismiss can be 'cancel', 'overlay',
		  // 'close', and 'timer'
		  if (dismiss === 'cancel') {
			swal("Batal", "Batal memilih!", "error")
		  }

		});
	}
</script>

</html>
