<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pemira Politeknik Harapan Bersama">
  <meta name="author" content="FREDY NUR APRIYANTO">
  <title><?php echo $title;?></title>
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
			<h3>TAHUN <?php echo date('Y');?></h3>
		</div>
		<div class="col-sm-3">
			<img src="<?php echo base_url('assets/images/bpm.png')?>" alt="Logo Pemira" id="logopemira">
		</div>
	  
	</header>

	<div id="content">
		<?php 
			if($user->prodi=='ti'){
				$prodi = 'D4 Teknik Informatika';
			} else if($user->prodi=='ak'){
				$prodi = 'D3 Akuntansi';
			} else if($user->prodi=='kb'){
				$prodi = 'D3 Kebidanan';
			} else if($user->prodi=='fm'){
				$prodi = 'D3 Farmasi';
			} else if($user->prodi=='kom'){
				$prodi = 'D3 Komputer';
			} else if($user->prodi=='tm'){
				$prodi = 'D3 Teknik Mesin';
			} else if($user->prodi=='te'){
				$prodi = 'D3 Teknik Elektronika';
			} else if($user->prodi=='ind'){
				$prodi = 'D3 Teknik Elektronika';
			} else if($user->prodi=='dkv'){
				$prodi = 'D3 Teknik Elektronika';
			} else if($user->prodi=='tkj'){
				$prodi = 'D3 Teknik Elektronika';
			} else{
				$prodi = '';
			}
		?>
		<h3>Pemilihan Ketua HIMAPRODI <?php echo $prodi;?></h3>
		<p class="text-center">(klik foto untuk memilih)</p>
		<div class="row">
			<?php if($kahim==null){ ?>
				<div class="col-md-12 text-center">
					<br />
					<p><i>Belum ada calon</i></p>
					<a href="<?php echo base_url('auth/logout')?>" class="btn btn-success">Logout</a>
				</div>
			<?php } else { 
				$no_urut = 1;
				if(sizeof($kahim)==1){
					foreach($kahim as $p){ ?>
						<div class="col-md-12">
							<h1 class="text-center"><?php echo $no_urut; $no_urut++;?></h1>
							<img src="<?php echo base_url('uploads/'.$p->picture);?>" alt="Foto Calon" onclick="functionPilih('<?php echo base_url('pemilih/pemilih/pilihanKahim/'.$p->id);?>')">
							<h3 class="text-center"><?php echo $p->nama;?></h3>
							<br />
							<h4 class="text-center">Visi :</h4>
							<p class="text-center visimisi"><?php echo $p->visi;?></p>
							<h4 class="text-center">Misi :</h4>
							<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-2 col-md-6 col-md-offset-3">
								<p class="visimisi">
									<?php echo nl2br($p->misi);?>
									<br /><br /><br />
								</p>
							</div>
						</div>
				<?php }
				} else if(sizeof($kahim)==3){
					foreach($kahim as $p){ ?>
						<div class="col-md-4">
							<h1 class="text-center"><?php echo $no_urut; $no_urut++;?></h1>
							<img src="<?php echo base_url('uploads/'.$p->picture);?>" alt="Foto Calon" onclick="functionPilih('<?php echo base_url('pemilih/pemilih/pilihanKahim/'.$p->id);?>')">
							<h3 class="text-center"><?php echo $p->nama;?></h3>
							<br />
							<h4 class="text-center">Visi :</h4>
							<p class="text-center visimisi"><?php echo $p->visi;?></p>
							<h4 class="text-center">Misi :</h4>
							<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">
								<p class="visimisi">
									<?php echo nl2br($p->misi);?>
									<br /><br /><br />
								</p>
							</div>
						</div>
				<?php } 
				} else if(sizeof($kahim)==4){
					foreach($kahim as $p){ ?>
						<div class="col-md-5 col-md-offset-1" style="height:770px;">
							<h1 class="text-center"><?php echo $no_urut; $no_urut++;?></h1>
							<img src="<?php echo base_url('uploads/'.$p->picture);?>" alt="Foto Calon" onclick="functionPilih('<?php echo base_url('pemilih/pemilih/pilihanKahim/'.$p->id);?>')">
							<h3 class="text-center"><?php echo $p->nama;?></h3>
							<br />
							<h4 class="text-center">Visi :</h4>
							<p class="text-center visimisi"><?php echo $p->visi;?></p>
							<h4 class="text-center">Misi :</h4>
							<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">
								<p class="visimisi">
									<?php echo nl2br($p->misi);?>
									<br /><br /><br />
								</p>
							</div>
						</div>
			<?php 	}
				} else { 
					foreach($kahim as $p){ ?>
						<div class="col-md-5 col-md-offset-1">
							<h1 class="text-center"><?php echo $no_urut; $no_urut++;?></h1>
							<img src="<?php echo base_url('uploads/'.$p->picture);?>" alt="Foto Calon" onclick="functionPilih('<?php echo base_url('pemilih/pemilih/pilihanKahim/'.$p->id);?>')">
							<h3 class="text-center"><?php echo $p->nama;?></h3>
							<br />
							<h4 class="text-center">Visi :</h4>
							<p class="text-center visimisi"><?php echo $p->visi;?></p>
							<h4 class="text-center">Misi :</h4>
							<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">
								<p class="visimisi">
									<?php echo nl2br($p->misi);?>
									<br /><br /><br />
								</p>
							</div>
						</div>

			<?php 	} 
				}
			} ?>
		</div>
	</div>

	<footer>
	    <p class="text-center">&copy; <?php echo date('Y');?> BPM KM PHB Developed by <a href="http://smitcomunity.com/" target="__blank" style="color:#000;">SMIT TEAM</p>
	</footer>

</body>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert2.min.js');?>"></script>
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
