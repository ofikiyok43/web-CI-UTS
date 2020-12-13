<!DOCTYPE html>
<html>
<head>
	<title>UTS</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: blue">
		<a href="" class="navbar-brand">TUGAS</a>
		<div class="navbar-nav">
			<a href="<?php echo site_url('CController') ?>" class="nav-link">Home</a>
			<a href="<?php echo site_url('CController/tambah') ?>" class="nav-link active">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link">TAUFIQ ANDRIAN</a>
		</div>
	</nav>
	<!-- NAVBAR END -->
	
	<!-- Alert -->
	<div class="alert alert-warning text-center mt-0">
		Tambah Data Mahasiswa
	</div>
	<!-- Alert END -->
	<div class="container">
		<form action="<?php echo site_url('CController/proses_tambah') ?>" method="post">
			<div class="form-group">
				<label for="">Jurusan</label>
				<input type="text" name="kolom_jurusan" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Kelas</label>
				<input type="text" name="kolom_kelas" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Isi</label>
				<input type="text" name="kolom_isi" class="form-control">
			</div>
			<input type="submit" name="submit" value="simpan" class="btn btn-success">
			<a href="<?php echo site_url('CController/index')?>" class = "btn btn-danger">Batal</a>
		</form>
	</div>

</body>
</html>