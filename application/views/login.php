<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Pemira PHB 2017" />
<meta name="keywords" content="Pemira,Pemilu,Pemilihan Raya,PHB"/>
<meta name="author" content="BPM PHB"/>
<meta name="viewport" content="device=device-width, initial-scale=1.0" />
<title><?php echo $title;?></title>

<link rel="shortcut icon" href="<?php echo base_url('assets/images/pemilu.ico'); ?>" type="image/x-icon">
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/sweetalert.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
<nav class="navbar navbar-default navbar-admin">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    	<div class="navbar-brand" href="#">PEMIRA
      	<br>
        	<a href="#" style="font-size: 10px;">Politeknik Harapan Bersama</a>
      	</div>
    </div>
  </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid admin-form">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel-group">
				<div class="panel panel-info">
			    	<div class="panel-heading">Login</div>
			    	<div class="panel-body">
			    		<?php if($this->session->flashdata('info')): ?>
			    			<div class="alert alert-warning">
			    				<?php echo $this->session->flashdata('info'); ?>
			    			</div>
			    		<?php endif; ?>
			      		<?php
							$name = array(
								'name'=>'login',
								'class'=>'form-horizontal'
								); 
							echo form_open('auth/login',$name);
						?>
						  	<div class="form-group">
							    <label class="sr-only" for="username">Username</label>
							    <div class="input-group">
								    <div class="input-group-addon">
								    	<i class="fa fa-user"></i>
								    </div>
								    <input type="text" class="form-control" name="username" placeholder="Username / NIM">
							    </div>
							    <?php echo form_error('username');?>
							</div>
							<div class="form-group">
								<label class="sr-only" for="username">Password</label>
							    <div class="input-group">
								    <div class="input-group-addon">
								    	<i class="fa fa-lock"></i>
								    </div>
								    <input type="password" class="form-control" name="password" placeholder="Password">
							    </div>
							    <?php echo form_error('password'); ?>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success submit" name="submit" value="Login">
							</div>
						</form>
			    	</div>
			    </div>
			</div>
		</div>
	</div>
</div>
</body>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/sweetalert.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/main.js');?>"></script>
</html>