<html>
	<head>
		<title>Tutorial Belajar 1</title>
	</head>
	<body>
		<table border="1" style="border-collapse: collapse; width: 50%">
			<tr style="background: gray">
				<th>Nim</th>
				<th>Nama 1</th>
				<th>Alamat</th>
			</tr>
			<?php foreach ($data as $d) {?>
			<tr>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
			</tr>
		<?php } ?>
		</table>
	</body>
</html>