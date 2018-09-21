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
						<li><a href="<?php echo base_url('admin/c_admin/settings'); ?>"><i class="fa fa-cog"></i> Settings</a></li>
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
	<div class="attribution">Powered by <a href="http://fb.com/fredy.nurapriyanto">Fredd</a></div>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-list-alt"></i></a></li>
			<li>Pemilih</li>
			<li class="active"><?php echo $nama_prodi;?></li>
			<li class="active"><?php echo $smt.' '.$kelas;?></li>
		</ol>
	</div><!--/.row-->        
	
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header"><?php echo $nama_prodi;?></h2>
		</div>
	</div><!--/.row-->
		
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Data Kelas <?php echo $smt." ".$kelas;?></div>
				<div class="panel-body">
				<?php if($this->session->flashdata('info')): ?>
					<div class="alert alert-warning">
						<?php echo $this->session->flashdata('info'); ?>
					</div>
				<?php endif; ?>
				<a href="<?php echo base_url('admin/pemilih/add_pemilih/'.$prodi.'/'.$smt.'/'.$kelas);?>" class="btn btn-success btn-sm btn-add"><i class="fa fa-user-plus"></i> Tambah Data</a>
				&nbsp;
				<a href="#" onclick="functionLock('<?php echo base_url('admin/pemilih/lockAll/'.$prodi.'/'.$smt.'/'.$kelas);?>')" class="btn btn-warning btn-sm"><i class="fa fa-lock"></i> Lock All</a>
				<a href="#" onclick="functionUnlock('<?php echo base_url('admin/pemilih/unlockAll/'.$prodi.'/'.$smt.'/'.$kelas);?>')" class="btn btn-info btn-sm"><i class="fa fa-unlock"></i> Unlock All</a>
				<div class="table-responsive">
					<table id="table" class="table table-striped table-condensed table-hover table-bordered">
						<thead>
							<tr class="info">
								<th>No</th>
								<th>Username</th>	      					
								<th>Nama</th>
								<th>Lock by</th>
								<th>Unlock by</th>
								<th>Presma</th>
								<th>Kahim</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							if(!$pemilih==null){
								foreach($pemilih as $data){;?>
							<tr>
								<td><?php echo $no++;?></td>
								<td><?php echo $data->username;?></td>
								<td><?php echo $data->first_name.' '.$data->last_name;?></td>

								<?php 
									if($data->lock_by==null){ ?>
										<td>-</td>
								<?php } else {?>
										<td><?php echo $data->lock_by;?></td>
								<?php }
									if($data->unlock_by==null){ ?>
										<td>-</td>
								<?php } else {?>
										<td><?php echo $data->unlock_by;?></td>
								<?php }?>

								<?php if($data->status_presma==0){?>
									<td class="text-center">Belum</td>
								<?php } else{?>
									<td class="text-center">Sudah</td>
								<?php } 
									if($data->status_kahim==0){ ?>
									<td>Belum</td>
								<?php } else{?>
									<td>Sudah</td>
								<?php } ?>
								<td class="text-center">
									<?php if($data->active==0){?>
										<a href="<?php echo base_url('admin/pemilih/unlock/'.$data->id.'/'.$prodi.'/'.$smt.'/'.$kelas);?>" class="btn btn-info btn-xs"><i class="fa fa-lock"></i> Buka</a>
									<?php } else{?>
										<a href="<?php echo base_url('admin/pemilih/lock/'.$data->id.'/'.$prodi.'/'.$smt.'/'.$kelas);?>" class="btn btn-info btn-xs"><i class="fa fa-unlock"></i> Kunci</a>
									<?php }?>
									
									<a href="<?php echo base_url('admin/pemilih/edit_pemilih/'.$data->id.'/'.$prodi.'/'.$smt.'/'.$kelas);?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
									<a href="#" onclick="functionDelete('<?php echo base_url('admin/pemilih/del_pemilih/'.$data->id.'/'.$prodi.'/'.$smt.'/'.$kelas);?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<?php }
						} else { ?>
							<tr>
								<td colspan="8" class="text-center">Tidak Ada Data</td>
							</tr>
						<?php } ?>
						
						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div><!--/.row-->

</div>	<!--/.main-->
<script>

	function functionLock(url){
		swal({
		title: 'Apakah Anda Yakin?',
		text: "Anda akan mengunci semua yang dipilih!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, Lock all!',
		cancelButtonText: 'No, cancel!',
		confirmButtonClass: 'btn btn-success',
		cancelButtonClass: 'btn btn-danger',
		buttonsStyling: false
		}).then(function () {
			swal("Terkunci!", "Data berhasil dikunci!", "success");
			window.location = url;

		}, function (dismiss) {
		// dismiss can be 'cancel', 'overlay',
		// 'close', and 'timer'
		if (dismiss === 'cancel') {
			swal("Cancelled", "Data gagal dikunci!", "error")
		}

		});
	}

	function functionUnlock(url){
		swal({
		title: 'Apakah Anda Yakin?',
		text: "Anda akan membuka kunci semua yang dipilih!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, Unlock all!',
		cancelButtonText: 'No, cancel!',
		confirmButtonClass: 'btn btn-success',
		cancelButtonClass: 'btn btn-danger',
		buttonsStyling: false
		}).then(function () {
			swal("Terbuka!", "Kunci data berhasil dibuka!", "success");
			window.location = url;

		}, function (dismiss) {
		// dismiss can be 'cancel', 'overlay',
		// 'close', and 'timer'
		if (dismiss === 'cancel') {
			swal("Cancelled", "Kunci data gagal dibuka!", "error")
		}

		});
	}

	$(window).on('resize', function () {
		if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
	})
	$(window).on('resize', function () {
		if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
	})
</script>


