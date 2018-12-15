<div class="col-sm-12 main">       
	
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
								legendText: "Calon Kahim <?php echo date('Y');?>",
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
								legendText: "Calon Kahim <?php echo date('Y');?>",
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
								legendText: "Calon Kahim <?php echo date('Y');?>",
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
								legendText: "Calon Kahim <?php echo date('Y');?>",
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
								legendText: "Calon Kahim <?php echo date('Y');?>",
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
								legendText: "Calon Kahim <?php echo date('Y');?>",
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
								legendText: "Calon Kahim <?php echo date('Y')?>",
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


