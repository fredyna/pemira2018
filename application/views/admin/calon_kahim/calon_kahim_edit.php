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
				<ul class="children collapse in" id="calon">
					<li>
						<a class="" href="<?php echo base_url('admin/calon/presma/');?>">
							<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
							 Calon Presma
						</a>
					</li>
					<li class="active">
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
	<div class="attribution">Powered by <a href="https://smitphb.org">SMIT Team</a></div>
</div><!--/.sidebar-->
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-user"></i></a></li>
			<li class="active">Calon Presma</li>
		</ol>
	</div><!--/.row-->        
	
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Calon Presma</h2>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Edit Data Presma</div>
				<div class="panel-body">
					<?php if($this->session->flashdata('info')): ?>
						<div class="alert alert-warning">
							<?php echo $this->session->flashdata('info'); ?>
						</div>
					<?php endif; ?>

					<?php
					$name = array(
						'name'=>'editCalon',
						'class'=>'form-horizontal'
						); 
					echo form_open('admin/calon/editCalonKahim/'.$calon->id,$name);
					?>
					 <div class="form-group">
					    <label for="no_calon" class="col-sm-4 control-label">No Calon</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="no_calon" name="no_calon" placeholder="No Calon" value="<?php echo $calon->no_calon;?>">
					       <?php echo form_error('no_calon');?>
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="nama" class="col-sm-4 control-label">Nama</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Calon Kahim" value="<?php echo $calon->nama;?>">
					       <?php echo form_error('nama');?>
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="prodi" class="col-sm-4 control-label">Prodi</label>
					    <div class="col-sm-8">
					      <select name="prodi" class="form-control">
					      	<option value="<?php echo $calon->id_prodi;?>"><?php echo $calon->nama_prodi;?></option>
					      	<?php if($prodi!=null){ 
					      		foreach($prodi as $p){ ?>
					      		<option value="<?php echo $p->id;?>"><?php echo $p->nama;?></option>
					      	<?php } 
					      	} ?>
					      </select>
					       <?php echo form_error('prodi');?>
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="visi" class="col-sm-4 control-label">Visi</label>
					    <div class="col-sm-8">
					    	<textarea name="visi" class="form-control" placeholder="Isikan visi"><?php echo $calon->visi;?></textarea>
					       <?php echo form_error('visi');?>
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="misi" class="col-sm-4 control-label">Misi</label>
					    <div class="col-sm-8">
					    	<textarea name="misi" class="form-control" placeholder="Isikan Misi"><?php echo $calon->misi;?></textarea>
					       <?php echo form_error('misi');?>
					    </div>
					  </div>
					  
					  <div class="form-group">
					    <div class="col-sm-offset-4 col-sm-8">
								<input type="submit" name="submit" class="btn btn-success btn-sm" value="Simpan">
								&nbsp;
								<a href="<?php echo base_url('admin/calon/kahim'); ?>" class="btn btn-sm btn-warning"> Kembali</a>				
					    </div>
					  </div>
					</form>
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


