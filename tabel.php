<html>
	<head>
		<title> Data Mahasiswa</title>
	</head>
	<body>
		<table border="1px" style="border-collapse: collapse;" width="40%">
			<tr style="background: gray">
				<th>No Induk</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Action</th>
			</tr>
			<?php foreach ($data as $d){ ?>
				<tr>
					<td><?php echo $d['nim']; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['alamat']; ?></td>
					<td align="center">
						<a href="<?php echo base_url()."/index.php/crud/edit_data/".$d['nim']; ?>">Edit</a> ||
						<a href="<?php echo base_url()."/index.php/crud/delete_data/".$d['nim']; ?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</table>
		<a href="<?php echo base_url()."/index.php/crud/add_data"; ?>">Tambah Data</a>
	</body>
</html>