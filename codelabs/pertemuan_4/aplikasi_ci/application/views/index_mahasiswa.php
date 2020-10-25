<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Mahasiswa</title>
</head>

<body>
	<h2>Data Mahasiswa</h2>
	<br>

	<table border="1" width="45%" cellpadding="5" cellspacing="0">
		<tr align="center">
			<td>ID</td>
			<td>NIM</td>
			<td>Nama</td>
			<td>Action</td>
		</tr>
		<?php if (is_array($data_mahasiswa) && count($data_mahasiswa) > 0) : ?>
			<?php foreach ($data_mahasiswa as $row) : ?>
				<tr align="center">
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['nim']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><a href="<?php echo site_url('Mahasiswa/detail/' . $row['nim'] . '/' . $row['nama']); ?>">Detail</a> | Edit | Delete</td>
				</tr>
			<?php endforeach; ?>

		<?php else : ?>
			<tr>
				<td colspan="4" style="text-align: center;">Tidak ada data</td>
			</tr>

		<?php endif; ?>
	</table>

</body>

</html>
