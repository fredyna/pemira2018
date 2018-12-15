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
		<div class="attribution">Powered by <a href="https://smitphb.org">SMIT Team</a></div>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-list-alt"></i></a></li>
			<li>Pemilih</li>
			<li class="active"><?php echo $nama_prodi; ?></li>
			<li class="active"><?php echo $smt.' '.$kelas;?></li>
		</ol>
	</div><!--/.row-->        
	
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header"><?php echo $nama_prodi; ?></h2>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
		      <div class="panel-heading">
		      	Change Password			      	
		      </div>
		      <div class="panel-body">
		      	<div class="row">
		      		<div class="col-xs-12 col-md-8 col-md-offset-2">
		      			<?php if($this->session->flashdata('info-password')): ?>
		      				<div class="alert alert-warning">
		    					<?php echo $this->session->flashdata('info-password'); ?>
		    				</div>
		    			<?php endif; ?>
		      			<?php
						$name = array(
							'name'=>'change-password',
							'class'=>'form-horizontal'
							); 
						echo form_open('admin/pemilih/change_password/'.$pemilih->id.'/'.$prodi.'/'.$smt.'/'.$kelas,$name);
						?>
						  <div class="form-group">
						    <label for="new_password" class="col-sm-4 control-label">New Password</label>
						    <div class="col-sm-8">
						      <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Panjang Minimal 6 Karakter">
						       <?php echo form_error('new_password');?>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="r_password" class="col-sm-4 control-label">Repeat Password</label>
						    <div class="col-sm-8">
						      <input type="password" class="form-control" id="r_password" name="r_password" placeholder="Repeat Password">
						    <?php echo form_error('r_password');?>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-4 col-sm-8">
						      <button type="submit" class="btn btn-success btn-sm">Change</button>
									&nbsp;
									<a href="<?php echo base_url('admin/pemilih/daftarPemilih/'.$prodi.'/'.$smt.'/'.$kelas);?>" class="btn btn-warning btn-sm">Kembali</a>
						    </div>
						  </div>
						</form>
		      		</div>
		      	</div>
		      </div>
		    </div>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
		      <div class="panel-heading">Change Data</div>
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
							'name'=>'change-username',
							'class'=>'form-horizontal'
							); 
						echo form_open('admin/pemilih/change_data/'.$pemilih->id.'/'.$prodi.'/'.$smt.'/'.$kelas,$name);
						?>
						  <div class="form-group">
						    <label for="username" class="col-sm-4 control-label">Username</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="username" name="username" value="<?php echo $pemilih->username;?>">
						      <?php echo form_error('username');?>
						    </div>							    
						  </div>
						  <div class="form-group">
						    <label for="firstname" class="col-sm-4 control-label">First Name</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $pemilih->first_name;?>">
						    	<?php echo form_error('firstname');?>
						    </div>
						  </div>
						   <div class="form-group">
						    <label for="lastname" class="col-sm-4 control-label">Last Name</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $pemilih->last_name;?>">
						    	<?php echo form_error('lastname');?>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-4 col-sm-8">
						      <button type="submit" name="submit" class="btn btn-success btn-sm">Change</button>
									<a href="<?php echo base_url('admin/pemilih/daftarPemilih/'.$prodi.'/'.$smt.'/'.$kelas);?>" class="btn btn-warning btn-sm">Kembali</a>
						    </div>
						  </div>
						</form>
		      		</div>
		      	</div>
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


