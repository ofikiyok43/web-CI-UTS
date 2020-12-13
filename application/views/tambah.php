<!DOCTYPE html>
<html>
<head>
	<title>BABI</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
</head>
<body>

	<div class="container">
		<h2>TAMBAH DATA</h2>
		<hr>
		<form action="<?php echo site_url('mahasiswa/proses_tambah') ?>" method="post">
			<div class="form-group">
				<label for="">Nim</label>
				<input type="number" name="txtnim" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" name="txtnama" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Prodi</label>
				<input type="text" name="txtprodi" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Alamat</label>
				<textarea name="txtalamat" class="form-control" id="" cols="30" rows="10"></textarea>
			</div>
			<input type="submit" name="submit" value="simpan" class="btn btn-success">
			<a href="<?php echo site_url('mahasiswa/index')?>" class = "btn btn-danger">Batal</a>
		</form>
	</div>

</body>
</html>