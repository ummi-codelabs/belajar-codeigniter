<div class="container mt-5">
	<h2>Data Mahasiswa</h2>

	<a href="<?php echo site_url('mahasiswa/form_add'); ?>" class="btn btn-primary">Tambah Data</a>



	<!--notifikasi-->
	<?php if ($this->session->flashdata('notifikasi')) : ?>
		<div class="alert alert-success"><?php echo $this->session->flashdata('notifikasi'); ?></div>
	<?php endif; ?>


	<table class="table">
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
					<td>
						<a href="<?php echo site_url('Mahasiswa/detail/' . $row['nim'] . '/' . $row['nama']); ?>" class="btn btn-info">Detail</a>
						<a href="" class="btn btn-info">Edit</a>
						<a href="" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>

		<?php else : ?>
			<tr>
				<td colspan="4" style="text-align: center;">Tidak ada data</td>
			</tr>

		<?php endif; ?>
	</table>

</div>
