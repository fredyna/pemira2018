 <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
	<div class="sidebar-header">
		<i class="fa fa-user"></i>
		<span><?php echo $user->username;?></span>
		<hr>
	</div>
	<ul class="nav menu">
	<?php if($group->id==1){ ?>
		<li><a href="<?php echo base_url('admin/c_admin');?>"><i class="fa fa-home"></i> Dashboard</a></li>
		<li  class=""><a href="<?php echo base_url('admin/petugas/');?>"><i class="fa fa-users"></i> Petugas</a></li>
	<?php } else { ?>
		<li class=""><a href="<?php echo base_url('petugas/home');?>"><i class="fa fa-home"></i> Dashboard</a></li>
	<?php } ?>
				

		<li class="parent ">
			<a data-toggle="collapse" href="#data-pemilih">
				<span><i class="fa fa-list-alt"></i></span>
				Data Pemilih <span><i class="fa fa-chevron-circle-down"></i></span>
			</a>
			<ul class="children collapse in" id="data-pemilih">
				<li>
					<?php
						if($prodi == 'ti'){ ?>
							<a class="active" href="<?php echo base_url('admin/pemilih/index/ti');?>">
								<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
								 D4 Teknik Informatika
							</a>
					<?php } else { ?>
							<a href="<?php echo base_url('admin/pemilih/index/ti');?>">
								<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
								 D4 Teknik Informatika
							</a>
					<?php }	?>
				</li>
				<li>
					<?php
						if($prodi == 'ak'){ ?>
							<a class="active" href="<?php echo base_url('admin/pemilih/index/ak');?>">
								<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
								 D3 Akuntansi
							</a>
					<?php } else { ?>
							<a href="<?php echo base_url('admin/pemilih/index/ak');?>">
								<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
								 D3 Akuntansi
							</a>
					<?php } ?>
				</li>
				<li>
					<?php
						if($prodi == 'kb'){ ?>
							<a class="active" href="<?php echo base_url('admin/pemilih/index/kb');?>">
								<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
								 D3 Kebidanan
							</a>
					<?php } else { ?>
							<a href="<?php echo base_url('admin/pemilih/index/kb');?>">
								<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
								 D3 Kebidanan
							</a>
					<?php } ?>
				</li>
				<li>
					<?php
						if($prodi == 'fm'){ ?>
							<a class="active" href="<?php echo base_url('admin/pemilih/index/fm');?>">
								<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
								 D3 Farmasi
							</a>
					<?php } else { ?>
							<a href="<?php echo base_url('admin/pemilih/index/fm');?>">
								<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
								 D3 Farmasi
							</a>
					<?php } ?>
				</li>
				<li>
					<?php
						if($prodi == 'kom'){ ?>
							<a class="active" href="<?php echo base_url('admin/pemilih/index/kom');?>">
								<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
								 D3 Teknik Komputer
							</a>
					<?php } else { ?>
							<a href="<?php echo base_url('admin/pemilih/index/kom');?>">
								<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
								 D3 Teknik Komputer
							</a>
					<?php } ?>
				</li>
				<li>
					<?php
						if($prodi == 'tm'){ ?>
							<a class="active" href="<?php echo base_url('admin/pemilih/index/tm');?>">
								<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
								 D3 Teknik Mesin
							</a>
					<?php } else { ?>
							<a href="<?php echo base_url('admin/pemilih/index/tm');?>">
								<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
								 D3 Teknik Mesin
							</a>
					<?php } ?>
				</li>
				<li>
					<?php
						if($prodi == 'te' || $prodi == 'ind' || $prodi == 'dkv' || $prodi == 'tkj'){ ?>
							<a class="active" href="<?php echo base_url('admin/pemilih/index/te');?>">
								<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
								 D3 Teknik Elektro
							</a>
					<?php } else { ?>
							<a href="<?php echo base_url('admin/pemilih/index/te');?>">
								<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
								 D3 Teknik Elektro
							</a>
					<?php } ?>
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

	<?php if($group->id==1){ ?> 
		<li class="parent ">
			<a data-toggle="collapse" href="#suara">
				<span><i class="fa fa-bar-chart"></i></span>
				Suara <span><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span>
			</a>
			<ul class="children collapse" id="suara">
				<li>
					<a class="" href="<?php echo base_url('admin/suara/presma/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
						 Suara Presma
					</a>
				</li>
				<li>
					<a class="" href="<?php echo base_url('admin/suara/kahim/');?>">
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
						 Suara Kahim
					</a>
				</li>
			</ul>
		</li>

		<li><a href="<?php echo base_url('admin/laporan');?>"><i class="fa fa-file"></i> Laporan</a></li>
		<li><a href="<?php echo base_url('admin/c_admin/settings');?>"><i class="fa fa-cog"></i> Settings</a></li>
	<?php } ?>	
		<li role="presentation" class="divider"></li>
		
	</ul>
	<div class="attribution">Powered by <a href="http://fb.com/fredy.nurapriyanto">SMIT Team</a></div>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-list-alt"></i></a></li>
			<li>Pemilih</li>
			<li class="active"><?php echo $nama_prodi;?></li>
		</ol>
	</div><!--/.row-->        
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $nama_prodi;?></h1>
		</div>
		<?php if($this->session->flashdata('info-umum')): ?>
				<div class="alert alert-warning">
				<?php echo $this->session->flashdata('info-umum'); ?>
			</div>
		<?php endif; ?>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
		      <div class="panel-heading">Jumlah Kelas</div>
		      <div class="panel-body">
		      	<div class="row">
		      		<div class="col-xs-12 col-md-8 col-md-offset-2">
		      		<?php if($this->session->flashdata('info')): ?>
		      				<div class="alert alert-warning">
		    					<?php echo $this->session->flashdata('info'); ?>
		    				</div>
		    			<?php endif; ?>
			      		<?php
						$name = array(
							'name'=>'addKelas',
							'class'=>'form-inline'
							); 
						echo form_open('admin/pemilih/addKelas/'.$prodi, $name);
						?>
							<div class="form-group">
						    	<label for="smt">Semester</label>
						    	<select class="fomr-control" placeholder="Semester" name="smt">
						    		<option value="1">1</option>
						    		<option value="3">3</option>
						    		<option value="5">5</option>
						    		<?php 
						    			if($prodi == 'ti'){ 
						    				echo '<option value="7">7</option>';
						    			} 
						    		?>
						    	</select>
						  	</div>
						  	<div class="form-group">
						    	<label for="jumlah">Jumlah</label>
						    	<input type="text" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah">
						  	</div>
						  	<button type="submit" class="btn btn-success">Simpan</button>
						</form>
					</div>
		      	</div>
		      </div>
		    </div>
		</div>
	</div><!--/.row-->
	
	<?php if(isset($jumlah)) {
		
		foreach($jumlah as $j){
			
		}

		?>
	
	<div class="row">
		<div class="col-md-6 left">
			<div class="panel-group">
				<div class="panel panel-orange">
				    <div class="panel-heading" data-toggle="collapse" href="#collapse1">
					    <h4 class="panel-title">
				    	    Semester 1
				    	</h4>
				    </div>
				    <div id="collapse1" class="panel-collapse collapse">
				    	<div class="panel-body">
							<?php 
								$jml = $jumlah[0]->jumlah == '' ? 0:$jumlah[0]->jumlah;
				    			if($jml==0){
				    				echo '<p class="text-center>Tidak Ada Kelas</p>';
				    			}else{
				    				for($i=0;$i<$jml;$i++){?>
				    				<a href="<?php echo base_url('admin/pemilih/daftarPemilih/'.$prodi.'/1/'.$kelas[$i]);?>" class="btn btn-info"><?php echo 'Kelas '.$kelas[$i];?></a>
				    				<br>
				    		<?php } 
				    			} ?>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
		<div class="col-md-6 right">
			<div class="panel-group">
				<div class="panel panel-orange">
				    <div class="panel-heading" data-toggle="collapse" href="#collapse2">
					    <h4 class="panel-title">
				    	    Semester 3
				    	</h4>
				    </div>
				    <div id="collapse2" class="panel-collapse collapse">
				    	<div class="panel-body">
				    		<?php 
								$jml = $jumlah[1]->jumlah == '' ? 0:$jumlah[0]->jumlah;
				    			if($jml==0){
				    				echo '<p class="text-center>Tidak Ada Kelas</p>';
				    			}else{
				    				for($i=0;$i<$jml;$i++){?>
				    				<a href="<?php echo base_url('admin/pemilih/daftarPemilih/'.$prodi.'/3/'.$kelas[$i]);?>" class="btn btn-info"><?php echo 'Kelas '.$kelas[$i];?></a>
				    				<br>
				    		<?php } 
				    			} ?>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 left">
			<div class="panel-group">
				<div class="panel panel-orange">
				    <div class="panel-heading" data-toggle="collapse" href="#collapse3">
					    <h4 class="panel-title">
				    	    Semester 5
				    	</h4>
				    </div>
				    <div id="collapse3" class="panel-collapse collapse">
				    	<div class="panel-body">
				    		<?php 
				    			$jml = $jumlah[2]->jumlah == '' ? 0:$jumlah[0]->jumlah;
				    			if($jml==0){
				    				echo '<p class="text-center>Tidak Ada Kelas</p>';
				    			}else{
				    				for($i=0;$i<$jml;$i++){?>
				    				<a href="<?php echo base_url('admin/pemilih/daftarPemilih/'.$prodi.'/5/'.$kelas[$i]);?>" class="btn btn-info" style="color:#fff;display:block;text-align:center;"><?php echo 'Kelas '.$kelas[$i];?></a>
				    				<br>
				    		<?php } 
				    			} ?>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	<?php if($prodi == 'ti'){ ?>
		<div class="col-md-6 right">
			<div class="panel-group">
				<div class="panel panel-orange">
				    <div class="panel-heading" data-toggle="collapse" href="#collapse4">
					    <h4 class="panel-title">
				    	    Semester 7
				    	</h4>
				    </div>
				    <div id="collapse4" class="panel-collapse collapse">
				    	<div class="panel-body">
							<?php
								$jml = 0;
								// if(isset($jumlah[3])){
								// 	$jml = $jumlah[3]->jumlah;
								// }
								
				    			if($jml == 0){
				    				echo '<p class="text-center>Tidak Ada Kelas</p>';
				    			} else {
				    				for($i=0;$i<$jml;$i++){ ?>
				    					<a href="<?php echo base_url('admin/pemilih/daftarPemilih/'.$prodi.'/7/'.$kelas[$i]);?>" class="btn btn-info" style="color:#fff;display:block;text-align:center;"><?php echo 'Kelas '.$kelas[$i];?></a>
				    				<br>
				    		<?php 	} 
				    			} ?>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php } ?>

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


