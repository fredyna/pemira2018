<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><span>PEMIRA</span>PHB 2017</a>
			<ul class="user-menu">
				<li class="dropdown pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><i class="fa fa-user"></i> <?php echo $user->username;?><span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo base_url('petugas/c_petugas/settings'); ?>"><i class="fa fa-cog"></i> Settings</a></li>
						<li><a href="<?php echo base_url('auth/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
						
	</div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
	<div class="sidebar-header">
		<i class="fa fa-user"></i>
		<span><?php echo $user->username;?></span>
		<hr>
	</div>
	<ul class="nav menu">
		<li class="active"><a href="<?php echo base_url('petugas/home');?>"><i class="fa fa-home"></i> Dashboard</a></li>		

		<li class="parent ">
			<a data-toggle="collapse" href="#data-pemilih">
				<span><i class="fa fa-list-alt"></i></span>
				Data Pemilih <span><i class="fa fa-chevron-circle-down"></i></span>
			</a>
			<ul class="children collapse" id="data-pemilih">
				<li>
					<a class="" href="<?php echo base_url('admin/pemilih/ti/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
						 D4 Teknik Informatika
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('admin/pemilih/ak/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
						 D3 Akuntansi
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('admin/pemilih/kb/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
						 D3 Kebidanan
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('admin/pemilih/fm/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
						 D3 Farmasi
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('admin/pemilih/kom/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
						 D3 Komputer
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('admin/pemilih/tm/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
						 D3 Teknik Mesin
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('admin/pemilih/te/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
							D3 Teknik Elektro
					</a>
				</li>
			</ul>
		</li>

		<li class="parent ">
			<a data-toggle="collapse" href="#calon">
				<span><i class="fa fa-user"></i></span>
				Data Calon <span><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span>
			</a>
			<ul class="children collapse" id="calon">
				<li>
					<a class="" href="<?php echo base_url('admin/calon/presma/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
						 Calon Presma
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('admin/calon/kahim/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
						 Calon Kahim
					</a>
				</li>
			</ul>
		</li>

		<li role="presentation" class="divider"></li>
		
	</ul>
	<div class="attribution">Powered by <a href="http://fb.com/fredy.nurapriyanto">Fredd</a></div>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li class="active">Dashboard</li>
		</ol>
	</div><!--/.row-->        
	
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Welcome Page</h2>
			<p>Selamat Datang di Halaman Web Petugas <span class="bold">PEMIRA Politeknik Harapan Bersama</span></p>
    		<p class="paragraf">Sistem PEMIRA PHB adalah sistem yang digunakan untuk pemilihan pasangan calon ketua dan wakil ketua BEM dan juga pemilihan ketua Himaprodi di Politeknik Harapan Bersama secara online. Sistem ini bertujuan untuk memudahkan dalam Pemilihan Raya yang rutin setiap tahun diadakan. Selain kemudahan dalam proses pemilihan, sistem ini juga memudahkan dalam proses perhitungan suara dengan tepat dan cepat.</p>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="panel panel-blue panel-widget ">
				<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<i class="fa fa-users"></i>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large">Data Calon</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="panel panel-orange panel-widget">
				<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<i class="fa fa-list-alt"></i>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large">Data Pemilih</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>	<!--/.main-->
<script>

	$(window).on('resize', function () {
	  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
	})
	$(window).on('resize', function () {
	  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
	})
</script>


