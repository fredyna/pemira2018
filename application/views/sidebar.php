<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
	<div class="sidebar-header">
		<i class="fa fa-user"></i>
		<span><?php echo $user->username;?></span>
		<hr>
	</div>
	<ul class="nav menu">
		<li><a href="<?php echo base_url('admin/admin');?>"><i class="fa fa-home"></i> Dashboard</a></li>
		<li  class=""><a href="<?php echo base_url('admin/petugas/');?>"><i class="fa fa-users"></i> Petugas</a></li>		

		<li class="parent ">
			<a data-toggle="collapse" href="#data-pemilih">
				<span><i class="fa fa-list-alt"></i></span>
				Data Pemilih <span><i class="fa fa-chevron-circle-down"></i></span>
			</a>
			<ul class="children collapse in" id="data-pemilih">
				<li>
					<a class="active" href="<?php echo base_url('admin/pemilih/ti/');?>">
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

		<li><a href="<?php echo base_url('admin/admin/laporan');?>"><i class="fa fa-file"></i> Laporan</a></li>
		<li><a href="<?php echo base_url('admin/admin/settings');?>"><i class="fa fa-cog"></i> Settings</a></li>	
		<li role="presentation" class="divider"></li>
		
	</ul>
	<div class="attribution">Powered by <a href="http://fb.com/fredy.nurapriyanto">Fredd</a></div>
</div><!--/.sidebar-->