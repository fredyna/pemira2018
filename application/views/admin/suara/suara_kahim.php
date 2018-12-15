<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	
	<div class="sidebar-header">
		<i class="fa fa-user"></i>
		<span><?php echo $user->username;?></span>
		<hr>
	</div>
	<ul class="nav menu">
		<li><a href="<?php echo base_url('admin/c_admin');?>"><i class="fa fa-home"></i> Dashboard</a></li>
		<li><a href="<?php echo base_url('admin/petugas/');?>"><i class="fa fa-users"></i> Petugas</a></li>		

		<li class="parent ">
			<a data-toggle="collapse" href="#data-pemilih">
				<span><i class="fa fa-list-alt"></i></span>
				Data Pemilih <span><i class="fa fa-chevron-circle-down"></i></span>
			</a>
			<ul class="children collapse" id="data-pemilih">
				<li>
					<a class="" href="<?php echo base_url('admin/pemilih/index/ti/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
							D4 Teknik Informatika
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('admin/pemilih/index/ak/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
							D3 Akuntansi
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('admin/pemilih/index/kb/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
							D3 Kebidanan
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('admin/pemilih/index/fm/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
							D3 Farmasi
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('admin/pemilih/index/kom/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
							D3 Teknik Komputer
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('admin/pemilih/index/tm/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
							D3 Teknik Mesin
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('admin/pemilih/index/te/');?>">
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

		<li class="parent ">
			<a data-toggle="collapse" href="#suara">
				<span><i class="fa fa-bar-chart"></i></span>
				Suara <span><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span>
			</a>
			<ul class="children collapse in" id="suara">
				<li class="">
					<a class="" href="<?php echo base_url('admin/suara/presma/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
							Suara Presma
					</a>
				</li>
				<li>
					<a class="active" href="<?php echo base_url('admin/suara/kahim/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
							Suara Kahim
					</a>
				</li>
			</ul>
		</li>

		<li><a href="<?php echo base_url('admin/laporan');?>"><i class="fa fa-file"></i> Laporan</a></li>
		<li><a href="<?php echo base_url('admin/c_admin/settings');?>"><i class="fa fa-cog"></i> Settings</a></li>	
		<li role="presentation" class="divider"></li>
		
	</ul>
	<div class="attribution">Powered by <a href="http://fb.com/fredy.nurapriyanto">Fredd</a></div>
</div><!--/.sidebar-->
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-bar-chart"></i></a></li>
			<li class="active">Suara Kahim</li>
		</ol>
	</div><!--/.row-->        
	
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Suara Kahim</h2>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Suara Kahim D4 Teknik Informatika</div>
				<div class="panel-body">
					<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
					<script>
						var chart = new CanvasJS.Chart("chartContainer1", {
							animationEnabled: true,
							theme: "light1", // "light1", "light2", "dark1", "dark2"
							title:{
								text: "Hasil Perhitungan"
							},
							axisY: {
								title: "Banyak Suara"
							},
							data: [{        
								type: "column",  
								showInLegend: true, 
								legendMarkerColor: "white",
								legendText: "Calon Kahim 2017",
								dataPoints: [      
									<?php foreach($suara_ti as $s){ ?>
										{y : <?php echo $s->suara;?>, label:"<?php echo $s->nama;?>"},
									<?php } ?>
								]
							}]
						});
						chart.render();
					</script>

				</div>
			</div>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Suara Kahim D3 Akuntansi</div>
				<div class="panel-body">
					<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
					<script>
						var chart = new CanvasJS.Chart("chartContainer2", {
							animationEnabled: true,
							theme: "light1", // "light1", "light2", "dark1", "dark2"
							title:{
								text: "Hasil Perhitungan"
							},
							axisY: {
								title: "Banyak Suara"
							},
							data: [{        
								type: "column",  
								showInLegend: true, 
								legendMarkerColor: "white",
								legendText: "Calon Kahim 2017",
								dataPoints: [      
									<?php foreach($suara_ak as $s){ ?>
										{y : <?php echo $s->suara;?>, label:"<?php echo $s->nama;?>"},
									<?php } ?>
								]
							}]
						});
						chart.render();
					</script>

				</div>
			</div>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Suara Kahim D3 Kebidanan</div>
				<div class="panel-body">
					<div id="chartContainer3" style="height: 370px; width: 100%;"></div>
					<script>
						var chart = new CanvasJS.Chart("chartContainer3", {
							animationEnabled: true,
							theme: "light1", // "light1", "light2", "dark1", "dark2"
							title:{
								text: "Hasil Perhitungan"
							},
							axisY: {
								title: "Banyak Suara"
							},
							data: [{        
								type: "column",  
								showInLegend: true, 
								legendMarkerColor: "white",
								legendText: "Calon Kahim 2017",
								dataPoints: [      
									<?php foreach($suara_kb as $s){ ?>
										{y : <?php echo $s->suara;?>, label:"<?php echo $s->nama;?>"},
									<?php } ?>
								]
							}]
						});
						chart.render();
					</script>

				</div>
			</div>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Suara Kahim D3 Farmasi</div>
				<div class="panel-body">
					<div id="chartContainer4" style="height: 370px; width: 100%;"></div>
					<script>
						var chart = new CanvasJS.Chart("chartContainer4", {
							animationEnabled: true,
							theme: "light1", // "light1", "light2", "dark1", "dark2"
							title:{
								text: "Hasil Perhitungan"
							},
							axisY: {
								title: "Banyak Suara"
							},
							data: [{        
								type: "column",  
								showInLegend: true, 
								legendMarkerColor: "white",
								legendText: "Calon Kahim 2017",
								dataPoints: [      
									<?php foreach($suara_fm as $s){ ?>
										{y : <?php echo $s->suara;?>, label:"<?php echo $s->nama;?>"},
									<?php } ?>
								]
							}]
						});
						chart.render();
					</script>

				</div>
			</div>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Suara Kahim D3 Komputer</div>
				<div class="panel-body">
					<div id="chartContainer5" style="height: 370px; width: 100%;"></div>
					<script>
						var chart = new CanvasJS.Chart("chartContainer5", {
							animationEnabled: true,
							theme: "light1", // "light1", "light2", "dark1", "dark2"
							title:{
								text: "Hasil Perhitungan"
							},
							axisY: {
								title: "Banyak Suara"
							},
							data: [{        
								type: "column",  
								showInLegend: true, 
								legendMarkerColor: "white",
								legendText: "Calon Kahim 2017",
								dataPoints: [      
									<?php foreach($suara_kom as $s){ ?>
										{y : <?php echo $s->suara;?>, label:"<?php echo $s->nama;?>"},
									<?php } ?>
								]
							}]
						});
						chart.render();
					</script>

				</div>
			</div>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Suara Kahim D3 Teknik Mesin</div>
				<div class="panel-body">
					<div id="chartContainer6" style="height: 370px; width: 100%;"></div>
					<script>
						var chart = new CanvasJS.Chart("chartContainer6", {
							animationEnabled: true,
							theme: "light1", // "light1", "light2", "dark1", "dark2"
							title:{
								text: "Hasil Perhitungan"
							},
							axisY: {
								title: "Banyak Suara"
							},
							data: [{        
								type: "column",  
								showInLegend: true, 
								legendMarkerColor: "white",
								legendText: "Calon Kahim 2017",
								dataPoints: [      
									<?php foreach($suara_tm as $s){ ?>
										{y : <?php echo $s->suara;?>, label:"<?php echo $s->nama;?>"},
									<?php } ?>
								]
							}]
						});
						chart.render();
					</script>

				</div>
			</div>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Suara Kahim D3 Teknik Elektro</div>
				<div class="panel-body">
					<div id="chartContainer7" style="height: 370px; width: 100%;"></div>
					<script>
						var chart = new CanvasJS.Chart("chartContainer7", {
							animationEnabled: true,
							theme: "light1", // "light1", "light2", "dark1", "dark2"
							title:{
								text: "Hasil Perhitungan"
							},
							axisY: {
								title: "Banyak Suara"
							},
							data: [{        
								type: "column",  
								showInLegend: true, 
								legendMarkerColor: "white",
								legendText: "Calon Kahim 2017",
								dataPoints: [      
									<?php foreach($suara_te as $s){ ?>
										{y : <?php echo $s->suara;?>, label:"<?php echo $s->nama;?>"},
									<?php } ?>
								]
							}]
						});
						chart.render();
					</script>

				</div>
			</div>
		</div>
	</div><!--/.row-->

</div>	<!--/.main-->
<script>

	$(window).on('resize', function () {
		if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
	})
	$(window).on('resize', function () {
		if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
	})
</script>


