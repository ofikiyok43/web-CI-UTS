<!DOCTYPE html>
<html>
<head>
	<title>BABI</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
</head>
<body>
	<div class="container">
		<h2>HALAMAN MAHASISWA</h2>
		<hr>
		<a href="<?php echo site_url('mahasiswa/tambah') ?>" class="btn btn-primary">Tambah Data</a>
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nim</th>
					<th>Nama</th>
					<th>Prodi</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
				
			</thead>
			<tbody>
				<?php 
				$no = 1;
				foreach ($isi as $key) {
					
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $key->nim; ?></td>
						<td><?php echo $key->nama; ?></td>
						<td><?php echo $key->prodi ?></td>
						<td><?php echo $key->alamat ?></td>
						<td></td>
					</tr>
					<?php 
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>