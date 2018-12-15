<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	
	<div class="sidebar-header">
		<i class="fa fa-user"></i>
		<span><?php echo $user->username;?></span>
		<hr>
	</div>
	<ul class="nav menu">
		<li><a href="<?php echo base_url('admin/c_admin');?>"><i class="fa fa-home"></i> Dashboard</a></li>
		<li  class="active"><a href="<?php echo base_url('admin/petugas/');?>"><i class="fa fa-users"></i> Petugas</a></li>		

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
		<li role="presentation" class="divider"></li>
		
	</ul>
	<div class="attribution">Powered by <a href="http://fb.com/fredy.nurapriyanto">Fredd</a></div>
</div><!--/.sidebar-->
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-users"></i></a></li>
			<li class="active">Petugas</li>
		</ol>
	</div><!--/.row-->        
	
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Petugas</h2>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Data Petugas</div>
				<div class="panel-body">
				<?php if($this->session->flashdata('info')): ?>
					<div class="alert alert-warning">
						<?php echo $this->session->flashdata('info'); ?>
					</div>
				<?php endif; ?>
				<a href="<?php echo base_url('admin/petugas/add_petugas');?>" class="btn btn-success btn-sm btn-add"><i class="fa fa-user-plus"></i> Tambah Data</a>
				<div class="table-responsive">
					<table id="table" class="table table-striped table-condensed table-hover table-bordered">
						<thead>
							<tr class="info">
								<th>No</th>
								<th>Username</th>
								<th>Nama</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							if(!$petugas==null){
								foreach($petugas as $data){;?>
							<tr>
								<td><?php echo $no++;?></td>
								<td><?php echo $data->username;?></td>
								<td><?php echo $data->first_name.' '.$data->last_name;?></td>
								<td class="text-center">
									<?php if($data->active==0){ ?>
										<a href="<?php echo base_url('admin/petugas/aktifkan/'.$data->id);?>" class="btn btn-success btn-xs">Actived</a>
									<?php } else { ?>
										<a href="<?php echo base_url('admin/petugas/aktifkan/'.$data->id);?>" class="btn btn-danger btn-xs">Deactived</a>
									<?php } ?>
									<a href="<?php echo base_url('admin/petugas/edit_petugas/'.$data->id);?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
									<a href="#" onclick="functionDelete('<?php echo base_url('admin/petugas/del_petugas/'.$data->id);?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<?php }
						} else { ?>
							<tr>
								<td colspan="4" class="text-center">Tidak Ada Data</td>
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

	$(window).on('resize', function () {
		if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
	})
	$(window).on('resize', function () {
		if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
	})
</script>


