<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan Hasil Pemira 2017</title>
	<link rel="shorcut icon" href="<?php echo base_url('assets/images/pemilu.ico');?>" types="images/x-icon">
	<style type="text/css">
		table {
			border-collapse: collapse;
		}
		table thead tr th,
		table tbody tr td {
	    font-size: 12px;
			padding: 5px;
		}
	</style>
</head>
<body>
	<?php 
		date_default_timezone_set('Asia/Jakarta');
		$tahun = date('Y');
		$no = 1; 
    $no1 = 1;
    $no2 = 1;
    $no3 = 1;
    $no4 = 1;
    $no5 = 1;
    $no6 = 1;
    $no7 = 1;
	?>
	<h4 style="text-align: center;">LAPORAN HASIL PEMIRA</h4>
  <h4 style="text-align: center;">POLITEKNIK HARAPAN BERSAMA</h4>
  <h4 style="text-align: center;margin-top: 0px;">TAHUN 2017</h4>
  <br /><br />
  <h5>Laporan Hasil Pemilihan Presma</h5>
	<table border="1" style="width: 100%;">
    <thead>
      <tr>
        <th style="background-color:#444;color:#fff;" width="30px">No</th>
        <th style="background-color:#444;color:#fff;" width="30px">No Calon</th>
        <th style="background-color:#444;color:#fff;" width="150px">Nama Capresma</th>
        <th style="background-color:#444;color:#fff;" width="150px">Nama Cawapresma</th>
        <th style="background-color:#444;color:#fff;" width="30px">Banyak Suara</th>
      </tr>
    </thead>
     <tbody>
      <?php
      	if($suara_presma!=null){
      		foreach($suara_presma as $s){
      ?>
      <tr>
        <td><?php echo $no++;?></td>
        <td style="text-align: center;"><?php echo $s->no_calon;?></td>
        <td><?php echo $s->nama_pres;?></td>
        <td><?php echo $s->nama_wapres;?></td>
        <td style="text-align: right;"><?php echo $s->suara;?></td>
      </tr>
      <?php } 
      	} else { ?>
        <tr>
          <td colspan="5" style="text-align:center;"><i>Tidak Ada Data</i></td>
        </tr>
      <?php } ?>
  </table>

  <br /><br />
  <h5>Laporan Hasil Pemilihan Kahim D4 Teknik Informatika</h5>
  <table border="1" style="width: 100%;">
    <thead>
      <tr>
        <th style="background-color:#444;color:#fff;" width="30px">No</th>
        <th style="background-color:#444;color:#fff;" width="30px">No Calon</th>
        <th style="background-color:#444;color:#fff;" width="175px">Nama Calon</th>
        <th style="background-color:#444;color:#fff;" width="30px">Banyak Suara</th>
      </tr>
    </thead>
     <tbody>
      <?php
        if($suara_ti!=null){
          foreach($suara_ti as $s){
      ?>
      <tr>
        <td><?php echo $no1++;?></td>
        <td style="text-align: center;"><?php echo $s->no_calon;?></td>
        <td><?php echo $s->nama;?></td>
        <td style="text-align: right;"><?php echo $s->suara;?></td>
      </tr>
      <?php } 
        } else { ?>
        <tr>
          <td colspan="4" style="text-align:center;"><i>Tidak Ada Data</i></td>
        </tr>
      <?php } ?>
  </table>

  <br /><br />
  <h5>Laporan Hasil Pemilihan Kahim D3 Akuntansi</h5>
  <table border="1" style="width: 100%;">
    <thead>
      <tr>
        <th style="background-color:#444;color:#fff;" width="30px">No</th>
        <th style="background-color:#444;color:#fff;" width="30px">No Calon</th>
        <th style="background-color:#444;color:#fff;" width="175px">Nama Calon</th>
        <th style="background-color:#444;color:#fff;" width="30px">Banyak Suara</th>
      </tr>
    </thead>
     <tbody>
      <?php
        if($suara_ak!=null){
          foreach($suara_ak as $s){
      ?>
      <tr>
        <td><?php echo $no2++;?></td>
        <td style="text-align: center;"><?php echo $s->no_calon;?></td>
        <td><?php echo $s->nama;?></td>
        <td style="text-align: right;"><?php echo $s->suara;?></td>
      </tr>
      <?php } 
        } else { ?>
        <tr>
          <td colspan="4" style="text-align:center;"><i>Tidak Ada Data</i></td>
        </tr>
      <?php } ?>
  </table>

  <br /><br />
  <h5>Laporan Hasil Pemilihan Kahim D3 Kebidanan</h5>
  <table border="1" style="width: 100%;">
    <thead>
      <tr>
        <th style="background-color:#444;color:#fff;" width="30px">No</th>
        <th style="background-color:#444;color:#fff;" width="30px">No Calon</th>
        <th style="background-color:#444;color:#fff;" width="175px">Nama Calon</th>
        <th style="background-color:#444;color:#fff;" width="30px">Banyak Suara</th>
      </tr>
    </thead>
     <tbody>
      <?php
        if($suara_kb!=null){
          foreach($suara_kb as $s){
      ?>
      <tr>
        <td><?php echo $no3++;?></td>
        <td style="text-align: center;"><?php echo $s->no_calon;?></td>
        <td><?php echo $s->nama;?></td>
        <td style="text-align: right;"><?php echo $s->suara;?></td>
      </tr>
      <?php } 
        } else { ?>
        <tr>
          <td colspan="4" style="text-align:center;"><i>Tidak Ada Data</i></td>
        </tr>
      <?php } ?>
  </table>

  <br /><br />
  <h5>Laporan Hasil Pemilihan Kahim D3 Farmasi</h5>
  <table border="1" style="width: 100%;">
    <thead>
      <tr>
        <th style="background-color:#444;color:#fff;" width="30px">No</th>
        <th style="background-color:#444;color:#fff;" width="30px">No Calon</th>
        <th style="background-color:#444;color:#fff;" width="175px">Nama Calon</th>
        <th style="background-color:#444;color:#fff;" width="30px">Banyak Suara</th>
      </tr>
    </thead>
     <tbody>
      <?php
        if($suara_fm!=null){
          foreach($suara_fm as $s){
      ?>
      <tr>
        <td><?php echo $no4++;?></td>
        <td style="text-align: center;"><?php echo $s->no_calon;?></td>
        <td><?php echo $s->nama;?></td>
        <td style="text-align: right;"><?php echo $s->suara;?></td>
      </tr>
      <?php } 
        } else { ?>
        <tr>
          <td colspan="4" style="text-align:center;"><i>Tidak Ada Data</i></td>
        </tr>
      <?php } ?>
  </table>

  <br /><br />
  <h5>Laporan Hasil Pemilihan Kahim D3 Komputer</h5>
  <table border="1" style="width: 100%;">
    <thead>
      <tr>
        <th style="background-color:#444;color:#fff;" width="30px">No</th>
        <th style="background-color:#444;color:#fff;" width="30px">No Calon</th>
        <th style="background-color:#444;color:#fff;" width="175px">Nama Calon</th>
        <th style="background-color:#444;color:#fff;" width="30px">Banyak Suara</th>
      </tr>
    </thead>
     <tbody>
      <?php
        if($suara_kom!=null){
          foreach($suara_kom as $s){
      ?>
      <tr>
        <td><?php echo $no5++;?></td>
        <td style="text-align: center;"><?php echo $s->no_calon;?></td>
        <td><?php echo $s->nama;?></td>
        <td style="text-align: right;"><?php echo $s->suara;?></td>
      </tr>
      <?php } 
        } else { ?>
        <tr>
          <td colspan="4" style="text-align:center;"><i>Tidak Ada Data</i></td>
        </tr>
      <?php } ?>
  </table>

  <br /><br />
  <h5>Laporan Hasil Pemilihan Kahim D3 Teknik Mesin</h5>
  <table border="1" style="width: 100%;">
    <thead>
      <tr>
        <th style="background-color:#444;color:#fff;" width="30px">No</th>
        <th style="background-color:#444;color:#fff;" width="30px">No Calon</th>
        <th style="background-color:#444;color:#fff;" width="175px">Nama Calon</th>
        <th style="background-color:#444;color:#fff;" width="30px">Banyak Suara</th>
      </tr>
    </thead>
     <tbody>
      <?php
        if($suara_tm!=null){
          foreach($suara_tm as $s){
      ?>
      <tr>
        <td><?php echo $no6++;?></td>
        <td style="text-align: center;"><?php echo $s->no_calon;?></td>
        <td><?php echo $s->nama;?></td>
        <td style="text-align: right;"><?php echo $s->suara;?></td>
      </tr>
      <?php } 
        } else { ?>
        <tr>
          <td colspan="4" style="text-align:center;"><i>Tidak Ada Data</i></td>
        </tr>
      <?php } ?>
  </table>

  <br /><br />
  <h5>Laporan Hasil Pemilihan Kahim D3 Teknik Elektro</h5>
  <table border="1" style="width: 100%;">
    <thead>
      <tr>
        <th style="background-color:#444;color:#fff;" width="30px">No</th>
        <th style="background-color:#444;color:#fff;" width="30px">No Calon</th>
        <th style="background-color:#444;color:#fff;" width="175px">Nama Calon</th>
        <th style="background-color:#444;color:#fff;" width="30px">Banyak Suara</th>
      </tr>
    </thead>
     <tbody>
      <?php
        if($suara_te!=null){
          foreach($suara_te as $s){
      ?>
      <tr>
        <td><?php echo $no7++;?></td>
        <td style="text-align: center;"><?php echo $s->no_calon;?></td>
        <td><?php echo $s->nama;?></td>
        <td style="text-align: right;"><?php echo $s->suara;?></td>
      </tr>
      <?php } 
        } else { ?>
        <tr>
          <td colspan="4" style="text-align:center;"><i>Tidak Ada Data</i></td>
        </tr>
      <?php } ?>
  </table>

  <br /><br />
  <p><span style="color:red;">*</span><b> Note</b> : Hasil akhir perhitungan ini murni dari perhitungan suara yang masuk pada sistem, tidak ada rekayasa dari panitia Pemira KM PHB 2017 dan tim pengembang sistem ini.</p>
  <p style="text-align: center;">~ Fredy Nur Apriyanto - Chief Technology Officer (CTO) on <b>SMIT</b> ~</p>
	
</body>
</html>