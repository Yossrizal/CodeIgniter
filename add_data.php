<html>
	<head>
		<title> Edit Data </title>
	</head>
	<body>
		<form method="POST" action="<?php echo base_url()."/index.php/crud/save_data"; ?>">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnSubmit" value="Add Data"></input>
				</td> 			
				</tr>
		</table>
		</form>
	</body>
</html>