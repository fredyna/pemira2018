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
			<li class="active">Settings</li>
		</ol>
	</div><!--/.row-->  

	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Settings</h2>
		</div>
	</div><!--/.row-->      
	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
					<div class="panel-heading">Change Password</div>
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
						echo form_open('petugas/c_petugas/change_password/'.$user->id,$name);
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
									<button type="submit" class="btn btn-primary btn-sm">Change</button>
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
									<?php if($this->session->flashdata('info-data')): ?>
									<div class="alert alert-warning">
								<?php echo $this->session->flashdata('info-data'); ?>
							</div>
							<?php endif; ?>
								<?php
						$name = array(
							'name'=>'change-username',
							'class'=>'form-horizontal'
							); 
						echo form_open('petugas/c_petugas/change_data/'.$user->id,$name);
						?>
							<div class="form-group">
								<label for="username" class="col-sm-4 control-label">Username</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="username" name="username" value="<?php echo $user->username;?>">
									<?php echo form_error('username');?>
								</div>							    
							</div>
							<div class="form-group">
								<label for="firstname" class="col-sm-4 control-label">First Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user->first_name;?>">
									<?php echo form_error('firstname');?>
								</div>
							</div>
								<div class="form-group">
								<label for="lastname" class="col-sm-4 control-label">Last Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user->last_name;?>">
									<?php echo form_error('lastname');?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-4 col-sm-8">
									<button type="submit" name="submit" class="btn btn-primary btn-sm">Change</button>
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


